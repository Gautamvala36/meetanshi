<?php 
include 'include/connection.php';
$connection = new connection();


$application_no = $_GET["application_no"];
$email = $_GET["email"];

// Now you can use $applicationNumber and $email in this page as needed

// For demonstration purposes, just echo the data

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/exam_test.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <title>Rto Exam</title>
</head>

<body>
    <div class="container">
        <div class="details">
            <div id="response">

            </div>
            <div class="headar">
                <h1>Rto Exam</h1>
            </div>
            <div class="user_detail">
                <span class="deta">Application Number : </span>
                <label for="" class="lable"><?= $application_no ?></label>
            </div>
            <div class="user_detail">
                <span class="deta">Email Id : </span>
                <label for="" class="lable"><?= $email ?></label>
            </div>
            <div class="user_detail">
                <span class="deta">Data : </span>
                <label for="" class="lable"><?=  date('d-m-Y'); ?></label>
            </div>

        </div>
        <div class="examform">
            <form action="submit/exam_result.php" method="POST">

                <input type="text" name="application_no" value="<?= $application_no ?>" style="display: none;">
                <input type="text" name="email" value="<?= $email ?>" style="display: none;">
                <div class="exam">
                    <span>Q1.Identify the symbol</span><br>
                    <img src="image/nb.png" height="150" width="150"><br>
                    <input class="input" type="radio" name="q1" value="a" /><span class="option">a. Narrow
                        bridge</span><br />
                    <input class="input" type="radio" name="q1" value="b" /><span class="option">b. Narrow
                        road</span><br />
                    <input class="input" type="radio" name="q1" value="c" /><span class="option">c. Hump
                        ahead</span><br>
                    <br>
                </div>

                <div class="exam">
                    <span>Q2. Identify the symbol</span><br>
                    <img src="image/nut.jpg" height="150" width="150"><br>
                    <input class="input" type="radio" name="q2" value="a" /><span class="option">a. No parking
                    </span><br />
                    <input class="input" type="radio" name="q2" value="b" /><span class="option">b. No U-Turn
                    </span><br />
                    <input class="input" type="radio" name="q2" value="c" /><span class="option">c. No left turn
                    </span><br>
                    <br>
                </div>

                <div class="exam">
                    <span>Q3. Identify the symbol</span><br>
                    <img src="image/nr.jpg" height="150" width="150"><br>
                    <input class="input" type="radio" name="q3" value="a" /><span class="option">a. Narrow
                        bridge</span><br />
                    <input class="input" type="radio" name="q3" value="b" /><span class="option">b. Narrow
                        road</span><br />
                    <input class="input" type="radio" name="q3" value="c" /><span class="option">c. Hump
                        ahead</span><br>
                    <br>
                </div>

                <div class="exam">
                    <span>Q4. Identify the symbol</span><br>
                    <img src="image/left.png" height="150" width="150"><br>
                    <input class="input" type="radio" name="q4" value="a" /><span class="option"> a. No
                        U-Turn</span><br />
                    <input class="input" type="radio" name="q4" value="b" /><span class="option"> b. No left
                        turn</span><br />
                    <input class="input" type="radio" name="q4" value="c" /><span class="option"> c. Hump
                        ahead</span><br>
                    <br>
                </div>

                <div class="exam">
                    <span>Q5. You can overtake a vehicle in front</span><br>
                    <input class="input" type="radio" name="q5" value="a" />
                    <span class="option">a. Through the right side of that vehicle</span><br />
                    <input class="input" type="radio" name="q5" value="b" />
                    <span class="option">b. Through the left side</span><br />
                    <input class="input" type="radio" name="q5" value="c" />
                    <span class="option">c. Through the left side, if the road is wide</span><br>
                    <br>
                </div>

                <div class="exam">
                    <span> Q6. Validity of learners licence</span><br>
                    <input class="input" type="radio" name="q6" value="a" /><span class="option">a. Till the driving
                        licence is
                        obtained</span><br />
                    <input class="input" type="radio" name="q6" value="b" /><span class="option">b. 6
                        months</span><br />
                    <input class="input" type="radio" name="q6" value="c" /><span class="option">c. 30 days</span><br>
                    <br>
                </div>

                <div class="exam">
                    <span>Q7. A red traffic light indicates?</span><br>
                    <input class="input" type="radio" name="q7" value="a" /><span class="option">a. Stop</span><br />
                    <input class="input" type="radio" name="q7" value="b" /><span class="option">b. Slow
                        down</span><br />
                    <input class="input" type="radio" name="q7" value="c" /><span class="option">c. Go</span><br>
                    <br>
                </div>
                <br>
                <input type="submit" value="Submit" id="submit" name="submit" class="button-89 btn" disabled />
            </form>
        </div>
    </div>
    <script>
    const inputFields = document.getElementsByClassName('input');
    const submitButton = document.getElementById('submit');

    // Function to check if all input fields are filled
    function checkInputs() {
        for (let i = 0; i < inputFields.length; i++) {
            if (inputFields[i].value.trim() === '') {
                return false; // At least one input field is empty
            }
        }
        return true; // All input fields are filled
    }

    // Add event listeners to each input field
    for (let i = 0; i < inputFields.length; i++) {
        inputFields[i].addEventListener('input', function() {
            submitButton.disabled = !checkInputs(); // Enable the button if all inputs are filled
        });
    }
    </script>
</body>

</html>