<?php
$servername = "localhost:3308";
$user = "root";
$pass= "";


$conn = mysqli_connect($servername, $user, $pass) or die("Connection Failed");
echo "connection successfull";
?>