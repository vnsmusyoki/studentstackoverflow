<?php
$question = $_POST['quiz_id'];
$description = $_POST['question_description'];

if (empty($description)) {
    $message = "
     <script>
     toastr.error('Provide the Feedback response.');
     </script>
     ";
} else {
    $timenow = date("Y-m-d H:i:s", time());
    $status = "solved";
    $addcategory = "UPDATE feedback  SET `response`=?, `status`=?, `date_updated`=? WHERE `id`=?";
    $checkadd = $conn->prepare($addcategory);
    $queryadd = $checkadd->execute([$description, $status, $timenow, $question]);
    if ($queryadd === true) {
        echo "<script>
                                window.location.replace('manage-feedback.php');
                                </script>";
    } else {
        $message = "
            <script>
                toastr.error('An error occurred while uploaded .');
            </script>";
    }
}
