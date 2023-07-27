<?php
include 'include/connection.php';
$connection = new connection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/stateselect.js"></script>
    <link rel="stylesheet" href="css/registration.css">
    <title>New Registration</title>
</head>



<div class="body_regis">
    <div class="container_regis">
        <a class="col_se" href="admin_home.php">
            <button class="close" aria-label="Close"></button>
        </a>
        <div class="message-body">
            <p>User Is Email Id And Aadhar Card Number Is Only One Account Create.</p>
        </div>
        <div class="title">Registration</div>
        <?php if (isset($_GET['error'])) {
            echo $_GET['error'] . '<span style="color: red; font-size: 20px;">&times;</span>';
        }
        ?>
        <p id="ages" style="color: red; font-size: 20px;"></p>
        <form action="submit/insert_reg.php" method="post" class="form" enctype="multipart/form-data">
            <input type="hidden" name="application_no" value="<?php echo (rand(100009, 999999)); ?>">
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Full Name</span>
                    <input type="text" id="fullname" class="fullname" name="fullname" placeholder="Enter Full Name">
                </div>
                <div class="input__box">
                    <span class="details">Father Name</span>
                    <input type="text" id="fathername" class="fathername" name="fathername" placeholder="Enter Father Name">
                </div>
                <div class="input__box">
                    <span class="details">Gender </span>
                    <select class="selecttag" id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="input__box">
                    <span class="details">Date Of Birth </span>
                    <input type="date" class="dob js-field--dob date-mask" id="dob" name="dob">
                </div>
                <div class="input__box">
                    <span class="details">Blood Group </span>
                    <select class="selecttag" id="bloodgroup" name="bloodgroup">
                        <option value="">Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>

                <input class="js-field--age" id="age" name="age" type="hidden" value="" style="display: none;">
                <!-- <p id="age"></p> -->
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Phone Number</span>
                    <input type="tel" class="p_number" id="p_number" name="p_number" placeholder="012-345-6789">
                </div>
                <div class="input__box">
                    <span class="details">Email</span>
                    <input type="email" class="email" id="email" name="email" placeholder="Enter Email Id">
                </div>
                <div class="input__box">
                    <span class="details">Password</span>
                    <input type="password" class="password" id="password" name="password" placeholder="********">
                </div>
            </div>
            <div class="pass_show">
                <input type="checkbox" class="toggler" onclick="myFunction()">
                <span onclick="myFunction()" style="position: absolute;">Show Password</span>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Address Line 1</span>
                    <input type="text" class="address1" id="address1" name="address1" placeholder="Address Line 1">
                </div>
                <div class="input__box">
                    <span class="details">Aadhar Number</span>
                    <input type="text" class="aadhar_number" id="aadhar_number" name="aadhar_number" placeholder="0000 0000 0000">
                </div>
                <div class="input__box">
                    <span class="details">Address Line 2</span>
                    <input type="text" class="address2" id="address2" name="address2" placeholder="Address Line 2">
                </div>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">License Type</span>
                    <select class="selecttag" id="license_type" name="license_type">
                        <option>Select License Type</option>
                        <option value="1" id="ll">Learners License</option>
                        <option value="2" id="dl">Driving Licence</option>
                    </select>
                </div>
                <div class="input__box" style="padding-top: 29px;">
                    <input name="imageupload" type="file" class="imageupload" id="imageupload">
                </div>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">State</span>
                    <select onchange="print_city('state', this.selectedIndex);" id="sts" name="state" class="selecttag">
                    </select>
                </div>
                <div class="input__box">
                    <span class="details">District</span>
                    <select id="state" class="selecttag" name="district">
                        <option value="">Select District</option>
                    </select>
                </div>
                <div class="input__box">
                    <span class="details">City </span>
                    <input type="text" class="city" id="city" name="city" placeholder="City">
                </div>
                <div class="input__box">
                    <span class="details">Pincode </span>
                    <input type="text" class="pincode" id="pincode" name="pincode" placeholder="Pincode">
                </div>
                <div class="input__box" style="display: none;">
                    <span class="details">Status</span>
                    <input placeholder="Pending" class="status" id="status" name="status" value="Pending">
                </div>
            </div>
            <div>
                <p class="error" id="error_fullname"></p>
                <p class="error" id="error_fathername"></p>
                <p class="error" id="error_gender"></p>
                <p class="error" id="error_dob"></p>
                <p class="error" id="error_bloodgroup"></p>
                <p class="error" id="error_phonenumber"></p>
                <p class="error" id="error_email"></p>
                <p class="error" id="error_password"></p>
                <p class="error" id="error_address1"></p>
                <p class="error" id="error_address2"></p>
                <p class="error" id="error_aadhernumber"></p>
                <p class="error" id="error_licensetype"></p>
                <p class="error" id="error_photo"></p>
                <p class="error" id="error_state"></p>
                <p class="error" id="error_district"></p>
                <p class="error" id="error_city"></p>
                <p class="error" id="error_pincode"></p>
            </div>
            <div class="button">
                <input type="submit" value="Register" name="submit" id="submit" class="submit">
            </div>
        </form>

    </div>
    
</div>

</html>