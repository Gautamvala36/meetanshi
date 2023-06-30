<?php
$status = ["status" => true];

$name = $email = "";
if (isset($_POST['email_add'])) {
    if ($_POST['email_add']) {
        $email = $_POST['email_add'];
    } else {
        $status['status'] = false;
        $status['msg'] = "email require";
    }
}


if (isset($_POST['my_name']))
    $name = $_POST['my_name'];

$conn = new mysqli("localhost", "root", "", "test");

$insert = "INSERT INTO student VALUES(null, '$name', '$email')";

if ($conn->query($insert)) {
    $status['status'] = true;
    $status['msg'] = "added";
} else {
    $status['status'] = false;
    $status['msg'] = "error ";
}

echo json_encode($status);

?>

?>