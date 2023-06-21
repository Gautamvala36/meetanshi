<?php

$server = "localhost";
$password = "";
$username = "root";

// connection established
$conn = new mysqli($server, $username, $password, "mydb");
echo  $conn->connect_error ?? "successfully";

//$sql = "CREATE TABLE MyGuests (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";

//$insert="INSERT INTO MyGuests VALUES (null, 'paras', 'jaypal', 'aniket3@gmail.com', null)";

//if($conn->query($insert)) {
  //  echo "successull";
//} else {
  //  echo "$conn->error";
//}


$select = "SELECT * FROM MyGuests";

$result = $conn->query($select);

print_r($result->fetch_all());

$conn->close();

