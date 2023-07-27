<?php 
include '../include/connection.php';

$connection = new connection();

if(isset($_POST['id']))
{
    extract($_POST);
    $data =  explode('-',$id);
    $id = 'id';
    $value = $data['id']; 
    // $get = $connection->getdata($value);
    var_dump($value);
    // foreach($get as $result)
    // {
    //     var_dump($result);
    //     echo json_encode($result);
    // }
}

?>