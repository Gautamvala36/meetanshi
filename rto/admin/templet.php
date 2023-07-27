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
                
            </div>
        </div>
    </div>

    <script src="js/adminscript.js"></script>
    <script src="js/registration.js"></script>
    <!-- <script src="js/agecalulate.js"></script>                                             -->
</body>

</html>