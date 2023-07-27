<?php
include "include/connection.php";
$connection = new connection();
?>



<link rel="stylesheet" href="css/registration.css">
<script src="js/registration.js"></script>
<script src="js/stateselect.js"></script>

<!--Show data-->
<div id="tab2show" class="table">
    <div class="request_send">
        <h2>Registerd</h2>
        <span>
            <!-- <a href="" data-form="registration"> -->
            <button class="button-89" type="button" id="registration">New Registration</button>
            <!-- </a> -->
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

            $getdata = $connection->selectdata($table = 'user');
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
                    <?php if ($value['status'] == 'Pending') {
                                echo '<span style="color:blue"> Pending </span>';
                            } elseif ($value['status'] == 'Accept') {
                                echo '<span style="color:green"> Accept </span>';
                            } else {
                                echo '<span style="color:Red"> Reject </span>';
                            } ?>
                </td>
                <td><img src="image/<?= $value['photo'] ?>" width="61px" height="51px" alt=""></td>
                <td class=".btn">
                    <a href="user_details.php?id=<?php echo $value['id'] ?>">
                        <button class="viewdata" type="submit">View Data</button>
                    </a>
                    <button id="<?php echo $value['id'] ?>" class="update" type="button">Edit</button></a>
                    <button class="delete" type="button" id="<?php echo $value['id'] ?>">Delete</button>

                </td>
            </tr>
            <?php
                }
            } else {
                echo '<td colspan="7" style="text-align: center;">Data Not Found</td>';
            }
            ?>
            <div id></div>
        </tbody>
    </table>
</div>

<!-- new registerd -->
<div class="body_regis" style="display: none;">
    <div class="container_regis">
        <a class="col_se" href="admin_home.php">
            <button class="close" aria-label="Close" id="close"></button>
        </a>
        <div class="message-body">
            <p>User Is Email Id And Aadhar Card Number Is Only One Account Create.</p>
        </div>
        <div class="title">Registration</div>
        <?php
        if (isset($_GET['error'])) {
            echo $_GET['error'] . '<span style="color: red; font-size: 20px;">&times;</span>';
        }
        ?>
        <p id="ages" style="color: red; font-size: 20px;"></p>
        <form action="submit/insert_reg.php" method="post" class="form" enctype="multipart/form-data" onchange="submit()">
            <input type="hidden" name="application_no" value="<?php echo (rand(100009, 999999)); ?>">
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Full Name</span>
                    <input type="text" id="fullname" class="fullname" name="fullname" placeholder="Enter Full Name">
                </div>
                <div class="input__box">
                    <span class="details">Father Name</span>
                    <input type="text" id="fathername" class="fathername" name="fathername"
                        placeholder="Enter Father Name">
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
                    <input type="date" class="dob js-field--dob date-mask" id="dob" name="dob"  onchange="myFunction()">
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
                <input type="checkbox" class="toggler" onclick="mypassword()">
                <span onclick="mypassword()" style="position: absolute;">Show Password</span>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Address Line 1</span>
                    <input type="text" class="address1" id="address1" name="address1" placeholder="Address Line 1">
                </div>
                <div class="input__box">
                    <span class="details">Aadhar Number</span>
                    <input type="text" class="aadhar_number" id="aadhar_number" name="aadhar_number"
                        placeholder="0000 0000 0000">
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


<!--updata  -->
<div class="body_regis" id="edit_reg" style="display: none;">
    <div class="container_regis">
        <a class="col_se" href="admin_home.php">
            <button class="close" aria-label="Close"></button>
        </a>
        <div class="message-body">
            <p>User Is Email Id And Aadhar Card Number Is Only One Account Create.</p>
        </div>
        <div class="title">Edit Form</div>
        <?php if (isset($_GET['error'])) {
            echo $_GET['error'] . '<span style="color: red; font-size: 20px;">&times;</span>';
        }
        ?>
        <p id="ages" style="color: red; font-size: 20px;"></p>
        <form action="submit/insert_reg.php" method="post" class="form" enctype="multipart/form-data">

            <input type='text' name='userid' id='userid' class="userid" style="display: none;"/>
            <div style="justify-content: end; display: flex;">
                     Application NO : 
                    <span id="application_no" class="appli_no" ></span>
                    <input type="text" name="application_no" value="" class="appli_no" style="display: none;">
            </div>

            <div class="user__details">
                <div class="input__box">
                    <span class="details">Full Name</span>
                    <input type="text" id="fullname" class="fullname f1" name="fullname" value="" placeholder="Enter Full Name">
                </div>
                <div class="input__box">
                    <span class="details">Father Name</span>
                    <input type="text" id="fathername" class="fathername f2" name="fathername" placeholder="Enter Father Name">
                </div>
                <div class="input__box">
                    <span class="details">Gender </span>
                    <select class="selecttag gen_der" id="gender" name="gender">
                        <option>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="input__box">
                    <span class="details">Date Of Birth </span>
                    <input type="date" class="dob js-field--dob date-mask" id="dob" name="dob" >
                </div>
                <div class="input__box">
                    <span class="details">Blood Group</span>
                    <select class="selecttag blo_group" id="bloodgroup" name="bloodgroup">
                        <option>Select Blood Group</option>
                        <option value="A+" >A+</option>
                        <option value="A-" >A-</option>
                        <option value="B+" >B+</option>
                        <option value="B-" >B-</option>
                        <option value="O+" >O+</option>
                        <option value="O-" >O-</option>
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
                    <input type="tel" class="p_number phone" id="p_number" name="p_number" placeholder="012-345-6789">
                </div>
                <div class="input__box">
                    <span class="details">Email</span>
                    <input type="email" class="email ema_il" id="email" name="email" placeholder="Enter Email Id">
                </div>
                <div class="input__box">
                    <span class="details">Password</span>
                    <input type="password" class="password pass" id="password" name="password" placeholder="********">
                </div>
            </div>
            <div class="pass_show">
                <input type="checkbox" class="toggler" onclick="mypassword()">
                <span onclick="mypassword()" style="position: absolute;">Show Password</span>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Address Line 1</span>
                    <input type="text" class="address1 addr1" id="address1" name="address1" placeholder="Address Line 1">
                </div>
                <div class="input__box">
                    <span class="details">Aadhar Number</span>
                    <input type="text" class="aadhar_number aad_numb" id="aadhar_number" name="aadhar_number"  placeholder="0000 0000 0000">
                </div>
                <div class="input__box">
                    <span class="details">Address Line 2</span>
                    <input type="text" class="address2 addr2" id="address2" name="address2" placeholder="Address Line 2">
                </div>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">License Type</span>
                    <select class="selecttag lice_type" id="license_type" name="license_type">
                        <option value="">Select License Type</option>
                        <option value="1" id="ll">Learners License</option>
                        <option value="2" id="dl">Driving Licence</option>
                    </select>

                </div>
                <div class="input__box" style="padding-top: 29px;">
                    <input name="imageupload" type="file" class="imageupload image" id="imageupload" value="">
                </div>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">State</span>
                    <!-- <select onchange="print_city('state', this.selectedIndex);" id="sts" name="state" class="selecttag">
                    </select> -->
                    <input id="sts" name="state" type="text" class="state_s"> 
                </div>
                <div class="input__box">
                    <span class="details">District</span>
                    <!-- <select id="state" class="selecttag" name="district">
                        <option value="">Select District</option>
                    </select> -->
                    <input id="state" name="district" class="district_s" type="text">
                </div>
                <div class="input__box">
                    <span class="details">City </span>
                    <input type="text" class="city city_s" id="city" name="city" placeholder="City">
                </div>
                <div class="input__box">
                    <span class="details">Pincode </span>
                    <input type="text" class="pincode pin_code" id="pincode" name="pincode"  placeholder="Pincode">
                </div>
                <div class="input__box" style="display: none;">
                    <span class="details">Status</span>
                    <input placeholder="Pending" class="status sta_tus" id="status" name="status" value="Pending">
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
                <input type="submit" value="Update Form" name="submit" id="submit" class="submit">
            </div>
        </form>

    </div>
</div>





<script src="js/adminscript.js"></script>
<!-- <script src="js/agecalulate.js"></script> -->

<script>
// $( document).ready(function() {
    
//     console.log('validation-3');

//     function submit() {
//         console.log('validation-4');
//         even.preventDefault();
//         var validation = true;

//         var error_fullname = error_fathername = error_gender = error_dob = error_bloodgroup =
//             error_phonenumber =
//             error_email = error_password = error_address1 = error_address2 = error_aadhernumber =
//             error_licensetype = error_photo = error_state = error_district = error_city =
//             error_pincode = "";
//         $('#error_fullname').hide();
//         $('#error_fathername').hide();
//         $('#error_gender').hide();
//         $('#error_dob').hide();
//         $('#error_bloodgroup').hide();
//         $('#error_phonenumber').hide();
//         $('#error_email').hide();
//         $('#error_password').hide();
//         $('#error_address1').hide();
//         $('#error_address2').hide();
//         $('#error_aadhernumber').hide();
//         $('#error_licensetype').hide();
//         $('#error_photo').hide();
//         $('#error_state').hide();
//         $('#error_district').hide();
//         $('#error_city').hide();
//         $('#error_pincode').hide();

//         // Full Name and Father name validation
//         if (!$('#fullname').val().trim()) {
//             $('#error_fullname').show();
//             error_fullname = "*Full Name required";
//             validation = false;
//         } else {
//             var nameValid = /^[A-Z][a-z]*\s[A-z]*$/;
//             if (!nameValid.test($('#fullname').val())) {
//                 $('#error_fullname').show();
//                 error_fullname = "*Full Name Not Valid";
//                 validation = false;
//             }
//         }
 
//         if (!$('#fathername').val().trim()) {
//             $('#error_fathername').show();
//             error_fathername = "*Father Name Required";
//             validation = false;
//         } else {
//             var nameValid = /^[A-Z][a-z]*\s[A-z]*$/;
//             if (!nameValid.test($('#fathername').val())) {
//                 $('#error_fathername').show();
//                 error_fathername = "*Father Name Not Valid";
//                 validation = false;
//             }
//         }
 
//         // gender validation
//         if (!$('#gender').val()) {
//             $('#error_gender').show();
//             error_gender = "*Gender Required";
//             validation = false;
//         }
 
//         // Date Of Birth  validation 
//         if (!$('#dob').val()) {
//             $('#error_dob').show();
//             error_dob = "*Date Of Birth Required";
//             validation = false;
//         }
 
//         // Blood Group validation
//         if (!$('#bloodgroup').val()) {
//             $('#error_bloodgroup').show();
//             error_bloodgroup = "*Blood Group Required";
//             validation = false;
//         }
 
//         // Phone Number validation
//         if (!$('#p_number').val().trim()) {
//             $('#error_phonenumber').show();
//             error_phonenumber = "*Phone Number required";
//             validation = false;
//         } else {
//             var numberValid = /^[0-9]{10}$/;
//             if (!numberValid.test($('#p_number').val())) {
//                 $('#error_phonenumber').show();
//                 error_phonenumber = "*Phone Number Not Valid";
//                 validation = false;
//             }
//         }
 
//         // email validation
//         if (!$('#email').val().trim()) {
//             $('#error_email').show();
//             error_email = "*Email required";
//             validation = false;
//         } else {
//             var emailValid = /^[a-zA-z0-9]+@[a-z]+.[a-z]{3}$/;
//             if (!emailValid.test($('#email').val())) {
//                 $('#error_email').show();
//                 error_email = "*Email Not Valid";
//                 validation = false;
//             }
//         }
 
//         // Password validation
//         if (!$('#password').val().trim()) {
//             $('#error_password').show();
//             error_password = "*Password required";
//             validation = false;
//         } else {
//             var passwordvalid = /^[a-zA-Z0-9]+$/;
//             if (!passwordvalid.test($('#password').val())) {
//                 $('#error_password').show();
//                 error_password = "*Password Not Valid";
//                 validation = false;
//             }
//         }

//         // Address Line 1 and Address Line validation
//         if (!$('#address1').val().trim()) {
//             $('#error_address1').show();
//             error_address1 = "*Address Line 1 required";
//             validation = false;
//         }

//         if (!$('#address2').val().trim()) {
//             $('#error_address2').show();
//             error_address2 = "*Address Line 2 required";
//             validation = false;
//         }
      
//      // Aadhar Number validation
//         if (!$('#aadhar_number').val().trim()) {
//             $('#error_aadhernumber').show();
//             error_aadhernumber = "*Aadhar Card Number required";
//             validation = false;
//         } else {
//             var aadhernumber = /^\d{4}\s\d{4}\s\d{4}$/;
//             if (!aadhernumber.test($('#aadhar_number').val())) {
//                 $('#error_aadhernumber').show();
//                 error_aadhernumber = "*Aadhar Card Number Not Valid";
//                 validation = false;
//             }
//         }

//         // License Type validation
//         if (!$('#license_type').val().trim()) {
//             $('#error_licensetype').show();
//             error_licensetype = "*License Type required";
//             validation = false;
//         }
 
//         // Photo validation
//         if (!$('#imageupload').val().trim()) {
//             $('#error_photo').show();
//             error_photo = "*Photo Upload required";
//             validation = false;
//         }
 
//         // State validation
//         if (!$('#sts').val().trim()) {
//             $('#error_state').show();
//             error_state = "*State required";
//             validation = false;
//         }
 
//         // District validation
//         if (!$('#state').val().trim()) {
//             $('#error_district').show();
//             error_district = "*District required";
//             validation = false;
//         } 
//         // City validation
//         if (!$('#city').val().trim()) {
//             $('#error_city').show();
//             error_city = "*City required";
//             validation = false;
//         } else {
//             var city = /^[a-zA-z]*$/;
//             if (!city.test($('#city').val())) {
//                 $('#error_city').show();
//                 error_city = "*City Not Valid";
//                 validation = false;
//             }
//         }
 
//         // Pincode validation
//         if (!$('#pincode').val().trim()) {
//             $('#error_pincode').show();
//             error_pincode = "*Pincode required";
//             validation = false;
//         } else {
//             var pincode = /^(\d{4}|\d{6})$/;
//             if (!pincode.test($('#pincode').val())) {
//                 $('#error_pincode').show();
//                 error_pincode = "*Pincode Not Valid";
//                 validation = false;
//             }
//         }

//         $('#error_fullname').text(error_fullname);
//         $('#error_fathername').text(error_fathername);
//         $('#error_gender').text(error_gender);
//         $('#error_dob').text(error_dob);
//         $('#error_bloodgroup').text(error_bloodgroup);
//         $('#error_phonenumber').text(error_phonenumber);
//         $('#error_email').text(error_email);
//         $('#error_password').text(error_password);
//         $('#error_address1').text(error_address1);
//         $('#error_address2').text(error_address2);
//         $('#error_aadhernumber').text(error_aadhernumber);
//         $('#error_licensetype').text(error_licensetype);
//         $('#error_photo').text(error_photo);
//         $('#error_state').text(error_state);
//         $('#error_district').text(error_district);
//         $('#error_city').text(error_city);
//         $('#error_pincode').text(error_pincode);
//         return validation = true;
//     };

// });
</script>