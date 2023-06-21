<?php

require_once("mysqli_oop.php");

$sql = "SELECT * FROM register_first ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
$value = $result->fetch_assoc();

$name = explode(" ", $value['name']);
$num_digits = $value['mobilenumber'];
$number = str_split($num_digits);

$first_name = $name[1];
$last_name = $name[2];
$number_1 = $number[0] . $number[1] . $number[2];
$number_2 = $number[3] . $number[4] . $number[5];
$number_3 = $number[6] . $number[7] . $number[8] . $number[9];
// $conn->close();


$flag1 = $flag2 = $flag3 = $flag4 = $flag5 = $flag6 = $flag7 = $flag8 = $flag9 = 0;
$nameErr = $addressErr = $address2Err = $cityErr = $stateErr = $zipErr = $countryErr = $emailErr = $numberErr = "";

if (isset($_POST['submit'])) {

    $first = $_POST['first'];
    $last = $_POST['last'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $city = $_POST['city_c'];
    // $states = $_POST['states'];
    $zip = $_POST['zip_code'];
    $country = $_POST['Field10'];
    $email = $_POST['email_id'];
    $number = $_POST['number'];
    $number_1 = $_POST['number-1'];
    $number_2 = $_POST['number-2'];

    // name validation

    if (empty($_POST['first']) or empty($_POST['last'])) {
        $nameErr = "Name is empty";
    } elseif (!preg_match("/^[a-zA-z]*$/", $_POST['first']) or !preg_match("/^[a-zA-z]*$/", $_POST['last'])) {
        $nameErr = "Only alphabets and whitespace are allowed.";
    } else {
        $flag1 = 1;
        $name = $_POST['first'] . " " . $_POST['last'];

    }

    // address and address2 validation
    if (empty($_POST['address'])) {
        $addressErr = "Address is empty";
    } elseif (!preg_match('/^[a-zA-z0-9%\.\-\s\,]*$/', $_POST['address'])) {
        $addressErr = "Only alphabets and whitespace are allowed.";
    } else {
        $flag2 = 1;
        $address = $_POST['address'];
    }

    if (empty($_POST['address2'])) {
        $address2Err = "Address is empty";
    } elseif (!preg_match('/^[a-zA-z0-9%\.\-\s\,]*$/', $_POST['address2'])) {
        $address2Err = "Only alphabets and whitespace are allowed.";
    } else {
        $flag3 = 1;
        $address1 = $_POST['address2'];
    }

    //  city and state validation
    if (empty($_POST['city_c'])) {
        $cityErr = "City is empty";
    } elseif (!preg_match("/^[a-zA-z]*$/", $_POST['city_c'])) {
        $cityErr = "Only alphabets and whitespace are allowed.";
    } else {
        $flag4 = 1;
        $citys = $_POST['city_c'];
    }

    if (empty($_POST['states'])) {
        $stateErr = "State is empty";
    } else {
        $flag5 = 1;
        $states = $_POST['states'];
    }

    // zip and country validation
    if (empty($_POST['zip_code'])) {
        $zipErr = "Zip Code is empty";
    } else if (!preg_match('#[0-9]{6}#', $_POST['zip_code'])) {
        $zipErr = "Zip code is invalid";
    } else {
        $flag6 = 1;
        $zip = $_POST['zip_code'];
    }

    if (empty($_POST['Field10'])) {
        $countryErr = "Country is empty";
    } else {
        $flag7 = 1;
        $countrys = $_POST['Field10'];
    }

    // email validation
    if (empty($_POST['email_id'])) {
        $emailErr = "Email Id is empty";
    } elseif (!preg_match('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^', $_POST['email_id'])) {
        $emailErr = "Email is not valid.";
    } else {
        $flag8 = 1;
        $emails = $_POST['email_id'];
    }

    // number validation
    if (empty($_POST['number']) or empty($_POST['number-1']) or empty($_POST['number-2'])) {
        $numberErr = "Mobile number is empty";
    } elseif (!preg_match('/^[0-9]*$/', $_POST['number']) or !preg_match('/^[0-9]*$/', $_POST['number-1']) or !preg_match('/^[0-9]*$/', $_POST['number-2'])) {
        $numberErr = "Mobile number is not valid.";
    } else {
        $flag9 = 1;
        $numbers = $_POST['number'] . "" . $_POST['number-1'] . "" . $_POST['number-2'];
    }

}
if ($flag1 == 1 and $flag2 == 1 and $flag3 == 1 and $flag4 == 1 and $flag5 == 1 and $flag6 == 1 and $flag7 == 1 and $flag8 == 1 and $flag9 == 1) {

   
    $sql = "UPDATE register_first SET name='$name',address1='$address',address2='$address1',city='$citys',state='$states',zipcode='$zip',country = '$countrys', email='$emails',mobilenumber='$numbers' WHERE id = (SELECT id FROM register_first ORDER BY id DESC LIMIT 1)";
  
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
                header("location: page4.php");
      } else {
        echo "Error updating record: " . $conn->error;
      }

    $conn->close();
  
    }


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
        <form method="post" class="form" action="">

            <header id="header" class="info">
                <h2 class="">Workshop Registration</h2>
                <div class="">Register now while seats are available!</div>
            </header>
            <ul>
                <li id="row1" class="row1">
                    <label class="desc" id="title0">
                        Name
                        <span id="req_0" class="req">*</span>
                    </label>
                    <span>
                        <input id="first" name="first" type="text" class="field text fn" size="8" tabindex="0"
                            placeholder="" value="<?php echo $first_name ?>"> <br>
                        <label for="first" class="text1">First</label>
                    </span>
                    <span>
                        <input id="last" name="last" type="text" class="field text ln" size="12" tabindex="0"
                            placeholder="" value="<?php echo $last_name ?>"> <br>
                        <label for="last" class="text1">Last</label>
                    </span>
                </li>
                <span class="error">
                    <?php echo $nameErr; ?>
                </span>

                <li id="row2" class="row2">
                    <label class="desc" id="title">
                        Address
                        <span id="req_5" class="req">*</span>
                    </label>
                    <div>
                        <span class="full addr1">
                            <input id="address" name="address" type="text" class="field text addr" tabindex="0"
                                placeholder="" value="<?php echo $value['address1'] ?>">
                            <label for="address">Street Address</label>
                            <span class="error">
                                <?php echo $addressErr; ?>
                            </span>
                        </span>
                        <span class="full addr2">
                            <input id="address2" name="address2" type="text" class="field text addr" tabindex="0"
                                placeholder="" value="<?php echo $value['address2'] ?>">
                            <label for="address2">Address Line 2</label>
                            <span class="error">
                                <?php echo $address2Err; ?>
                            </span>
                        </span>
                        <span class="left city">
                            <input id="city_c" name="city_c" type="text" class="field text addr" tabindex="0"
                                placeholder="" value="<?php echo $value['city'] ?>">
                            <label for="city_c">City</label>
                            <span class="error">
                                <?php echo $cityErr; ?><br>
                            </span>
                        </span>
                        <span class="right state">
                            <select id="states" name="states" type="text" class="field text addr" tabindex="0">
                                <option value="<?php echo $value['state'] ?>" selected="selected">Select State</option>
                            </select>
                            <label for="states">State / Province / Region</label>
                            <span class="error">
                                <?php echo $stateErr; ?><br>
                            </span>
                        </span>
                        <span class="left zip">
                            <input id="zip_code" name="zip_code" type="text" class="field text addr" size="6"
                                maxlength="6" tabindex="0" placeholder="" value="<?php echo $value['zipcode'] ?>">
                            <label for="zip_code">Postal / Zip Code</label>
                            <span class="error">
                                <?php echo $zipErr; ?><br>
                            </span>
                        </span>
                        <span class="right country">
                            <select id="Field10" name="Field10" class="field select addr" tabindex="0">
                                <!-- <option value="" selected="selected">Select Country</option> -->
                                <option value="<?php echo $value['country'] ?>">Select Country</option>
                            </select>
                            <label for="Field10">Country</label>
                            <span class="error">
                                <?php echo $countryErr; ?><br>
                            </span>
                        </span>
                    </div>
                </li>
                <li id="row3" class="row3">
                    <label class="email" id="email" for="email_id">
                        Email
                        <span id="req_11" class="req">*</span>
                    </label>
                    <div>
                        <input id="email_id" name="email_id" type="email" spellcheck="false" class="field text medium"
                            maxlength="255" tabindex="0" value="<?php echo $value['email'] ?>">
                    </div>
                    <span class="error">
                        <?php echo $emailErr; ?><br>
                    </span>
                </li>
                <li id="row4" class="row4">
                    <label class="desc" id="title16">
                        Phone Number
                    </label>
                    <span>
                        <input id="number" name="number" type="tel" class="field text" size="3" maxlength="3"
                            tabindex="0" placeholder="" value="<?php echo $number_1 ?>">
                        <label for="number">###</label>
                    </span>
                    <span class="symbol">-</span>
                    <span>
                        <input id="number-1" name="number-1" type="tel" class="field text" size="3" maxlength="3"
                            tabindex="0" placeholder="" value="<?php echo $number_2 ?>">
                        <label for="number-1">###</label>
                    </span>
                    <span class="symbol">-</span>
                    <span>
                        <input id="number-2" name="number-2" type="tel" class="field text" size="4" maxlength="4"
                            tabindex="0" placeholder="" value="<?php echo $number_3 ?>">
                        <label for="number-2">####</label>
                    </span>
                </li>
                <span class="error">
                    <?php echo $numberErr; ?>
                </span>
                <li class="buttons">
                    <div>
                        <input id="submit" name="submit" class="btTxt submit" type="submit" value="Submit">
                    </div>
                </li>
            </ul>
        </form>
    </div>

    <script src="country.js"></script>
</body>

</html>