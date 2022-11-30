<?php
session_start();
include '../db-connection.php';
if (!isset($_SESSION['student'])) {
    header("Location: ../sign-in.php");
} else {
    $username = $_SESSION['student'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    if(empty($user)){
       echo "<script>window.location.replace('../sign-in.php');</script>";
       
    }else{
        $fullname = $user['full_names'];
        $email = $user['email'];
        $datejoined = $user['date_joined'];
        global $fullname, $email, $datejoined;
 
        
    }

    
}
