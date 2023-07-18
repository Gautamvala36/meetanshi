<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/stateselect.js"></script>
    <link rel="stylesheet" href="css/registration.css">
    <title>New Registration</title>
</head>

<body>
    <div class="container">
        <div class="title">Registration</div>
        <form action="#" class="form">
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
                    <select class="selecttag" id="gender">
                        <option value="">Select Gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Other</option>
                    </select>
                </div>

                <div class="input__box">
                    <span class="details">Date Of Birth </span>
                    <input type="date" class="dob" id="dob" name="dob">
                </div>
                <div class="input__box">
                    <span class="details">Blood Group </span>
                    <select class="selecttag" id="bloodgroup">
                        <option value="">Select Blood Group</option>
                        <option value="1">A+</option>
                        <option value="2">A-</option>
                        <option value="3">B+</option>
                        <option value="4">B-</option>
                        <option value="5">O+</option>
                        <option value="6">O-</option>
                        <option value="7">AB+</option>
                        <option value="8">AB-</option>
                    </select>
                </div>
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
                    <select class="selecttag" id="license_type">
                        <option value="">Select License Type</option>
                        <option value="1">Learners License</option>
                        <option value="2">Driving Licence</option>
                    </select>
                </div>
                <div class="input__box" style="padding-top: 29px;">
                    <input name="imageupload" type="file" class="imageupload" id="imageupload" accept="image/*">

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
                    <input placeholder="Padding" class="status" id="status" name="status" disabled>
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
                <input type="submit" value="Register" id="submit" name="submit" class="submit">
            </div>
        </form>
    </div>
    <script>

    </script>
    <script src="js/registration.js"></script>
    <script language="javascript">
    print_state("sts");
    </script>

</body>

</html>