<?php

require_once('../include/connection.php');
$connection = new connection();
var_dump($_POST);


$id = $_POST['userid'];
$application_no = $_POST['application_no'];
// var_dump($application_no);
$filename = $_FILES["imageupload"]["name"];
$folder = '../image/' . $filename;
move_uploaded_file($_FILES['imageupload']['tmp_name'], $filename);
$fullname = $_POST['fullname'];
$fathername = $_POST['fathername'];
$gender = $_POST['gender'];
$dob  = $_POST['dob'];
$bloodgroup = $_POST['bloodgroup'];
$p_number = $_POST['p_number'];
$email  = $_POST['email'];
$password  = $_POST['password'];
$aadhar_number = $_POST['aadhar_number'];
$license_type  = $_POST['license_type'];
$address1  = $_POST['address1'];
$address2 = $_POST['address2'];
$state = $_POST['state'];
$district  = $_POST['district'];
$city  = $_POST['city'];
$pincode = $_POST['pincode'];
$status = $_POST['status'];


// //  insert user 
// try {
//     $get = $connection->reg_insert($application_no, $filename, $fullname, $fathername, $gender, $dob, $bloodgroup, $p_number, $email, $password, $aadhar_number, $license_type, $address1, $address2, $state, $district, $city, $pincode, $status);
//     header('location:../admin_home.php');
// } catch (Exception $e) {
//     echo $e;
//     header('location:../registration.php?error=Email Id and Aadher Card Number Already Available');

// }

// //  updata user 
// $var = $connection->user_updata($id,$application_no, $filename, $fullname, $fathername, $gender, $dob, $bloodgroup, $p_number, $email, $password, $aadhar_number, $license_type, $address1, $address2, $state, $district, $city, $pincode, $status);
// header('location:../admin_home.php');


if ($application_no && $filename && $fullname && $fathername && $gender && $dob && $bloodgroup && $p_number && $email && $password && $aadhar_number && $license_type && $address1 && $address2 && $state && $district && $city && $pincode && $status) {
    if ($id) {
        $var = $connection->user_updata($id,$application_no, $filename, $fullname, $fathername, $gender, $dob, $bloodgroup, $p_number, $email, $password, $aadhar_number, $license_type, $address1, $address2, $state, $district, $city, $pincode, $status);
        // var_dump($var);
        header('location:../admin_home.php');
    } else {
        try {
            $get = $connection->reg_insert($application_no, $filename, $fullname, $fathername, $gender, $dob, $bloodgroup, $p_number, $email, $password, $aadhar_number, $license_type, $address1, $address2, $state, $district, $city, $pincode, $status);
            header('location:../admin_home.php');
        } catch (Exception $e) {
            echo $e;
            header('location:../admin_home.php?error=Email Id and Aadher Card Number Already Available');
        }
    }
}
