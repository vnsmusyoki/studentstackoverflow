<?php
$password = $_POST['password'];
$cpassword = $_POST['confirm_password'];
$passlen = strlen($password);
if (empty($password) || empty($cpassword)) {
    $message = "
     <script>
     toastr.error('Provide your password details.');
     </script>
     ";
} elseif ($passlen < 6) {
    $message = "
    <script>
    toastr.error('Provide atleast 6 characters for your password.');
    </script>
    ";
} elseif ($password !== $cpassword) {
    $message = "
     <script>
     toastr.error('Password details failed to match.');
     </script>
     ";
} else {

    $password = password_hash($password, PASSWORD_DEFAULT);
    $addcategory = "UPDATE users SET  `password`=? WHERE `id`=?";
    $checkadd = $conn->prepare($addcategory);
    $queryadd = $checkadd->execute([$password, $userid]);
    if ($queryadd === true) {
        echo "<script>
                                window.location.replace('setting.php?updatepassword=success');
                                </script>";
    } else {
        $message = "
            <script>
                toastr.error('An error occurred while uploaded .');
            </script>";
    }
    // peofile upload
}
