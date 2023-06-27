<?php
include 'database.php';
$object = new database();



extract($_POST);
var_dump($_POST);


$status = $_POST["status"];
$email = $_POST["email_id"];
$outletname = $_POST["outlet_name"];
$adminname = $_POST["admin_name"];
$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$company = $_POST["company"];
$telephone = $_POST["tele_phone"];
$street = $_POST["street"];
$city = $_POST["city"];
$postcode = $_POST["post_code"];
$country = $_POST["country"];
$state = $_POST["state"];
$toggle = $_POST['toggle'];

// $id = $_GET["id"];
// if (isset($_GET['id'])) {
    if ($toggle == true) {
        $object->update('project', ['status' => $status, 'email_id' => $email,'outlet_name' => $outletname, 'admin_name' => $adminname], "id = '$id'" );
        echo "<br>Update Result is : ";
        print_r($object->getResult());
        header("location: showdata.php");
    } else {
        $object->update('project', ['status' => $status, 'email_id' => $email, 'outlet_name' => $outletname, 'admin_name' => $adminname, 'first_name' => $firstname, 'last_name' => $lastname, 'company' => $company, 'telephone' => $telephone, 'street' => $street, 'city' => $city, 'postcode' => $postcode, 'country' => $country, 'state' => $state]);
        echo "<br>Update Result is : ";
        print_r($object->getResult());
        header("location: showdata.php");
    }
// }
?>