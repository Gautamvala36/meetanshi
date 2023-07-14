<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration</title>
    <link rel="stylesheet" href="css/adminlogin.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"
            integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>
<body class="back">

<div class="container">
    <h2>Admin Login</h2><br>
    <form action="submit/verfiy_login.php" method="post" class="form">
        <?php
        session_start();
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            $_SESSION['message'] = $message;
        }
        if (isset($_SESSION['message'])) {
            echo '<p style="color: red">' . $_SESSION['message'] . '</p>';
            unset($_SESSION['message']);
        }
        ?>
        <div class="input-box">
            <input type="email" id="email" class="email" name="email" placeholder="Enter your email">
            <span class="error" id="error_email"></span>
        </div>
        <div class="input-box">
            <input type="password" id="password" name="password" placeholder="Enter Password"/>
            <span class="error" id="error_password"></span>
        </div>
        <input type="checkbox" class="toggler" onclick="myFunction()"><span onclick="myFunction()">Show Password</span>
        <div class="input-box button">
            <input type="Submit" id="login" name="login" value="Login">
        </div>
    </form>
</div>

<script>
    $('.form').submit(function () {

        var validation = true;
        var error_email = error_password = "";
        $('#error_email').hide();
        $('#error_password').hide();


        //    email validation

        if (!$('#email').val().trim()) {
            $('#error_email').show();
            error_email = "*Email required";
            validation = false;
        }
        else {
            var emailValid = /^[a-zA-z0-9]+@[a-z]+.[a-z]{3}$/;
            if (!emailValid.test($('#email').val())) {
                $('#error_email').show();
                error_email = "*Email Not Valid";
                validation = false;
            }
        }

        //password validation

        if (!$('#password').val().trim()) {
            $('#error_password').show();
            error_password = "*Password required";
            validation = false;
        }
        else {
            var passwordvalidation = /^[A-Za-z]\w{6,12}$/;
            if (!passwordvalidation.test($('#password').val())) {
                $('#error_password').show();
                error_password = "*Password Not Valid";
                validation = false;
            }
        }

        $('#error_email').text(error_email);
        $('#error_password').text(error_password);
        return validation;
    });

    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }


</script>


</body>
</html>