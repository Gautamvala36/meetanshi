<?php
require_once("mysqli_oop.php");
var_dump($_POST);
extract($_POST);
$sql = "INSERT INTO reg_page(firstName,lastname,emailAddress,password,phone) VALUES(?,?,?,?,?)";
var_dump($sql);
?>