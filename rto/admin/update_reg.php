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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/stateselect.js"></script>
    <link rel="stylesheet" href="css/registration.css">
    <title>Edit Form</title>
</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $get = $connection->getdata($id);
    // var_dump($get);
}
?>

<body>
    <div class="container">
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
           
            <input type='hidden' value='<?php echo $id ?>' name='id' id=''/>    
           <div style="justify-content: end; display: flex;">
           <label for="">Application NO : <?= $get['application_no'] ?>
                <input type="text" name="application_no" value="<?= $get['application_no'] ?>" style="display: none;">
            </label>
           </div>

            <div class="user__details">
                <div class="input__box">
                    <span class="details">Full Name</span>
                    <input type="text" id="fullname" class="fullname" name="fullname" value="<?= $get['fullname'] ?>"  placeholder="Enter Full Name">
                </div>
                <div class="input__box">
                    <span class="details">Father Name</span>
                    <input type="text" id="fathername" class="fathername" name="fathername" value="<?= $get['fathername'] ?>" placeholder="Enter Father Name">
                </div>
                <div class="input__box">
                    <span class="details">Gender </span>
                    <select class="selecttag" id="gender" name="gender">
                        <option>Select Gender</option>
                        <option value="Male" <?php if ($get['gender'] == 'Male') { ?> selected="selected" <?php } ?>>Male</option>
                        <option value="Female" <?php if ($get['gender'] == 'Female') { ?> selected="selected" <?php } ?>>Female</option>
                        <option value="Other" <?php if ($get['gender'] == 'Other') { ?> selected="selected" <?php } ?>>Other</option>
                    </select>
                </div>

                <div class="input__box">
                    <span class="details">Date Of Birth </span>
                    <input type="date" class="dob js-field--dob date-mask" id="dob" name="dob" value="<?= $get['dob'] ?>">
                </div>
                <div class="input__box">
                    <span class="details">Blood Group</span>
                    <select class="selecttag" id="bloodgroup" name="bloodgroup">
                        <option>Select Blood Group</option>
                        <option value="A+"<?php if ($get['bloodgroup'] == 'A+') { ?> selected="selected" <?php } ?>>A+</option>
                        <option value="A-" <?php if ($get['bloodgroup'] == 'A-') { ?> selected="selected" <?php } ?>>A-</option>
                        <option value="B+" <?php if ($get['bloodgroup'] == 'B+') { ?> selected="selected" <?php } ?>>B+</option>
                        <option value="B-" <?php if ($get['bloodgroup'] == 'B-') { ?> selected="selected" <?php } ?>>B-</option>
                        <option value="O+" <?php if ($get['bloodgroup'] == 'O+') { ?> selected="selected" <?php } ?>>O+</option>
                        <option value="O-" <?php if ($get['bloodgroup'] == 'O-') { ?> selected="selected" <?php } ?>>O-</option>
                        <option value="AB+" <?php if ($get['bloodgroup'] == 'AB+') { ?> selected="selected" <?php } ?>>AB+</option>
                        <option value="AB-" <?php if ($get['bloodgroup'] == 'AB-') { ?> selected="selected" <?php } ?>>AB-</option>
                    </select>
                </div>

                <input class="js-field--age" id="age" name="age" type="hidden" value="" style="display: none;">
                <!-- <p id="age"></p> -->
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Phone Number</span>
                    <input type="tel" class="p_number" id="p_number" name="p_number" value="<?= $get['mobilenumber'] ?>" placeholder="012-345-6789">
                </div>
                <div class="input__box">
                    <span class="details">Email</span>
                    <input type="email" class="email" id="email" name="email" value="<?= $get['email'] ?>" placeholder="Enter Email Id">
                </div>
                <div class="input__box">
                    <span class="details">Password</span>
                    <input type="password" class="password" id="password" name="password" value="<?= $get['password'] ?>" placeholder="********">
                </div>
            </div>
            <div class="pass_show">
                <input type="checkbox" class="toggler" onclick="myFunction()">
                <span onclick="myFunction()" style="position: absolute;">Show Password</span>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Address Line 1</span>
                    <input type="text" class="address1" id="address1" name="address1" value="<?= $get['address1'] ?>" placeholder="Address Line 1">
                </div>
                <div class="input__box">
                    <span class="details">Aadhar Number</span>
                    <input type="text" class="aadhar_number" id="aadhar_number" name="aadhar_number" value="<?= $get['aadharnumber'] ?>" placeholder="0000 0000 0000">
                </div>
                <div class="input__box">
                    <span class="details">Address Line 2</span>
                    <input type="text" class="address2" id="address2" name="address2" value="<?= $get['address2'] ?>" placeholder="Address Line 2">
                </div>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">License Type</span>
                    <select class="selecttag" id="license_type" name="license_type">
                        <option value="">Select License Type</option>
                        <option value="1" <?php if ($get['license_type'] == '1') { ?> selected="selected" <?php } ?> id="ll">Learners License</option>
                        <option value="2" <?php if ($get['license_type'] == '2') { ?> selected="selected" <?php } ?> id="dl">Driving Licence</option>
                    </select>

                </div>
                <div class="input__box" style="padding-top: 29px;">
                    <input name="imageupload" type="file" class="imageupload" id="imageupload" value="">
                </div>
            </div>
            <div class="user__details">
                <div class="input__box">
                    <span class="details">State</span>
                    <select onchange="print_city('state', this.selectedIndex);" id="sts" name="state" class="selecttag">
                        <option value=""><?php $get['state'] ?></option>
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
                    <input type="text" class="city" id="city" name="city" value="<?= $get['city']; ?>" placeholder="City">
                </div>
                <div class="input__box">
                    <span class="details">Pincode </span>
                    <input type="text" class="pincode" id="pincode" name="pincode" value="<?= $get['pincode']; ?>" placeholder="Pincode">
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
                <input type="submit" value="Update Form" name="submit" id="submit" class="submit">
            </div>
        </form>

    </div>
    <script>

    </script>
    <script src="js/registration.js"></script>
    <script src="js/agecalulate.js"></script>
    <script language="javascript">
        print_state("sts");
    </script>
</body>

</html>