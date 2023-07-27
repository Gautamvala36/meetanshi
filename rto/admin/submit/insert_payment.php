<?php 
include '../include/connection.php';

$connection = new connection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the data from the AJAX request
    var_dump($_POST);

    $application_no = $_POST['application_no'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $payment = $_POST['payment'];
    $number = $_POST['number'];
    $fees = $_POST['fees'];
    $status = $_POST['status'];


    $data =  $connection->payment_insert($application_no,$email,$payment,$number,$fees,$status,$date);
    var_dump($data);
    // return $data;
}

?>