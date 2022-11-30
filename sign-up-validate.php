<?php
include 'db-conection.php';
$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);

if(empty($full_name)){
    $message = "
    <script>
    toastr.error('Provided an invalid names characters');
    </script>
    ";
}