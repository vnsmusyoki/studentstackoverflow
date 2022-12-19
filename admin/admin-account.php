<?php
session_start();
include '../db-connection.php';
if (!isset($_SESSION['admin'])) {
    header("Location: ../sign-in.php");
} else {
    $username = $_SESSION['admin'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    if (empty($user)) {
        echo "<script>window.location.replace('../sign-in.php');</script>";
    } else {
        $fullname = $user['full_names'];
        $email = $user['email'];
        $userid = $user['id']; 
        $datejoined = $user['date_joined'];
        global $fullname, $email, $datejoined; 
        global $userid;
    }
}
