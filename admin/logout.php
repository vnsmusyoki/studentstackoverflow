<?php
session_start();
unset($_SESSION["student"]);
header("Location:../sign-in.php");