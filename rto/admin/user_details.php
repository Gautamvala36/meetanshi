<?php

include 'include/connection.php';

$connection = new connection();

$id = $_GET['id'];

$getdata = $connection->getdata($id);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/userdetails.css">
    <title>User Details</title>
</head>

<body>
    <div class="container">
        <div class="headar">
            <nav class="sub-header">
                <div class="sub-cat">
                    <a href="admin_home.php">
                        <button type="submit" id="Back" class="Back">
                            <span><i class="fa-solid fa-arrow-left"></i> Back</span>
                        </button>
                    </a>
                </div>
            </nav>
        </div>
        <div class="menu">
            <table class="table">
                <tr>
                    <th>
                        Application No
                    </th>
                    <td>
                        <?= $getdata['application_no'] ?>
                    </td>
                    <th>
                        License Type
                    </th>
                    <td>
                        <?php
                        if ($getdata['license_type'] == 1) {
                            echo "Learners License";
                        } else {
                            echo 'Driving Licence';
                        }
                        ?>
                    </td>
                    <th>
                        Photo
                    </th>
                    <td>
                        <img src="image/<?= $getdata['photo'] ?>" width='94px' ; height='68px' ; alt="">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        Full Name
                    </th>
                    <td>
                        <?= $getdata['fullname'] ?>
                    </td>
                    <th colspan="2">
                        Father Name
                    </th>
                    <td>
                        <?= $getdata['fathername'] ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Gender
                    </th>
                    <td>
                        <?= $getdata['gender'] ?>
                    </td>
                    <th>
                        Date Of Birth
                    </th>
                    <td>
                        <?= date("d-m-Y", strtotime($getdata['dob'])) ?>
                    </td>
                    <th>
                        Blood Group
                    </th>
                    <td>
                        <?= $getdata['bloodgroup'] ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Mobile Number
                    </th>
                    <td>
                        <?= $getdata['mobilenumber'] ?>
                    </td>
                    <th>
                        Email ID
                    </th>
                    <td>
                        <?= $getdata['email'] ?>
                    </td>
                    <th>
                        Aadhar Number
                    </th>
                    <td>
                        <?= $getdata['aadharnumber'] ?>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        Address Line 1
                    </th>
                    <td>
                        <?= $getdata['address1'] ?>
                    </td>
                    <th colspan="2">
                        Address Line 2
                    </th>
                    <td>
                        <?= $getdata['address2'] ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        State
                    </th>
                    <td>
                        <?= $getdata['state'] ?>
                    </td>
                    <th>
                        District
                    </th>
                    <td>
                        <?= $getdata['district'] ?>
                    </td>
                    <th>
                        City
                    </th>
                    <td>
                        <?= $getdata['city'] ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Pincode
                    </th>
                    <td>
                        <?= $getdata['pincode'] ?>
                    </td>
                    <th>
                        Status
                    </th>
                    <td>
                        <?= $getdata['status'] ?>
                    </td>
                    <th>
                        Registration Date
                    </th>
                    <td>
                        <?= date("d-m-Y  h:i:s a", strtotime($getdata['reg_date'])) ?>
                    </td>
                </tr>

            </table>
        </div>
    </div>
</body>

</html>