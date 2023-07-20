<?php 

include 'include/connection.php';

$connection = new connection();

if (isset($_POST['editId'])) {
    $editId = $_POST['editId'];
    $get = $connection->getdata($editId);
    echo json_encode($get);
}

// $get = $connection->getdata('editId');
    // var_dump($get);

?>