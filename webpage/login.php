<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant:wght@200&family=Montserrat:wght@700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Oswald:wght@500;600&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="singin">

            <div class="btnlog">
                <div class="page_title"><span>
                        <b>LOGIN</b>
                    </span></div>
                <!-- <h2 class="logh2">LOGIN</h2> -->
                <div class="btnsin">
                    <button type="button" class="login5">LOGIN WITH OTP </button>
                    <button type="button" class="singin5">LOGIN WITH PASSWORD</button>
                </div>
                <div class="logopt">

                    <div class="number34">
                        <div class="custom-dropdown" style="width:60px;">
                            <div class="selected-item">
                                <img src="p1.png" class="flag-icon" style="width: 15px;" alt="INDIA Flag">
                                <span class="country-code">+91</span>
                            </div>
                            <ul class="dropdown-list">
                                <li data-value="+91">
                                    <img src="p1.png" class="flag-icon" style="width: 15px;" alt="USA Flag">
                                    <span>+91</span>
                                </li>
                                <li data-value="+12">
                                    <img src="p2.jpeg" class="flag-icon" style="width: 15px;" alt="Canada Flag">
                                    <span>+12</span>
                                </li>
                                <li data-value="+32">
                                    <img src="p3.jpeg" class="flag-icon" style="width: 15px;" alt="UK Flag">
                                    <span>+32</span>
                                </li>
                                <li data-value="+86">
                                    <img src="p4.png" class="flag-icon" style="width: 15px;" alt="FR Flag">
                                    <span>+86</span>
                                </li>
                                <li data-value="+33">
                                    <img src="p5.png" class="flag-icon" style="width: 15px;" alt="CH Flag">
                                    <span>+33</span>
                                </li>
                                <li data-value="+971">
                                    <img src="p6.png" class="flag-icon" style="width: 15px;" alt="UA Flag">
                                    <span>+971</span>
                                </li>
                            </ul>
                        </div>
                        <input type="tel" id="mobileNumber" placeholder="Mobile Number">
                    </div>

                    <div id="number-err1"></div>
                    <p>Mobile No. Without Country Code i.e 0244902545</p>
                    <div class="loder">
                        <img id="lod"
                            src="https://cdn-static.deus.com.gh/static/frontend/Magneto/deus/en_US/Magecomp_Mobilelogin/images/ajax-loader.gif"
                            alt="">
                    </div>
                    <button class="btn4" id="send">SEND OTP</button>
                    <div class="optverfiy1">
                        <input type="text" class="otpinput" id="optVerify" name="">
                        <div id="opt-error"></div>
                        <button class="btnverify" id="verifybtn">Verify Otp</button>
                    </div>
                </div>

                <div class="logpass">
                    <input type="email" class="in" id="emailAddress" placeholder="Email Address">
                    <div id="email-err"></div>
                    <p class="p1">Enter your email address e.g newman@gmail.com</p>
                    <input type="password" class="in bn" id="password" placeholder="Password">
                    <div id="password-err"></div>
                    <div class="links">
                        <p>Don’t have an Account?<a href="index2.php">create account</a></p>
                        <p><a href="">forgot password?</a></p>
                    </div>
                    <div class="loder">
                        <img id="lod"
                            src="https://cdn-static.deus.com.gh/static/frontend/Magneto/deus/en_US/Magecomp_Mobilelogin/images/ajax-loader.gif"
                            alt="">
                    </div>
                    <button class="btn4" id="login2">LOGIN</button>
                </div>
            </div>
            <div class="login">
                <h2 class="newh2">NEW CUSTOMERS</h2>
                <p>
                    Creating an account has many benefits: check out faster, keep more than one address, track orders
                    and more.
                </p>
                <button class="btn6" onclick="navigate()">CREATE ACCOUNT</button>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $(".login5").click(function () {
                    $(".logopt").show();
                    $(".login5").css({ "background-color": "#fdfcc3", "color": "black" });
                    $(".singin5").css({ "background-color": "#AB8049", "color": "white" });
                    $(".logopt").next().hide();
                });
            });
            $(document).ready(function () {
                $(".singin5").click(function () {
                    $(".logpass").show();
                    $(".logpass").prev().hide();
                    $(".login5").css({ "background-color": "#AB8049", "color": "white" });
                    $(".singin5").css({ "background-color": "#fdfcc3", "color": "black" });
                });
            });

            $(function () {

                var twoToneButton = document.querySelector('#send');

                twoToneButton.addEventListener("click", function () {
                    $("#send").hide();
                    // $(".optverfiy1").show();
                    $(".loder").show();

                    setTimeout(
                        function () {

                            $("#send").show();
                            $(".loder").hide();

                        }, 3000);
                }, false);

            });

            function navigate() {
                window.location.href = "index2.php";
            }
            $(function () {

                var twoToneButton = document.querySelector('#login2');

                twoToneButton.addEventListener("click", function () {
                    $("#login2").hide();
                    $(".loder").show();

                    setTimeout(
                        function () {
                            $("#login2").show();
                            $(".loder").hide();
                        }, 3000);
                }, false);

            });

        </script>
        <script src="script2.js"></script>
        <script src="numberVal.js"></script>
        <script src="countrycode.js"></script>
</body>

</html>