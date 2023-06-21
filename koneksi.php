<?php
 
$server = "localhost:3308";
$user = "root";
$pass = "";
$database = "profile";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

?>