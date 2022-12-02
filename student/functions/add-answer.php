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

    $addcategory = "INSERT INTO question_answers (`quiz_id`, `answered_by`, `answer`) VALUES(?, ?,?)";
    $checkadd = $conn->prepare($addcategory);
    $queryadd = $checkadd->execute([$question, $userid, $description]);
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
