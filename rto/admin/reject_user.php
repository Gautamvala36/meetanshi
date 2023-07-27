<?php 
include 'include/connection.php';

$connection = new connection();

$id = $_POST['id'];
$data = $connection->rejectuser($id);
header('location:admin_home.php');
?>