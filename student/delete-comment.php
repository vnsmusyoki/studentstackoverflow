<?php
include '../db-connection.php';
$posted = $_GET['post'];
$sql = "DELETE FROM feedback WHERE id=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$posted]);
echo "<script>window.location.replace('manage-suggestions.php');</script>";