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
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/new_request.css">
    <title>New Request</title>
</head>

<body>
    <div class="container">
        <a href="" style="justify-content: end; display: flex;color: black">
            <button class="close" aria-label="Close"></button>
        </a>
        <div class="title">New Request</div>
        <form action="submit/new_request.php" method="post" class="form">
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Application No</span>

                    <select class="selecttag" name="appliction_no" id="">
                        <?php
                        $data = $connection->selectdata();
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
                    <select class="selecttag" id="request" name="request">
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
    <script>
    $('form').submit(function() {

        var validation = true;
        var error_application_no = error_email = error_request = "";
        $('#error_application_no').hide();
        $('#error_email').hide();
        $('#error_request').hide();

        // email validation
        if (!$('#email').val().trim()) {
            $('#error_email').show();
            error_email = "*Pelase Enter Email";
            validation = false;
        } else {
            var emailValid = /^[a-zA-z0-9]+@[a-z]+.[a-z]{3}$/;
            if (!emailValid.test($('#email').val())) {
                $('#error_email').show();
                error_email = "*Email Not Valid";
                validation = false;
            }
        }


        // Application No validation
        if (!$('#application_no').val().trim()) {
            $('#error_application_no').show();
            error_application_no = "*Pelase Enter Application No";
            validation = false;
        }
        // else {
        //     var application_no = /^[0-9]{6}$/;
        //     if (!application_no.test($('#application_no').val())) {
        //         $('#error_application_no').show();
        //         error_application_no = "*Application No in 6 Digit";
        //         validation = false;
        //     }
        // }

        // Request Type validation
        if (!$('#request').val()) {
            $('#error_request').show();
            error_request = "*Pelase Select License Type required";
            validation = false;
        }

        $('#error_application_no').text(error_application_no);
        $('#error_email').text(error_email);
        $('#error_request').text(error_request);
        return validation;

    });
    </script>
</body>

</html>