<?php
include 'database.php';

$object = new database();

// $object->insert('register_first', ['name' => 'jay', 'address1' => 'surat', 'address2' => 'surat', 'city' => 'goa', 'state' => 'gujrat','zipcode'=>'364290','country'=>'india','email'=>'gautam@gmail.com','mobilenumber'=>'8780824512']);
// echo "Insert Result is : ";
// print_r($object->getResult());

// $object->update('register_first', ['name' => 'sani', 'address1' => 'diu', 'address2' => 'diu', 'city' => 'diu', 'state' => 'gujrat','zipcode'=>'364290','country'=>'india','email'=>'gautam@gmail.com','mobilenumber'=>'8780824512'],'id="23"');
// echo "<br>Update Result is : ";
// print_r($object->getResult());

// $object->delete('register_first', 'id="23"');
// echo "<br>Delete Result is : ";
// print_r($object->getResult());

// $object->sql('SELECT * FROM register_first');
// echo "<br>SQL Result is : ";
// print_r($object->getResult());

// $object->select('register_first','*',null,null,null,null);
// echo "<br>SELECT Result is : ";
// print_r($object->getResult());

?>