<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "";

// connection established
$conn = new mysqli($server, $username, $password, $dbname);
echo  $conn->connect_error ?? "successfully";

?>

