<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO customer (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "hitesh";
$lastname = "ranhgdale";
$email = "hitesh@gmail.com";
$stmt->execute();

$firstname = "yash";
$lastname = "kataria";
$email = "yash@gmail.com";
$stmt->execute();

$firstname = "shubham";
$lastname = "hundekar";
$email = "shubham@gmail.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>