<?php
include "include/connection.php";
$connection = new connection();
error_reporting(0);
?>

<link rel="stylesheet" href="css/new_req.css">

<div id="tab5show" class="table">
    <div class="request_send">
        <h2>Request</h2>
        <span class="">
            <!-- <a href="new_request.php"> -->
            <button class="button-89" id="request" role="button">New Request</button>
            <!-- </a> -->
        </span>
    </div>
    <hr>
    <br>
    <div class="hidden" id="newrequest">
        <div id="sampleTable">
            <table>
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

            $requestget = $connection->selectdata($table = 'user');
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
                            <?php
                            $requestsByUser = $connection->count_req($value['id']);
                            foreach ($requestsByUser as $userId => $requestCount) {
                                // var_dump($requestCount)
                            ?>
                            <span>(<?php echo $requestCount; ?>)
                            </span>
                            <?php
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($value['status'] == 'Pending') {
                                echo '<span style="color:blue"> Pending </span>';
                            } elseif ($value['status'] == 'Accept') {
                                echo '<span style="color:green"> Accept </span>';
                            } else {
                                echo '<span style="color:Red"> Reject </span>';
                            }
                            ?>


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


<div class="body_request" style="display: none;">
    <div class="container_new_request">
        <div style="justify-content: end; display: flex;color: black">
            <button class="close" id="close_request" aria-label="Close"></button>
        </div>
        <div class="title">New Request</div>
        <form action="submit/new_request.php" method="post" class="form">
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Application No</span>

                    <select class="selecttag" name="application_no" id="">
                        <option value="">Select Application No</option>
                        <?php
                        $data = $connection->selectdata($table = 'user');
                        
                        if ($data->num_rows > 0) {
                            while ($value = $data->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $value['id'] ?>"> <?php echo $value['application_no'] ?> </option>
                        <?php }
                        } ?>
                    </select>
                </div>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Email</span>
                    <input type="email" class="email" id="email" name="email" placeholder="Enter Email Id">
                </div>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Request Send</span>
                    <select class="selecttag" id="request" name="request" value='<?php echo $value['id'] ?>'>
                        <option>Select Request Send</option>
                        <option value="1" id="ll">Learners License Request</option>
                        <option value="2" id="dl">Driving Licence Request</option>
                    </select>
                </div>
            </div>
            <div>
                <p class="error" id="error_application_no"></p>
                <p class="error" id="error_email"></p>
                <p class="error" id="error_request"></p>
            </div>
            <div class="button">
                <input type="submit" value="Send Request" name="submit" id="submit" class="submit">
            </div>
        </form>
    </div>
</div>


<script src="js/adminscript.js"></script>