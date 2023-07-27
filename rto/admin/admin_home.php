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
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/stateselect.js"></script>
</head>

<body>
    <div class="container">

        <!-- side menu-->
        <div class="menu">
            <ul class="sub-menu">
                <div class="logo">
                    <span><img src="image/logo(2).png " alt=""></span>
                </div>
                <li class="dashboard " id="dashboard">
                    <a class="show" id="tab1" data-page="admin_dashboard"><i class="fas fa-tachometer-alt fa-lg"></i><span>Dashboard </span></a>
                </li>
                <li class="Registerd" id="Registerd">
                    <a class="show" id="tab2" data-page="admin_registerd"><i class="fa-solid fa-users fa-lg"></i><span>Registerd</span></a>
                </li>

                <li class="contactus" id="contactus">
                    <a class="show" id="tab3" data-page="admin_contactus"><i class="fa-sharp fa-solid fa-id-badge fa-lg"></i><span>Contact
                            Us</span> </a>
                </li>
                <li class="payment" id="payment">
                    <a class="show" id="tab4" data-page="admin_payment"><i class="fa-solid fa-credit-card fa-lg"></i><span>Payment And Exam
                            Status</span></a>
                </li>
                <li class="request" id="request">
                    <a class="show" id="tab5" data-page="admin_request"><i class="fa-regular fa-message fa-lg"></i><span>Request</span> </a>
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
                <div id="tab1show" class="table dashboard">
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
                                                $getdata = $connection->count_data($count = 'status', $tabel = 'userexam', $where = 'Fail');
                                                if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                        // var_dump($value);
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
            </div>
        </div>
    </div>

    <script src="js/adminscript.js"></script>
    <script src="js/registration.js"></script>
    <script src="js/payment.js"></script>

    <!-- <script src="js/agecalulate.js"></script>-->
</body>

</html>