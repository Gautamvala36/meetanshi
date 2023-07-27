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
    <link rel="stylesheet" href="css/exam_payment.css">
    <title>Exam Login Form</title>
</head>

<body>
    <div class="exam_form">
        <div class="container_exam_payment">
            <a href="admin_home.php" style="justify-content: end; display: flex;color: black">
                <button type="submit" class="close" id="close_exam_form" aria-label="Close"></button>
            </a>
            <div class="title">Exam Form</div>
            <?php
        // session_start();
        // if (isset($_GET['message'])) {
        //     $message = $_GET['message'];
        //     $_SESSION['message'] = $message;
        // }
        // if (isset($_SESSION['message'])) {
        //     echo '<p style="color: red">' . $_SESSION['message'] . '</p>';
        //     unset($_SESSION['message']);
        // }
        // action="submit/check_exam_form.php" method="GET"
        ?>
            <form class="exam_fo">
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
                            <!-- <option value="15" > 534142 </option> -->
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
                <div id="dataContainer"></div>
                <div class="button">
                    <input type="submit" value="Submit Form" name="submitform" id="checkData" class="submit">
                </div>
            </form>
        </div>
    </div>

    <script src="js/adminscript.js"></script>
    <script>
    $(document).ready(function() {
        console.log('hello');
        $("#checkData").on("click", function(event) {
            event.preventDefault();
            console.log('hello-1');

            var application_no = $("#application_no").val();
            var email = $("#email").val();
            console.log(application_no);
            console.log(email);

            $.ajax({
                type: "POST",
                url: "submit/check_exam_form.php",
                data: {
                    application_no: application_no,
                    email: email
                },
                dataType: "json",
                success: function(response) {
                    if (response.valid) {
                        // Redirect to the next page with the data in the URL
                        window.location.href = "exam_test.php?application_no=" + response
                            .application_no + "&email=" + response.email;
                    } else {
                        // Update the "response" div with the error message
                        $("#response").html("Invalid application number or email.");
                    }
                },
            });
        });
    });
    </script>
</body>

</html>