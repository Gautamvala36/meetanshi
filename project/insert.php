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


$g = $object->check('project', $outletname);

// var_dump($g);

foreach($g as $value){
    // $colors = array($value[0]);
    var_dump($value);
   
}
// if($str==1){
//     $obj->insert("item_table","$my_value");
// }
// else{
//     $obj->update("item_table",$up_data ,$itemid);
// }




if ($g === NULL) {
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
else if($g['outlet_name'] == $outletname) {
    $g = $object->upp('project', $status, $email, $outletname, $adminname,$firstname,$lastname, $company, $telephone,  $street, $city, $postcode,  $country, $state);
    header('location: showdata.php');
}
// else if($g['outlet_name'] == $outletname) {
//     var_dump("same Outlet NAme");
// }


?>