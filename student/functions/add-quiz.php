<?php
$question = $_POST['question_title'];
$category = $_POST['category_id'];
$description = $_POST['question_description'];
if (empty($category) || empty($description)) {
    $message = "
     <script>
     toastr.error('Provide the details asked below.');
     </script>
     ";
}  else {
    $checkcategory = $conn->prepare("SELECT * FROM `questions` WHERE question_title=?");
    $checkcategory->execute([$category]);
    $checkcategory = $checkcategory->fetch();
    if (empty($checkcategory)) {
        $addcategory = "INSERT INTO questions (`question_title`, `category_id`, `description`, `posted_by`) VALUES(?, ?,?,?)";
        $checkadd = $conn->prepare($addcategory);
        $queryadd = $checkadd->execute([$question, $category, $description, $userid]);
        if ($queryadd === true) {
            echo "<script>
                                window.location.replace('manage-questions.php');
                                </script>";
        } else {
            $message = "
            <script>
                toastr.error('An error occurred while uploaded .');
            </script>";
        }
    } else {
        $message = "
        <script>
        toastr.error('Category Name already exists');
        </script>
        ";
    }
}
