<?php
include '../db-connection.php';
$posted = $_GET['id'];
$sql = "DELETE FROM users WHERE id=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$posted]);
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;