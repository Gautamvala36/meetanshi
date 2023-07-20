<?php

include 'include/connection.php';

$connection = new connection();

$id = (isset($_GET['id']) ? $_GET['id'] : "");

if ($id) {

    $connection->deletedata($id);
    header("location: admin_home.php");
}
else{
    echo "Not Delete";
}

if ($id) {

    $connection->deleteuser($id);
    header("location: admin_home.php");
}
else{
    echo "Not Delete";
}
?>