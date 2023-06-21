<?php
require_once("mysqli_oop.php");

$sql = "SELECT * FROM register_first ORDER BY id DESC LIMIT 1";

$result = $conn->query($sql);
$value = $result->fetch_assoc();
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>
            <img src="wflogo-padding.png">
        </h1>
        <form action="page3.php" method="post">
            <header id="header" class="info">
                <h2 class="rgname">Event Registration From</h2>
                <p>Date :
                    <?php date_default_timezone_set('Asia/Kolkata');
                    echo date('l jS \of F Y h:i:s A'); ?>
                </p>
            </header>
            <div class="viweform">

                <b>Name : </b>
                <p>
                    <?php echo $value['name']; ?>
                </p>

                <b>Address : </b>
                <p>
                    <?php echo $value['address1']; ?>
                </p>

                <b>City : </b>
                <sapn>
                    <?php echo $value['city'] ?>
                </sapn><br>
                <b>State : </b>
                <sapn>
                    <?php echo $value['state'] ?>
                </sapn>&nbsp;
                <b>Country : </b>
                <sapn>
                    <?php echo $value['country'] ?>
                </sapn><br>
                <b>Zip : </b>
                <sapn>
                    <?php echo $value['zipcode'] ?>
                </sapn><br>

                <b>Email : </b>
                <sapn>
                    <?php echo $value['email'] ?>
                </sapn><br>

                <b>Phone : </b>
                <span>
                    <?php echo $value['mobilenumber'] ?>
                </span>
            </div>
            <div>

            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d4041.355775263834!2d72.1623707498935!3d21.743864751323397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x395f5b692d3edf8f%3A0xf8865e67d3b33455!2sKudoz%20cafe%20bhavnagar%2C%20Silver%20sky%20pizza%2C%20HadaNagar%2C%20Bhavnagar%2C%20Gujarat%20364001!3m2!1d21.744526399999998!2d72.1646372!5e0!3m2!1sen!2sin!4v1686052750857!5m2!1sen!2sin"
                    width="500" height="250" style="border:1px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="submit_next">
                <input type="submit" value="Next Page" class="btnnext"></a>
            </div>

        </form>

    </div>


</body>

</html>