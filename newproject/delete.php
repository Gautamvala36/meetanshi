<?php

include 'connection.php';

$connection = new database();

//$id = $_GET['id'];
//var_dump($id);
$id = (isset($_GET['id']) ? $_GET['id'] : "");

if ($id) {

    $connection->deletedata($id);
    header("location: submit.php");
}
else{
    echo "Not Delete";
}

?>