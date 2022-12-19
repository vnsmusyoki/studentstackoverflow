<?php
include 'db-connection.php'; 
$email =  $_POST['email'];
$title =  $_POST['message_title'];
$description =  $_POST['description']; 

if (empty($title) || empty($email) || empty($description)) {
    $message = "
    <script>
    toastr.error('Provide all details required.');
    </script>
    ";
} else if (!preg_match("/^[a-zA-z0-9 ]*$/", $title)) {
    $message = "
<script>
toastr.error('Message Title format is incorrect');
</script>
";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = "
<script>
toastr.error('Incorrect email address. Provide a valid one.');
</script>
";
} else {
    $stmt = $conn->prepare("SELECT * FROM feedback WHERE email=? AND title=? AND message=?");
    $stmt->execute([$email, $title, $description]);
    $user = $stmt->fetch();

    if (empty($user)) {
       
        $checkusername = $conn->prepare("SELECT * FROM users WHERE email=?");
        $checkusername->execute([$email]);
        $checkusername = $checkusername->fetch();
        if($checkusername){
            $userid = $checkusername['id'];
            $status = "pending";
            $addstudent = "INSERT INTO feedback (`title`, `message`,`user_id`, `status`) VALUES(?,?,?, ?)";
            $checkadd = $conn->prepare($addstudent);
            $queryadd = $checkadd->execute([$title, $description, $userid, $status]);

            if ($queryadd === true) {
                
                echo "<script>
                                    window.location.replace('feedback.php?success=1');
                                    </script>";
               
            } else {
                $message = "
                <script>
                    toastr.error('An error occurred during feedback submission.');
                </script>";
            }
        }else{
            $message = "
            <script>
                toastr.error('Seems like this email does not exist in our account. please consider creating your account with the same email before submiting any feedback.');
            </script>";
        }
        

    } else {

        $message = "
            <script>
                toastr.error(You have already added this message. Please try with a different message.');
            </script>";
    }

}
