<?php
include '../db-connection.php';
$posted = $_GET['quiz'];
$sql = "DELETE FROM questions WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$posted]);
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;