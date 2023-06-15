<?php
$flag1 = $flag2 = $flag3 = $flag4 = $flag5 = $flag6 = $flag7 = $flag8 = $flag9 = 0;
$nameErr = $addressErr = $address2Err = $cityErr = $stateErr = $zipErr = $countryErr = $emailErr = $numberErr = "";
// var_dump($_POST);
if (isset($_POST['submit'])) {

    // name validation
    // if (empty($_POST['title_t'])) {
    //     $titleErr = "Title is empty";
    // } elseif (!preg_match("/^(Mr|Mrs)\.?(\s*\w*)+$/i", $_POST['title_t'])) {
    //     $titleErr = "Title is Mr and Mrs";
    // } else {
    //     $flag = 1;
    // }

    if (empty($_POST['first']) or empty($_POST['last'])) {
        $nameErr = "Name is empty";
    } elseif (!preg_match("/^[a-zA-z]*$/", $_POST['first']) or !preg_match("/^[a-zA-z]*$/", $_POST['last'])) {
        $nameErr = "Only alphabets and whitespace are allowed.";
    } else {
        $flag1 = 1;
    }

    // address and address2 validation
    if (empty($_POST['address'])) {
        $addressErr = "Address is empty";
    } elseif (!preg_match('/^[a-zA-z0-9%\.\-\s\,]*$/', $_POST['address'])) {
        $addressErr = "Only alphabets and whitespace are allowed.";
    } else {
        $flag2 = 1;
    }

    if (empty($_POST['address2'])) {
        $address2Err = "Address is empty";
    } elseif (!preg_match('/^[a-zA-z0-9%\.\-\s\,]*$/', $_POST['address2'])) {
        $address2Err = "Only alphabets and whitespace are allowed.";
    } else {
        $flag3 = 1;
    }

    //  city and state validation
    if (empty($_POST['city_c'])) {
        $cityErr = "City is empty";
    } elseif (!preg_match("/^[a-zA-z]*$/", $_POST['city_c'])) {
        $cityErr = "Only alphabets and whitespace are allowed.";
    } else {
        $flag4 = 1;
    }

    if (empty($_POST['state_s'])) {
        $stateErr = "State is empty";
    } else {
        $flag5 = 1;
    }

    // zip and country validation
    if (empty($_POST['zip_code'])) {
        $zipErr = "Zip Code is empty";
    } else if (!preg_match('#[0-9]{6}#', $_POST['zip_code'])) {
        $zipErr = "Zip code is invalid";
    } else {
        $flag6 = 1;
    }

    if (empty($_POST['Field10'])) {
        $countryErr = "Country is empty";
    } else {
        $flag7 = 1;
    }

    // email validation
    if (empty($_POST['email_id'])) {
        $emailErr = "Email Id is empty";
    } elseif (!preg_match('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^', $_POST['email_id'])) {
        $emailErr = "Email is not valid.";
    } else {
        $flag8 = 1;
    }

    // number validation
    if (empty($_POST['number']) or empty($_POST['number-1']) or empty($_POST['number-2'])) {
        $numberErr = "Mobile number is empty";
    } elseif (!preg_match('/^[0-9]*$/', $_POST['number']) or !preg_match('/^[0-9]*$/', $_POST['number-1']) or !preg_match('/^[0-9]*$/', $_POST['number-2'])) {
        $numberErr = "Mobile number is not valid.";
    } else {
        $flag9 = 1;
    }


}
// if ($flag == 1 and $flag1 == 1 and $flag2 == 1 and $flag3 == 1 and $flag4 == 1 and $flag5 == 1 and $flag6 == 1 and $flag7 == 1 and $flag8 == 1 and $flag9 == 1) {
//     header("location: submit_index.php");
// }
?>

<!-- <?php  
// if (isset($_POST['submit'])) {

//     $title = $_POST['title_t'];
//     $first = $_POST['first'];
//     $last = $_POST['last'];
//     $suffix = $_POST['suffix'];
//     $address = $_POST['address'];
//     $address2 = $_POST['address2'];
//     $city = $_POST['city_c'];
//     $state = $_POST['state_s'];
//     if (isset($_POST['state_s'])) {
//         $selectedValue = $_POST['state_s'];
//     }
//     $zip = $_POST['zip_code'];
//     $country = $_POST['Field10'];
//     if (isset($_POST['Field10'])) {
//         $_SESSION['selectedValue'] = $_POST['Field10'];
//     }
//     $email = $_POST['email_id'];
//     $number = $_POST['number'];
//     $number_1 = $_POST['number-1'];
//     $number_2 = $_POST['number-2'];
// }
 ?>  -->


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
        <form method="post" class="form" action="page4.php">

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
                            placeholder="" value="<?php echo $_POST['first'] ?>"> <br>
                        <label for="first" class="text1">First</label>
                    </span>
                    <span>
                        <input id="last" name="last" type="text" class="field text ln" size="12" tabindex="0"
                            placeholder="" value="<?php echo $_POST['last'] ?>"> <br>
                        <label for="last" class="text1">Last</label>
                    </span>
                </li>
                <span class="error">
                    <?php echo $nameErr; ?>
                </span>

                <li id="row2" class="row2">
                    <label class="desc" id="title5">
                        Address
                        <span id="req_5" class="req">*</span>
                    </label>
                    <div>
                        <span class="full addr1">
                            <input id="address" name="address" type="text" class="field text addr" tabindex="0"
                                placeholder="" value="<?php echo $_POST['address'] ?>">
                            <label for="address">Street Address</label>
                            <span class="error">
                                <?php echo $addressErr; ?>
                            </span>
                        </span>
                        <span class="full addr2">
                            <input id="address2" name="address2" type="text" class="field text addr" tabindex="0"
                                placeholder="" value="<?php echo $_POST['address2'] ?>">
                            <label for="address2">Address Line 2</label>
                            <span class="error">
                                <?php echo $address2Err; ?>
                            </span>
                        </span>
                        <span class="left city">
                            <input id="city_c" name="city_c" type="text" class="field text addr" tabindex="0"
                                placeholder="" value="<?php echo $_POST['city'] ?>">
                            <label for="city_c">City</label>
                            <span class="error">
                                <?php echo $cityErr; ?><br>
                            </span>
                        </span>
                        <span class="right state">
                            <select id="state_s" name="state_s" type="text" class="field text addr" tabindex="0">
                                <option value="<?php echo $_POST['state'] ?>" selected="selected">Select State</option>
                            </select>
                            <label for="state_s">State / Province / Region</label>
                            <span class="error">
                                <?php echo $stateErr; ?><br>
                            </span>
                        </span>
                        <span class="left zip">
                            <input id="zip_code" name="zip_code" type="text" class="field text addr" maxlength="15"
                                tabindex="0" placeholder="" value="<?php echo $_POST['zip'] ?>">
                            <label for="zip_code">Postal / Zip Code</label>
                            <span class="error">
                                <?php echo $zipErr; ?><br>
                            </span>
                        </span>
                        <span class="right country">
                            <select id="Field10" name="Field10" class="field select addr" tabindex="0">
                                <!-- <option value="" selected="selected">Select Country</option> -->
                                <option value="<?php echo $_POST['country'] ?>">Select Country</option>
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
                            maxlength="255" tabindex="0" value="<?php echo $_POST['email'] ?>">
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
                            tabindex="0" placeholder="" value="<?php echo $_POST['number'] ?>">
                        <label for="number">###</label>
                    </span>
                    <span class="symbol">-</span>
                    <span>
                        <input id="number-1" name="number-1" type="tel" class="field text" size="3" maxlength="3"
                            tabindex="0" placeholder="" value="<?php echo $_POST['number_1'] ?>">
                        <label for="number-1">###</label>
                    </span>
                    <span class="symbol">-</span>
                    <span>
                        <input id="number-2" name="number-2" type="tel" class="field text" size="4" maxlength="4"
                            tabindex="0" placeholder="" value="<?php echo $_POST['number_2'] ?>">
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

    

    <form id="hiddenform" action="page4.php" method="post"> 
        <input type="hidden" name="first" value="<?php echo $first?>">
        <input type="hidden" name="last" value="<?php echo $last?>">
        <input type="hidden" name="address" value="<?php echo $address?>">
        <input type="hidden" name="address2" value="<?php echo $address2?>">
        <input type="hidden" name="city" value="<?php echo $city ?>">
        <input type="hidden" name="state" value="<?php echo $state ?>">
        <input type="hidden" name="zip" value="<?php echo $zip ?>">
        <input type="hidden" name="country" value="<?php echo $country ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="number" value="<?php echo $number ?>">
        <input type="hidden" name="number_1" value="<?php echo $number_1 ?>">
        <input type="hidden" name="number_2" value="<?php echo $number_2 ?>">
    </form>

    <?php
      if ($flag1 == 1 and $flag2 == 1 and $flag3 == 1 and $flag4 == 1 and $flag5 == 1 and $flag6 == 1 and $flag7 == 1 and $flag8 == 1 and $flag9 == 1) {
        echo '<script>
            document.getElementById("hiddenform").submit();
        </script>';
    }
    ?>
    
    <script src="country.js">
        
    </script>
</body>

</html>