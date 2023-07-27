<?php
include "include/connection.php";
$connection = new connection();
?>


<!--Show data-->

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
                                $getdata = $connection->count_data($count = 'status', $tabel = 'userexam', $where = 'FAIL');
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