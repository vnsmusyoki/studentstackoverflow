<?php
$description = $_POST['update_bio'];
if (empty($description)) {
    $message = "
     <script>
     toastr.error('Provide your bio.');
     </script>
     ";
} else {

    $addcategory = "UPDATE users SET  `bio`=? WHERE `id`=?";
    $checkadd = $conn->prepare($addcategory);
    $queryadd = $checkadd->execute([$description, $userid]);
    if ($queryadd === true) {
        echo "<script>
                                window.location.replace('setting.php');
                                </script>";
    } else {
        $message = "
            <script>
                toastr.error('An error occurred while uploaded .');
            </script>";
    }
}
