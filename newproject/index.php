<?php
include 'connection.php';
$connection = new database();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"
            integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>
<?php

$id = $name = $email = $number = "";

if (isset($_GET['id'])) {

    $data = $connection->getId(explode('-', $_GET['id'])[1]);
    $id = $_GET['id'];

    $id = $data[0][0];
    $name = $data[0][1];
    $email = $data[0][2];
    $number = $data[0][3];

//    var_dump($data);
}

?>
<body class="back">
<div class="container">
    <h2>Registration</h2><br>
   <div class="alert">
        <span style="color: red;" class="closebtn" onclick="this.parentElement.style.display='none';">
        <?php if (isset($_GET['error']))
        {
            echo $_GET['error'].'<span style="padding-left: 85px;font-size: 20px;">&times;</span>';
        }
        ?>
    </span>
   </div>
    <form action="submit.php" method="post" class="form">
        <input type='hidden' value='<?php echo $id ?>' name='id'/>
        <div class="input-box">
            <input type="text" id="name" class="name" name="name" value="<?php echo $name ?>"
                   placeholder="Enter your name">
            <span class="error" id="error_name"></span>
        </div>
        <div class="input-box">
            <input type="email" id="email" class="email" name="email" placeholder="Enter your email"  value="<?php echo $email ?>">
            <span class="error" id="error_email"></span>
        </div>
        <div class="input-box">
            <input type="text" id="number" class="number" name="number" placeholder="Mobile Number"  value="<?php echo $number ?>">
            <span class="error" id="error_number"></span>
        </div>
        <div class="input-box button">
            <input type="Submit" value="Register Now">
        </div>
    </form>
</div>
</body>
<script>
    $('.form').submit(function () {

        var validation = true;
        var error_name = error_email = error_number = "";
        $('#error_name').hide();
        $('#error_email').hide();
        $('#error_number').hide();


        // name validation

        if (!$('#name').val().trim()) {
            $('#error_name').show();
            error_name = "*Name required";
            validation = false;
        }
        else {
            var nameValid = /^[a-zA-z]*$/;
            if (!nameValid.test($('#name').val())) {
                $('#error_name').show();
                error_name = "*Name Not Valid";
                validation = false;
            }
        }
        // email validation
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

        // mobile number
        if (!$('#number').val().trim()) {
            $('#error_number').show();
            error_number = "*Mobile Number required";
            validation = false;
        }
        else {
            var numberValid = /^[0-9]{10}$/;
            if (!numberValid.test($('#number').val())) {
                $('#error_number').show();
                error_number = "*Mobile Number Not Valid";
                validation = false;
            }
        }
        $('#error_name').text(error_name);
        $('#error_email').text(error_email);
        $('#error_number').text(error_number);
        return validation;
    });
</script>
</html>


