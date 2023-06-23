<?php
class QueryHandler
{
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "registration";
  public $conn;

  function __construct()
  {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    } else {
      echo 'Connection success';
    }
  }
}

$obj = new QueryHandler();
extract($_POST);

if (isset($_POST['status1']) == true) {
  $status1 = 1;
} else {
  $status1 = 0;
}
$email = $_POST['email_id'];
$outletname = $_POST['outlet_name'];
$adminname = $_POST['admin_name'];
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$company = $_POST['company'];
$telephone = $_POST['tele_phone'];
$street = $_POST['street'];
$city = $_POST['city'];
$postcode = $_POST['post_code'];
$country = $_POST['country'];
$state = $_POST['state'];

$sql = "INSERT INTO project VALUES (null,'$status1','$email','$outletname','$adminname','$firstname','$lastname','$company','$telephone','$street','$city','$postcode','$country','$state')";
var_dump($sql);
$obj->conn->query($sql);

// Send the response back to the AJAX request
if ($obj->conn->affected_rows > 0) {
  $response = "Data inserted successfully.";
} else {
  $response = "Error: " . $obj->conn->error;
}

echo $response;

// Close the database connection
$obj->conn->close();
?>