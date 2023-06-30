<?php
include 'database.php';
// include 'database2.php'; // new
$object = new database();

extract($_POST);
$toggle = $_POST['toggle'];
// var_dump($toggle);
$status = $_POST['status'];
$email = $_POST['email_id'];
$outletname = $_POST['outlet_name']; // name
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

$status = ["status" => true];

$check = $object->check('project', $outletname);

if ($check['outlet_name'] == $outletname) {
    echo" same outlet name ";
}
else {
    if ($toggle == true) {

        $object->ins('project', ['status' => $status, 'email_id' => $email, 'outlet_name' => $outletname, 'admin_name' => $adminname]);
        echo "Insert Result is : ";
        // var_dump('id');
        var_dump($object->getResult());

    } else if($toggle == false){
        $object->insert('project', ['status' => $status, 'email_id' => $email, 'outlet_name' => $outletname, 'admin_name' => $adminname, 'first_name' => $firstname, 'last_name' => $lastname, 'company' => $company, 'telephone' => $telephone, 'street' => $street, 'city' => $city, 'postcode' => $postcode, 'country' => $country, 'state' => $state]);
        echo "Insert Result is : ";
    }
}
// var_dump($g);

// if ($check === NULL) {
    // if ($toggle == true) {

    //     $object->ins('project', ['status' => $status, 'email_id' => $email, 'outlet_name' => $outletname, 'admin_name' => $adminname]);
    //     echo "Insert Result is : ";
    //     // var_dump('id');
    //     var_dump($object->getResult());

    // } else if($toggle == false){
    //     $object->insert('project', ['status' => $status, 'email_id' => $email, 'outlet_name' => $outletname, 'admin_name' => $adminname, 'first_name' => $firstname, 'last_name' => $lastname, 'company' => $company, 'telephone' => $telephone, 'street' => $street, 'city' => $city, 'postcode' => $postcode, 'country' => $country, 'state' => $state]);
    //     echo "Insert Result is : ";
    // }
// } 
// else if($check['outlet_name'] == $outletname) {
//     // echo uniqid();
//     $check = $object->upp('project', $status, $email, $outletname, $adminname,$firstname,$lastname, $company, $telephone,  $street, $city, $postcode,  $country, $state);
//     header('location: showdata.php');
// }


?>