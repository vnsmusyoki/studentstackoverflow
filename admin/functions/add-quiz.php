<?php
$question = $_POST['question_title'];
$category = $_POST['category_id'];
$description = $_POST['question_description'];
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (empty($category) || empty($description)) {
    $message = "
     <script>
     toastr.error('Provide the details asked below.');
     </script>
     ";
} else {
    $filename = $_FILES['answer_image']['name'];
    $filetmpname = $_FILES['answer_image']['tmp_name'];
    $filesize = $_FILES['answer_image']['size'];
    $fileerror = $_FILES['answer_image']['error'];
    $filetype = $_FILES['answer_image']['type'];
    $fileext = explode('.', $filename);
    $fileActualExt = strtolower(end($fileext));
    $allwoed = ['img', 'IMG', 'JPEG', 'jpeg', 'PNG', 'png'];
    if (in_array($fileActualExt, $allwoed)) {
        if ($fileerror === 0) {
            if ($filesize > 30000000) {
                $message = "
                <script>
                    toastr.error('Answer image file is too large. Provide any image with less than 3MB.');
                </script>";
            } else {
                $filenamenew = uniqid('', true) . '.' . $fileActualExt;
                $filedestination = '../quiz_images/' . $filenamenew;
                move_uploaded_file($filetmpname, $filedestination);
                
                $checkcategory = $conn->prepare("SELECT * FROM `questions` WHERE question_title=?");
                $checkcategory->execute([$category]);
                $checkcategory = $checkcategory->fetch();
                if (empty($checkcategory)) {
                    
                    $addcategory = "INSERT INTO questions (`question_title`, `category_id`, `description`, `posted_by`, `image`) VALUES(?,?,?,?,?)";
                    $checkadd = $conn->prepare($addcategory);
                    $queryadd = $checkadd->execute([$question, $category, $description, $userid, $filenamenew]);
                    if ($queryadd === true) {
                        echo "<script>
                                            window.location.replace('manage-questions.php');
                                            </script>";
                    } else {
                        $message = "
                        <script>
                            toastr.error('An error occurred while uploading .');
                        </script>";
                    }
                } else {
                    $message = "
                    <script>
                    toastr.error('Question already exists in our question bank.');
                    </script>
                    ";
                }
            }
        } else {
            $message = "
            <script>
                toastr.error('Please upload only .img, IMG, JPEG, jpeg, PNG, png files');
            </script>";
        }
    }
}
