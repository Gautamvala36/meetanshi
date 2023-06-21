<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "webpage";

// connection established
$conn = new mysqli($server, $username, $password,$dbname);
// echo $conn->connect_error ?? "successfully";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
else{
  echo "Connection don";
}
// $conn -> close();

?>

