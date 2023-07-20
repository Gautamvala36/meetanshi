<?php
include "include/check_admin_login.php";
include "include/connection.php";
$connection = new connection();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>

<body>
    <div class="container">

        <!-- side menu-->
        <div class="menu">
            <ul class="sub-menu">
                <div class="logo">
                    <span><img src="image/logo(2).png " alt=""></span>
                </div>
                <li class="dashboard " id="dashboard ">
                    <a class="show" id="tab1"><i class="fas fa-tachometer-alt fa-lg"></i><span>Dashboard </span></a>
                </li>
                <li class="Registerd" id="Registerd">
                    <a class="show" id="tab2"><i class="fa-solid fa-users fa-lg"></i><span>Registerd</span></a>
                </li>

                <li class="contactus" id="contactus">
                    <a class="show" id="tab3"><i class="fa-sharp fa-solid fa-id-badge fa-lg"></i><span>Contact
                            Us</span> </a>
                </li>
                <li class="notification" id="notification">
                    <a class="show" id="tab4"><i class="fa-solid fa-credit-card fa-lg"></i><span>Payment And Exam
                            Status</span></a>
                </li>
                <li class="request" id="request">
                    <a class="show" id="tab5"><i class="fa-regular fa-message fa-lg"></i><span>Request</span> </a>
                </li>
                <li>
                    <a href="admin_logout.php">
                        <i class="fa-solid fa-right-from-bracket fa-lg"></i><span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--Show data-->
        <div class="contain">
            <div class="showdata">
                <div id="tab1show" class="table">
                    <h2>Dashboard</h2>
                    <hr>
                    <br>
                    <div class="flex flex-wrap">
                        <div class="box">
                            <div>
                                <!--Metric Card-->
                                <div class="to-blue-100 border-b-4 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="p-5 bg-blue-600 rounded-full"><i class="fas fa-users fa-2x fa-inverse"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1 text-right md" style="padding-left: 43px;">
                                            <h5 class="font-bold uppercase text-gray-600">Total User</h5>
                                            <h3 class="font-bold text-3xl">
                                                <?php
                                                $getdata = $connection->countdata($count = '*', $tabel = 'user');
                                                if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                        echo $value['COUNT(*)'];
                                                    }
                                                } ?>
                                                <span class="text-blue-500"><i class="fas fa-caret-up"></i></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                            <div>
                                <!--Metric Card-->
                                <div class="to-yellow-100 border-b-4 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="p-5 bg-yellow-600 rounded-full"><i class="fa-solid fa-user-plus fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md" style="padding-left: 21px;">
                                            <h5 class="font-bold uppercase text-gray-600">User Request</h5>
                                            <h3 class="font-bold text-3xl">
                                                <?php
                                                $getdata = $connection->countdata($count = '*', $tabel = 'user_request');
                                                if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                        echo $value['COUNT(*)'];
                                                ?>
                                                <?php }
                                                } ?>
                                                <span class="text-yellow-500"><i class="fas fa-caret-up"></i></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                            <div>
                                <!--Metric Card-->
                                <div class="to-green-100 border-b-4 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="p-5 bg-green-600 rounded-full"><i class="fa-solid fa-user-check fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md">
                                            <h5 class="font-bold uppercase text-gray-600">Aceept Request</h5>
                                            <h3 class="font-bold text-3xl">
                                                <?php
                                                $getdata = $connection->count_data($count = 'status', $tabel = 'user', $where = 'Accept');
                                                if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                        echo $value['COUNT(status)'];
                                                ?>
                                                <?php }
                                                } ?>
                                                <span class="text-green-500"><i class="fas fa-caret-up"></i></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                        </div>
                        <div class="box">
                            <div>
                                <!--Metric Card-->
                                <div class="to-red-100 border-b-4 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="p-5 bg-red-600 rounded-full"><i class="fa-solid fa-user-xmark fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md">
                                            <h5 class="font-bold uppercase text-gray-600">Reject Request</h5>
                                            <h3 class="font-bold text-3xl">
                                                <?php
                                                $getdata = $connection->count_data($count = 'status', $tabel = 'user', $where = 'Reject');
                                                if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                        echo $value['COUNT(status)'];
                                                ?>
                                                <?php }
                                                } ?>
                                                <span class="text-red-500"><i class="fas fa-caret-up"></i></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                            <div>
                                <!--Metric Card-->
                                <div class="to-green-100 border-b-4 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="p-5 bg-green-600 rounded-full"><i class="fa-solid fa-file-circle-check fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md" style="padding-left: 57px;">
                                            <h5 class="font-bold uppercase text-gray-600">Pass Exam</h5>
                                            <h3 class="font-bold text-3xl">
                                                <?php
                                                $getdata = $connection->count_data($count = 'status', $tabel = 'userexam', $where = 'PASS');
                                                if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                        echo $value['COUNT(status)'];
                                                ?>
                                                <?php }
                                                } ?>
                                                <span class="text-green-500"><i class="fas fa-caret-up"></i></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                            <div>
                                <!--Metric Card-->
                                <div class="to-red-100 border-b-4 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="p-5 bg-red-600 rounded-full"><i class="fa-solid fa-file-circle-xmark fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md" style="padding-left: 60px;">
                                            <h5 class="font-bold uppercase text-gray-600">FAIL Exam</h5>
                                            <h3 class="font-bold text-3xl">
                                                <?php
                                                $getdata = $connection->count_data($count = 'status', $tabel = 'userexam', $where = 'FAIL;');
                                                if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                        echo $value['COUNT(status)'];
                                                ?>
                                                <?php }
                                                } ?>
                                                <span class="text-red-500"><i class="fas fa-caret-up"></i></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                        </div>
                        <div class="box">
                            <div>
                                <!--Metric Card-->
                                <div class="to-grey-100 border-b-4 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="p-5 bg-grey-600 rounded-full"><i class="fa-solid fa-user-pen fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md" style="padding-left: 26px;">
                                            <h5 class="font-bold uppercase text-gray-600">Exam Attend</h5>
                                            <h3 class="font-bold text-3xl">
                                                <?php
                                                $getdata = $connection->countdata($count = '*', $tabel = 'userexam');
                                                if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                        echo $value['COUNT(*)'];
                                                ?>
                                                <?php }
                                                } ?>
                                                <span class="text-grey-500"><i class="fas fa-caret-up"></i></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                            <div>
                                <!--Metric Card-->
                                <div class="to-yellow-100 border-b-4 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="p-5 bg-yellow-600 rounded-full"><i class="fa-solid fa-bell fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md">
                                            <h5 class="font-bold uppercase text-gray-600">Pending Request</h5>
                                            <h3 class="font-bold text-3xl">
                                                <?php
                                                $getdata = $connection->count_data($count = 'status', $tabel = 'user', $where = 'Pending');
                                                if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                        echo $value['COUNT(status)'];
                                                ?>
                                                <?php }
                                                } ?>
                                                <span class="text-yellow-500"><i class="fas fa-caret-up"></i></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab2show" class="table">
                <div class="request_send">
                        <h2>Registerd</h2>
                        <span>
                            <a href="registration.php">
                                <button class="button-89" role="button">New Registration</button>
                            </a>
                        </span>
                    </div>
                    <hr>
                    <br>
                    <table class="hidden">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Application No</th>
                                <th>Full Name</th>
                                <th>Status</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $getdata = $connection->selectdata();
                            if ($getdata->num_rows > 0) {
                                while ($value = $getdata->fetch_assoc()) {
                                    // var_dump($value['photo']);
                            ?>
                                    <tr>
                                        <td>
                                            <?= $value['id'] ?>
                                        </td>
                                        <td>
                                            <?= $value['application_no'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['fullname'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['status'] ?>
                                        </td>
                                        <td><img src="image/<?= $value['photo'] ?>" width="61px" height="51px" alt=""></td>
                                        <td class=".btn">
                                            <a href="user_details.php?id=<?php echo $value['id'] ?>">
                                                <button class="viewdata" type="submit">View Data</button>
                                            </a>
                                            <button class="update" id="<?php echo $value['id'] ?>" type="button">Edit</button>
                                            <button class="delete" type="button" id="<?php echo $value['id'] ?>">Delete</button>

                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="7" style="text-align: center;">Data Not Found</td>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div id="tab3show" class="table">
                    <h2>Contact Us</h2>
                    <hr>
                    <br>
                    <table class="hidden">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Data</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $contactget = $connection->contactget();
                            if ($contactget->num_rows > 0) {
                                while ($value = $contactget->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <td>
                                            <?= $value['id'] ?>
                                        </td>
                                        <td>
                                            <?= $value['name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['email'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['message'] ?>
                                        </td>
                                        <td>
                                            <?php echo date('d-m-Y  h:i:s a', strtotime($value['date'])) ?>
                                        </td>
                                        <td class=".btn">
                                            <!-- <a href="user_details.php?id=<?php echo $value['id'] ?>"> -->
                                            <button class="delete" type="button" id="<?php echo $value['id'] ?>">Delete</button>
                                            <!-- </a> -->
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="6" style="text-align: center;">Data Not Found</td>';
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
                <div id="tab4show" class="table">
                    <h2>Payment And Exam Status</h2>
                    <hr>
                    <br>
                    <div style="overflow-x: auto;width: 125%;">
                        <table class="hidden" style="width: 123%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Application No</th>
                                    <th>Email</th>
                                    <th>Payment Type</th>
                                    <th>Mobile/Card Number</th>
                                    <th>Status</th>
                                    <th>Payment Date</th>
                                    <th>Exam Status</th>
                                    <th>Exam Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $contactget = $connection->paymetexam();
                                if ($contactget->num_rows > 0) {
                                    while ($value = $contactget->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td>
                                                <?= $value['id'] ?>
                                            </td>
                                            <td>
                                                <?= $value['application_no'] ?>
                                            </td>
                                            <td>
                                                <?php echo $value['email'] ?>
                                            </td>
                                            <td>
                                                <?php echo $value['payment_type'] ?>
                                            </td>
                                            <td>
                                                <?php echo $value['number'] ?>
                                            </td>
                                            <td>
                                                <?php echo $value['status'] ?>
                                            </td>
                                            <td>
                                                <?php echo date('d-m-Y  h:i:s a', strtotime($value['payment_date'])) ?>
                                            </td>
                                            <td>
                                                <?php echo $value['examstatus'] ?>
                                            </td>
                                            <td>
                                                <?php echo date('d-m-Y  h:i:s a', strtotime($value['examdate'])) ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo '<td colspan="9" style="text-align: center;">Data Not Found</td>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="tab5show" class="table">
                    <div class="request_send">
                        <h2>Request</h2>
                        <span>
                            <a href="new_request.php">
                                <button class="button-89" role="button">New Request</button>
                            </a>
                        </span>
                    </div>
                    <hr>
                    <br>
                    <table class="hidden">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Application No</th>
                                <th>Email</th>
                                <th>User Request</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $requestget = $connection->selectdata();
                            if ($requestget->num_rows > 0) {
                                while ($value = $requestget->fetch_assoc()) {
                                    // var_dump($value);
                            ?>
                                    <tr>
                                        <td>
                                            <?= $value['id'] ?>
                                        </td>
                                        <td>
                                            <?= $value['application_no'] ?>
                                        </td>
                                        <td>
                                            <?= $value['email'] ?>
                                        </td>
                                        <td>
                                            <?php if ($value['license_type'] == 1) {
                                                echo 'Learners License';
                                            } else {
                                                echo 'Driving License';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?= $value['status'] ?>
                                        </td>
                                        <td>
                                            <!-- <a href="accept_user.php?id=<?php echo $value['id'] ?> "> -->
                                            <button class="accept" id="<?php echo $value['id'] ?>" type="button">Accept</button>
                                            <!-- </a> -->
                                            <!-- <a href="reject_user.php?id=<?php echo $value['id'] ?>"> -->
                                            <button class="reject" type="button" id="<?php echo $value['id'] ?>">Reject</button>
                                            <!-- </a> -->
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="6" style="text-align: center;">Data Not Found</td>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="js/adminscript.js"></script>
</body>

</html>