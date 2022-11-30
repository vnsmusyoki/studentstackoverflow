<?php
include 'db-connection.php';
$full_name =  $_POST['full_name'];
$email =  $_POST['email'];
$username =  $_POST['username'];
$password =  $_POST['password'];
$cpassword =  $_POST['confirm_password'];
$usernamelength = $_POST['username'];

if (empty($full_name) || empty($email) || empty($username) || empty($cpassword) || empty($password)) {
    $message = "
    <script>
    toastr.error('Provide all details required.');
    </script>
    ";
} else if (!preg_match("/^[a-zA-z0-9]*$/", $username)) {
    $message = "
<script>
toastr.error('Username format is incorrect');
</script>
";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = "
<script>
toastr.error('Incorrect email address. Provide a valid one.');
</script>
";
} else if ($usernamelength < 8) {
    $message = "
    <script>
        toastr.error('Username field require at least 8 characters.');
    </script>";
} elseif ($cpassword !== $password) {
    $message = "
    <script>
        toastr.error('Passwords do not match');</script>";
} else {
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if (empty($user)) {
        $checkusername = $conn->prepare("SELECT * FROM users WHERE username=?");
        $checkusername->execute([$username]);
        $checkusername = $checkusername->fetch();

        if (empty($checkusername)) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $category = "student";
            $addstudent = "INSERT INTO users (`full_names`, `username`, `password`, `email`, `category`) VALUES(?,?,?,?,?)";
            $checkadd = $conn->prepare($addstudent);
            $queryadd = $checkadd->execute([$full_name, $username, $password, $email, $category]);

            if ($queryadd === true) {
                $message = "
            <script>
                toastr.error('Student Account created successfully');
            </scrip>";

                echo "<script>
                                    window.location.replace('sign-in.php?acccount=success');
                                    </script>";
            } else {
                $message = "
                <script>
                    toastr.error('An error occurred during account creation.');
                </script>";
            }
        } else {
            $message = "
            <script>
                toastr.error('Username provided already exists.');
            </script>";
        }
    } else {

        $message = "
            <script>
                toastr.error('Email provided already exists.');
            </script>";
    }
}
