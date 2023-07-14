<?php 
include 'include/connection.php';

$id = $_GET['id'];

$connection = new connection();

$data = $connection->acceptuser($id);
header('location:admin_home.php');
?>