<?php
include '../db-connection.php';
include 'student-account.php';
$posted = $_GET['answer'];
$sql = "DELETE FROM `answer_votes` WHERE  `user_id`=? AND  `answer_id`=?"; 
$stmt = $conn->prepare($sql);
$stmt->execute([$userid, $posted]);
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;