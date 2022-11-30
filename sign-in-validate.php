<?php
include 'db-connection.php';
$email =  $_POST['email'];
$password =  $_POST['password'];

if (empty($email) || empty($password)) {
    $message = "
    <script>
    toastr.error('Provide all details required.');
    </script>
    ";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = "
<script>
toastr.error('Provide a valid one email address.');
</script>
";
} else {
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if (empty($user)) {

        $message = "
        <script>
            toastr.error('Email provided  does not  exists.');
        </script>";
    } else {

        if ($user && password_verify($_POST['password'], $user['password'])) {
            $category = $user['category'];
            if ($category == "student") {
                $_SESSION['student'] = $user['username'];
                echo "<script>window.location.replace('student/dashboard.php');</script>";
            } else {
                $_SESSION['admin'] = $user['username'];
                echo "<script>window.location.replace('admin/dashboard.php');</script>";
            }
        } else {
            $message = "
            <script>
                toastr.error('Password does not match.');</script>";
        }
    }
}
