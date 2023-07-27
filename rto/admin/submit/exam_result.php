<?php
include '../include/connection.php';

$connection = new connection();

// var_dump($_POST);
$score = 0;
$res = "Not submitted";

if(isset($_POST['submit'])) {
    $score=0;
    if ($_POST['q1'] == 'a') {
        $score++;
    }
    if ($_POST['q2'] == 'b') {
        $score++;
    }
    if ($_POST['q3'] == 'b') {
        $score++;
    }
    if ($_POST['q4'] == 'b') {
        $score++;
    }
    if ($_POST['q5'] == 'a') {
        $score++;
    }
    if ($_POST['q6'] == 'b') {
        $score++;
    }
    if ($_POST['q7'] == 'a') {
        $score++;
    }

    // Add the checks for the remaining questions here (q3, q4, ..., q7)

    if ($score >= 4) {
        $res = "Pass";
        $pass = "Congratulations! You Have Passed The Exam.";
    } else {
        $res = "Fail";
        $fail = 'Sorry, You Have Failed The Exam Please Retry.';
    }

    $application_no = $_POST['application_no'];
    $email = $_POST['email'];


}

$connection->user_exam_status($application_no,$email,$res);
// header('location: admin_home.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/exam_result.css">
    <title>Exam Result</title>
</head>

<body>
    <div class="container">
        <h1>Exam Result</h1>
        <div class="result">
            <div class="subject">
                <span>Total Question: </span>
                <span>7</span>
            </div>
            <div class="subject">
                <span>Your score: </span>
                <span><?php echo $score; ?></span>
            </div>
            <div class="subject">
                <span>Result: </span>
                <span><?php echo $res; ?></span>
            </div>
            <div class="footer">
                <?php 
                        if('Pass' == $res) 
                        {
                           echo  '<span style="color: green;">'.$pass;
                        }
                        else{
                            echo '<span style="color: red;">'.$fail;
                        }
                ?>
            </div>
            <div class="btn">
                <a href="../admin_home.php"><button type="submit" class="button-89">Back Application</button></a>
            </div>
        </div>
    </div>
</body>

</html>