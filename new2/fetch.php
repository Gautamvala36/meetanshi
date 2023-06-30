<?php
   
   $conn = new mysqli("localhost","root","","test");

   $query = "SELECT * FROM student";

   $result = $conn->query($query);

   var_dump($result);
   // $result = $connection->mysqli($conn);
   
   $row = [];

   while($val = $result->fetch_assoc()) {
       $row[] = $val;
   }

   echo json_encode($result->fetch_assoc());




?>