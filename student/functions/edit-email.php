<?php
$oldemail = $_POST['old_email'];
$newemail = $_POST['new_email'];
$confirmnewemail = $_POST['confirm_new_email'];
if (empty($oldemail) || empty($newemail) || empty($confirmnewemail)) {
    $emailmessage = "
     <script>
     toastr.error('Provide your email addresses');
     </script>
     ";
} else if (!filter_var($oldemail, FILTER_VALIDATE_EMAIL) || !filter_var($newemail, FILTER_VALIDATE_EMAIL) || !filter_var($confirmnewemail, FILTER_VALIDATE_EMAIL)) {
    $emailmessage = "
<script>
toastr.error('Please confirm the email addresses submited.');
</script>
";
} elseif ($newemail !== $confirmnewemail) {
    $emailmessage = "
     <script>
     toastr.error('New Email details failed to match.');
     </script>
     ";
} else {

    $checkoldemail = $conn->prepare("SELECT * FROM users WHERE email=?");
    $checkoldemail->execute([$oldemail]);
    $checkuser = $checkoldemail->fetch();

    if (empty($checkuser)) {
        $emailmessage = "
        <script>
            toastr.error(' Old Email Address Does not exist. Provide your old email address');
        </script>";
    } else {


        $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$newemail]);
        $user = $stmt->fetch();
        if (empty($user)) {
            $addcategory = "UPDATE users SET  `email`=? WHERE `id`=?";
            $checkadd = $conn->prepare($addcategory);
            $queryadd = $checkadd->execute([$newemail, $userid]);
            if ($queryadd === true) {
                echo "<script>
                                    window.location.replace('setting.php?updateemail=success');
                                    </script>";
            } else {
                $emailmessage = "
                <script>
                    toastr.error('An error occurred while uploaded .');
                </script>";
            }
        } else {
            $emailmessage = "
        <script>
            toastr.error('Similar Email  already exists.');
        </script>";
        }
    }


    // peofile upload
}
