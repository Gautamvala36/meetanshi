<?php
include "include/connection.php";
$connection = new connection();
?>

<link rel="stylesheet" href="css/exam_payment.css">
<style>
.exam_form {
    display: flex;
    justify-content: center;
}
</style>
<!--Show data-->

<div id="tab4show" class="table">
    <div class="request_send">
        <h2>Exam And Payment Status</h2>
        <span style="width: 44%;">
            <!-- <a href="" data-form="registration"> -->
            <button class="button-89" type="button" id="examdata">Exam Data And Payment</button>
            <!-- </a> -->
        </span>
        <span style="width: 18%;">
            <a href="exam_login.php">
                <button class="button-89" type="button" id="exam">Login Exam</button>
            </a>
        </span>
    </div>
    <hr>
    <br>
    <div style="overflow-x: auto;width: 125%;" class="showtable">
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

<!-- exam form payment -->
<div class="body_exam" style="display: none;">
    <div class="container_exam_payment">
        <div style="justify-content: end; display: flex;color: black">
            <button class="close" id="close_exam" aria-label="Close"></button>
        </div>
        <div class="title">Exam And Payment</div>
        <form class="form">
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Application No</span>

                    <select class="selecttag" name="application_no" id="application_no">
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
                    <span class="details">Select Exam Dtae</span>
                    <input type="date" class="date" id="date" name="date">
                </div>
                <div class="input__box">
                    <span class="details">Payment Type</span>
                    <select class="selecttag" id="payment" name="payment">
                        <option value="">Select Payment Type</option>
                        <option value="gpay">Gpay</option>
                        <option value="card">Card</option>
                    </select>
                </div>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Gpay & Card Number</span>
                    <input type="text" class="number" id="number" name="number" placeholder="Enter Gpay & Card Number">
                </div>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Exam Fees</span> 
                    <label for="">&#x20b9;500</label>
                    <p>The 500 Fees For 10 Attempts To Exam.</p>
                    <input type="text" class="fees" id="fees" name="fees" value="500" style="display:none">
                </div>
            </div>
            <input type="text" name="status" value="Success" style="display: none;">
            <div>
                <p class="error" id="error_application"></p>
                <p class="error" id="error_email"></p>
                <!-- <p class="error" id="error_date"></p> -->
                <p class="error" id="error_payment"></p>
                <p class="error" id="error_number"></p>
                <p id="error-message" style="color:red;padding: 3px 0px 0px 10px;"></p>
            </div>

            <div class="button">
                <input type="submit" value="Send Request" name="submit" id="submit" class="submit">
            </div>
        </form>
    </div>
</div>


<script src="js/adminscript.js"></script>