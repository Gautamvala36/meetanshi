<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// connection established
$conn = new mysqli($server, $username, $password,$dbname);
// echo $conn->connect_error ?? "successfully";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 



// $conn -> close();

?>

