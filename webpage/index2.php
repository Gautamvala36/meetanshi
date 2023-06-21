<?php

// require_once("database/index2_data.php");



// if ($conn->query($sql) == true) {
//     echo "data add";
//     header("location: index2.php");
// } else {
//     echo "Error : " . $sql . "<br>" . $conn->error;
// }
// $conn->close();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="st2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="html-form" id="html-form2">
        <h3>CREATE NEW CUSTOMER ACCOUNT</h3>

        <form id="registrationForm" action="database/index2_data.php" method="post">

            <div class="flex-container abbb">
                <div>
                    <input type="text" id="firstName" name="firstName" placeholder="First Name*">
                    <div id="first-name-err"></div>
                </div>
                <div>
                    <input type="text" id="Lastname" name="lastname" placeholder="Last Name*">
                    <div id="last-name-err" style="padding-left: 30px;"></div>
                </div>
            </div>
            <div class="flex-container em">
                <div>
                    <input type="email" id="emailAddress" name="emailAddress" placeholder="Email Address*">
                    <div id="email-err"></div>
                </div>
            </div>
            <div class="pas1 em">
                <div>
                    <input type="password" id="password" name="password" placeholder="Password*">
                    <div id="password-err"></div>
                </div>
                <div class="check">
                    <input id="checkc" type="checkbox" name="show_password"><span>show password</span>
                </div>
            </div>
            <div class="flex-container em">

                <div class="number34">
                    <div class="custom-dropdown" style="width:60px;">
                        <div class="selected-item">
                            <img src="photos/p1.png" class="flag-icon" style="width: 15px;" alt="INDIA Flag">
                            <span class="country-code">+91</span>
                        </div>
                        <ul class="dropdown-list">
                            <li data-value="+91">
                                <img src="photos/p1.png" class="flag-icon" style="width: 15px;" alt="USA Flag">
                                <span>+91</span>
                            </li>
                            <li data-value="+12">
                                <img src="photos/p2.jpeg" class="flag-icon" style="width: 15px;" alt="Canada Flag">
                                <span>+12</span>
                            </li>
                            <li data-value="+32">
                                <img src="photos/p3.jpeg" class="flag-icon" style="width: 15px;" alt="UK Flag">
                                <span>+32</span>
                            </li>
                            <li data-value="+86">
                                <img src="photos/p4.png" class="flag-icon" style="width: 15px;" alt="FR Flag">
                                <span>+86</span>
                            </li>
                            <li data-value="+33">
                                <img src="photos/p5.png" class="flag-icon" style="width: 15px;" alt="CH Flag">
                                <span>+33</span>
                            </li>
                            <li data-value="+971">
                                <img src="photos/p6.png" class="flag-icon" style="width: 15px;" alt="UA Flag">
                                <span>+971</span>
                            </li>
                        </ul>
                    </div>
                    <input class="mn2" type="tel" id="phone" name="phone" placeholder="mobile number*">
                    <span id="valid-msg" class="hide"></span>
                    <span id="error-msg" class="hide"></span>
                </div>
                <div id="num-err"></div>
                <div>
                    <p>Mobile No. Without Country Code i.e 0244902545</p>
                    <p class="links3">Do you have an Account? <a class="login2" href="login.php"> login</a></p>
                </div>
            </div>
            <div class="btn34">
                <button id="btn1" class="btn">SEND OTP</button>

                <div class="loder">
                    <img id="lod"
                        src="https://cdn-static.deus.com.gh/static/frontend/Magneto/deus/en_US/Magecomp_Mobilelogin/images/ajax-loader.gif"
                        alt="">
                </div>
                <!-- <div class="optverfiy1">
                    <input type="text" class="otpinput" id="optVerify" name="">
                    <div id="opt-error"></div>
                    <button class="btnverify" id="verifybtn">Verify Otp</button>
                </div> -->
            </div>
        </form>
    </div>
    <script src="script.js"></script>
    <!-- <script src="otpsubmit.js"></script> -->
    <script src="countrycode.js"></script>
    <script>
        $(function () {

            var twoToneButton = document.querySelector('#btn1');

            twoToneButton.addEventListener("click", function () {
                $("#btn1").hide();
                // $(".optverfiy1").show();
                $(".loder").show();

                setTimeout(
                    function () {

                        $("#btn1").show();
                        $(".loder").hide();

                    }, 3000);
            }, false);

        });
    </script>

</body>

</html>

