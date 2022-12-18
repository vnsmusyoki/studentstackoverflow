<?php
include '../db-connection.php';
$posted = $_GET['answer'];
$sql = "DELETE FROM question_answers WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$posted]);
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;