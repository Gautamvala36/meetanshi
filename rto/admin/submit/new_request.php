<?php 

include '../include/connection.php';

$connection = new connection();

var_dump($_POST);

$application_no = $_POST['application_no'];
$email = $_POST['email'];
$request = $_POST['request'];

$var = $connection->request_send($application_no,$email,$request);
// var_dump($var);
header('location:../admin_home.php');


?>