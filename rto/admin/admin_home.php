<?php
include "include/check_admin_login.php";
include "include/connection.php";
$connection = new connection();

// $connection= $this->connection("SELECT  FROM user;");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>

<body>
    <div class="container">
        <div class="headar">
            <nav class="sub-header">
                <div class="logo">
                    <span><img src="image/logo.png" alt=""></span>
                </div>
                <div class="sub-cat">
                    <a href="admin_logout.php">
                        <button type="submit" id="logout" class="logout">
                            <span>Logout <i class="fa-solid fa-right-from-bracket fa-lg"></i></span>
                        </button>
                    </a>
                </div>
            </nav>
        </div>

        <!-- side menu-->
        <div class="menu">
            <ul class="sub-menu">
                <li class="dashboard " id="dashboard ">
                    <a class="show" target="1"><i class="fa-solid fa-dashboard fa-lg"></i><span>Dashboard </span></a>
                </li>
                <li class="Registerd" id="Registerd">
                    <a class="show" target="2"><i class="fa-solid fa-users fa-lg"></i><span>Registerd</span></a>
                </li>
                <li class="contactus" id="contactus">
                    <a class="show" target="3"><i class="fa-sharp fa-solid fa-id-badge fa-lg"></i><span>Contact
                            Us</span> </a>
                </li>
                <li class="notification" id="notification">
                    <a class="show" target="4"><i class="fa-solid fa-credit-card fa-lg"></i><span>Payment And Exam
                            Status</span></a>
                </li>
                <li class="request" id="request">
                    <a class="show" target="5"><i class="fa-regular fa-message fa-lg"></i><span>Request</span> </a>
                </li>
            </ul>
        </div>

        <!--Show data-->
        <div class="contain">
            <div class="showdata">
                <div id="div1" class="table">
                    <h2>Dashboard</h2>
                    <hr>
                    <br>
                    <div class="dashboard">
                        <div class="root">
                            <div>
                                <div class="c-dashboardInfo ">
                                    <div class="wrap">
                                        <h4 class="c-dashboardInfo__title">
                                            Registerd User</h4><i class="fa-solid fa-user fa-2xl"></i>
                                        <span class="c-dashboardInfo__count">
                                            <?php 
                                            $getdata = $connection->countdata($count = '*',$tabel = 'user');
                                                    if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                    echo $value['COUNT(*)'];
                                            ?>
                                            <?php } }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="c-dashboardInfo ">
                                    <div class="wrap">
                                        <h4 class="c-dashboardInfo__title">
                                            User Request</h4><i class="fa-solid fa-user fa-2xl"></i> <span
                                            class="c-dashboardInfo__count">
                                            <?php 
                                                    $getdata = $connection->countdata($count = '*',$tabel = 'user_request');
                                                    if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                    echo $value['COUNT(*)'];
                                            ?>
                                            <?php } }?></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="c-dashboardInfo ">
                                    <div class="wrap">
                                        <h4 class="c-dashboardInfo__title">
                                            Aceept Request</h4><i class="fa-solid fa-clipboard-check fa-2xl"></i> <span
                                            class="c-dashboardInfo__count">
                                            <?php 
                                                $getdata = $connection->count_data($count = 'status',$tabel = 'user',$where = 'Accept');
                                                if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                        echo $value['COUNT(status)'];
                                            ?>
                                            <?php } }?>
                                        </span>
                                        </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="root">
                            <div>
                                <div class="c-dashboardInfo ">
                                    <div class="wrap">
                                        <h4 class="c-dashboardInfo__title">
                                            Reject Request </h4><i class="fa-solid fa-user fa-2xl"></i>
                                        <span class="c-dashboardInfo__count">
                                            <?php 
                                                $getdata = $connection->count_data($count = 'status',$tabel = 'user',$where = 'Reject');
                                                    if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                    echo $value['COUNT(status)'];
                                            ?>
                                            <?php } }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="c-dashboardInfo ">
                                    <div class="wrap">
                                        <h4 class="c-dashboardInfo__title">
                                            Pass Exam</h4><i class="fa-solid fa-user-check fa-2xl"></i> <span
                                            class="c-dashboardInfo__count">
                                            <?php 
                                                   $getdata = $connection->count_data($count = 'status',$tabel = 'userexam',$where = 'PASS');
                                                    if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                    echo $value['COUNT(status)'];
                                            ?>
                                            <?php } }?></span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="c-dashboardInfo ">
                                    <div class="wrap">
                                        <h4 class="c-dashboardInfo__title">
                                        FAIL Exam</h4><i class="fa-solid fa-user-slash fa-2xl"></i> <span
                                            class="c-dashboardInfo__count">
                                            <?php 
                                                $getdata = $connection->count_data($count = 'status',$tabel = 'userexam',$where = 'FAIL');
                                                if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                        echo $value['COUNT(status)'];
                                            ?>
                                            <?php } }?>
                                        </span>
                                        </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="root">
                            <div>
                                <div class="c-dashboardInfo ">
                                    <div class="wrap">
                                        <h4 class="c-dashboardInfo__title">
                                        Exam Attend</h4><i class="fa-solid fa-user-pen fa-2xl"></i>
                                        <span class="c-dashboardInfo__count">
                                            <?php 
                                                $getdata = $connection->countdata($count = '*',$tabel = 'userexam   ');
                                                    if ($getdata->num_rows > 0) {
                                                    while ($value = $getdata->fetch_assoc()) {
                                                    echo $value['COUNT(*)'];
                                            ?>
                                            <?php } }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="div2" class="table">
                    <div class="Registerd_sraech">
                        <h2>Registerd</h2>
                        <span class="search"><input type="text" name="query" class="text"> <button type="submit"
                                value="search" name="search" class="datasearch">Submit</button></span>
                    </div>
                    <hr>
                    <br>
                    <table class="hidden">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Application No</th>
                                <th>Full Name</th>
                                <th>License Type</th>
                                <th>Status</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $limt = 20;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $offset = ($page - 1) * $limt;
                    $getdata = $connection->selectdata($offset, $limt);
                    if ($getdata->num_rows > 0) {
                        while ($value = $getdata->fetch_assoc()) {
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
                                    <?php echo $value['license_type'] ?>
                                </td>
                                <td>
                                    <?php echo $value['status'] ?>
                                </td>
                                <td><img src="<?php echo $value['photo'] ?>" alt=""></td>
                                <td class=".btn">
                                    <a href="user_details.php?id=<?php echo $value['id'] ?>">
                                        <button class="viewdata" type="submit">View Data</button>
                                    </a>
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
                    <div>
                        <?php

                    $data = $connection->pagination();

                    if (mysqli_num_rows($data) > 0) {
                        $total_records = mysqli_num_rows($data);

                        $total_page = ceil($total_records / $limt);
                        echo '<ul class="pagination">';
                        if ($page > 1) {
                            echo '<li><a href="admin_home.php?page=' . ($page - 1) . '">Prev</a></li>';
                        }
                        for ($i = 1; $i <= $total_page; $i++) {
                            if ($i == $page) {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                            echo '<li class="' . $active . '"><a href="admin_home.php?page=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($total_page > $page) {
                            echo '<li><a href="admin_home.php?page=' . ($page + 1) . '">Next</a></li>';
                        }
                        echo '<ul>';
                    }
                    ?>
                    </div>
                </div>
                <div id="div3" class="table">
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
                    $limt = 20;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $offset = ($page - 1) * $limt;
                    //    $count = 1;
                    $contactget = $connection->contactget($offset, $limt);
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
                    <div>
                        <?php

                    $data = $connection->pagination();

                    if (mysqli_num_rows($data) > 0) {
                        $total_records = mysqli_num_rows($data);

                        $total_page = ceil($total_records / $limt);
                        echo '<ul class="pagination">';
                        if ($page > 1) {
                            echo '<li><a href="admin_home.php?page=' . ($page - 1) . '">Prev</a></li>';
                        }
                        for ($i = 1; $i <= $total_page; $i++) {
                            if ($i == $page) {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                            echo '<li class="' . $active . '"><a href="admin_home.php?page=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($total_page > $page) {
                            echo '<li><a href="admin_home.php?page=' . ($page + 1) . '">Next</a></li>';
                        }
                        echo '<ul>';
                    }
                    ?>
                    </div>
                </div>
                <div id="div4" class="table">
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
                        $limt = 20;
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 1;
                        }
                        $offset = ($page - 1) * $limt;
                        $contactget = $connection->paymetexam($offset, $limt);
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
                            echo '<td colspan="6" style="text-align: center;">Data Not Found</td>';
                        }
                        ?>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <?php

                    $data = $connection->pagination();

                    if (mysqli_num_rows($data) > 0) {
                        $total_records = mysqli_num_rows($data);

                        $total_page = ceil($total_records / $limt);
                        echo '<ul class="pagination">';
                        if ($page > 1) {
                            echo '<li><a href="admin_home.php?page=' . ($page - 1) . '">Prev</a></li>';
                        }
                        for ($i = 1; $i <= $total_page; $i++) {
                            if ($i == $page) {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                            echo '<li class="' . $active . '"><a href="admin_home.php?page=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($total_page > $page) {
                            echo '<li><a href="admin_home.php?page=' . ($page + 1) . '">Next</a></li>';
                        }
                        echo '<ul>';
                    }
                    ?>
                    </div>
                </div>
                <div id="div5" class="table">
                    <h2>Request</h2>
                    <hr>
                    <br>
                    <table class="hidden">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Application No</th>
                                <th>Email</th>
                                <th>User Request</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $limt = 20;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $offset = ($page - 1) * $limt;
                    $requestget = $connection->requestget($offset, $limt);
                    if ($requestget->num_rows > 0) {
                        while ($value = $requestget->fetch_assoc()) {
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
                                    <?= $value['request'] ?>
                                </td>
                                <td>
                                    <?= date('d-m-Y  h:i:s a', strtotime($value['date'])) ?>
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
                    <div>
                        <?php

                    $data = $connection->pagination();

                    if (mysqli_num_rows($data) > 0) {
                        $total_records = mysqli_num_rows($data);

                        $total_page = ceil($total_records / $limt);
                        echo '<ul class="pagination">';
                        if ($page > 1) {
                            echo '<li><a href="admin_home.php?page=' . ($page - 1) . '">Prev</a></li>';
                        }
                        for ($i = 1; $i <= $total_page; $i++) {
                            if ($i == $page) {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                            echo '<li class="' . $active . '"><a href="admin_home.php?page=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($total_page > $page) {
                            echo '<li><a href="admin_home.php?page=' . ($page + 1) . '">Next</a></li>';
                        }
                        echo '<ul>';
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
    // select data in active
    $(document).ready(function() {
        $('ul li a').click(function() {
            $('li a').removeClass("menu_select");
            $(this).addClass("menu_select");
        });
    });

    // hide and show data  multidic hide and show in
    $(function() {
        $('#div1').show();
        $('.show').click(function() {
            $('.table').hide('.showdata');
            $('#div' + $(this).attr('target')).show();

        });
    });


    //  accept user
    $(document).ready(function() {
        $('.accept').click(function() {
            if (confirm("Registerd Status Request Accept")) {
                console.log('hello');
                location.href = "accept_user.php?id=" + $(this).attr('id');
            }
        });
    });

    //  reject user
    $(document).ready(function() {
        $('.reject').click(function() {
            if (confirm("Registerd Status Request Reject")) {
                console.log('hello');
                location.href = "reject_user.php?id=" + $(this).attr('id');
            }
        });
    });

    // delete user 
    $('.delete').click(function() {
        if (confirm("User Message delete")) {
            location.href = "delete_user.php?id=" + $(this).attr('id');
        }
    });
    </script>
</body>

</html>