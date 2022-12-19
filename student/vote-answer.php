<?php
include '../db-connection.php';
include 'student-account.php';
$posted = $_GET['answer'];
$sql = "INSERT INTO `answer_votes` (`user_id`, `answer_id`) VALUES (?,?)"; 
$stmt = $conn->prepare($sql);
$stmt->execute([$userid, $posted]);
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;