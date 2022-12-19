<?php
$question = $_POST['quiz_id'];
$description = $_POST['question_description']; 

if (empty($description)) {
    $message = "
     <script>
     toastr.error('Provide the Question Answer.');
     </script>
     ";
} else {
    $filename = $_FILES['post_image']['name'];
    $filetmpname = $_FILES['post_image']['tmp_name'];
    $filesize = $_FILES['post_image']['size'];
    $fileerror = $_FILES['post_image']['error'];
    $filetype = $_FILES['post_image']['type'];
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
                $addcategory = "INSERT INTO question_answers (`quiz_id`, `answered_by`, `answer`, `image`) VALUES(?, ?,?, ?)";
                $checkadd = $conn->prepare($addcategory);
                $queryadd = $checkadd->execute([$question, $userid, $description, $filenamenew]);
                if ($queryadd === true) {
                    echo "<script>
                                window.location.replace('question-answers.php?id=$question');
                                </script>";
                } else {
                    $message = "
            <script>
                toastr.error('An error occurred while uploaded .');
            </script>";
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
