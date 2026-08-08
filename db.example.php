<?php
$host = "your_host";
$user = "your_username";
$password = "your_password";
$database = "your_database";

$conn = mysqli_connect($host,$user,$password,$database);
mysqli_set_charset($conn,"utf8mb4");
?>