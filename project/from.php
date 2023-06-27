<!-- https://prnt.sc/hs_Ll1aLp8KY table1-->
<!-- https://prnt.sc/nSPuZe7wgTaF  table 2-->
<!-- https://prnt.sc/nKjpuCsNTPX7 from1-->
<!-- https://prnt.sc/ZM4nxd_R3OXB  from2 -->


<!DOCTYPE html>
<html lang="en">

<?php
include 'database.php';

$object = new database();

if (isset($_GET['id'])) {
    // var_dump($_GET);
    $id = $_GET['id'];
    // var_dump($id);
    // $i = new crud('localhost', 'root', "", 'outlet');
    $g = $object->sele('project', $id);
    // var_dump($g);
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <link rel="stylesheet" href="from.css">
    <title>From Page</title>
</head>

<body>
    <div class="container">

        <form action="" method="POST" id="myform">
            <div class="btn">
                <a href="showdata.php">
                    <button type="button" id="btn_back" class="btn_back">
                        <i class="fa-solid fa-arrow-left" style="padding-right: 15px;"></i>
                        <span>Back</span>
                    </button>
                </a>
                <button type="reset" id="reset" class="reset"><span>Reset</span></button>
                <button type="submit" id="sava_edit" name="sava_edit" class="sava_edit">
                    <span>Save and Continue Edit</span>
                </button>
                <button type="button" id="sava_edit" name="sava_outlet" class="sava_outlet">
                    <span>Save Outlet</span>
                </button>
            </div>
            <p id="success" style="display:none;"></p>
            <p id="error" style="display:none;"></p>
            <div class="first_from" id="first_from">
                <div class="Field">
                    <!-- first toggle  -->
                    <div class="label">
                        <label for="status"><span>Status</span></label>
                        <span id="req_0" class="req"></span>
                    </div>
                    <div class="input">
                        <input class="status" name="status" id="first-toggle-btn" type="checkbox" value="1<?php
                            if($g['status'] == "off"){
                                $g['status'] = "on";
                            }
                            else{
                                $g['status'] = "off";
                            }
                        ?>" 
                        />
                        <label for="first-toggle-btn">
                        </label>
                    </div>
                </div>
                <div class="Field">
                    <div class="label">
                        <label for="email"><span>Email</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="email_id" name="email_id" type="email" class="field text" value="<?php if (isset($_GET['id'])) {
                            echo $g['email_id'];
                        } ?>">
                    </div>
                </div>
                <div id="email_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="outlet_name"><span>Outlet Name</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="outlet_name" name="outlet_name" type="text" class="field text" value="<?php if (isset($_GET['id'])) {
                            echo $g['outlet_name'];
                        } ?>">
                    </div>
                </div>
                <div id="outlet_name_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="admin_name"><span>Admin User</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <div class="select">
                            <select name="admin_name" class="admin_name" id="admin_name">
                                <option value="" selected>Please Select Company Name</option>
                                <option value="Volvo"<?php 
                                    if ($g['admin_name'] == 'Volvo' ) {
                                        echo "selected";
                                    }
                                ?>>Volvo</option>
                                <option value="Amazon"<?php 
                                    if ($g['admin_name'] == 'Amazon' ) {
                                        echo "selected";
                                    }
                                ?>>Amazon</option>
                                <option value="BMW"<?php 
                                    if ($g['admin_name'] == 'BMW' ) {
                                        echo "selected";
                                    }
                                ?>>BMW</option>
                                <option value="Mercedes"<?php 
                                    if ($g['admin_name'] == 'Mercedes' ) {
                                        echo "selected";
                                    }
                                ?>>Mercedes</option>
                                <option value="Myntra"<?php 
                                    if ($g['admin_name'] == 'Myntra' ) {
                                        echo "selected";
                                    }
                                ?>>Myntra</option>
                                <option value="Audi"<?php 
                                    if ($g['admin_name'] == 'Audi' ) {
                                        echo "selected";
                                    }
                                ?>>Audi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="admin_err" class="error"></div>
            </div>
            <div class="Field">
                <!-- second toggle  -->
                <div class="label">
                    <label for="set_add"><span>Set Outlet Address</span></label>
                    <span id="req_0" class="req"> </span>
                </div>
                <div class="input">
                    <input class="switch1" name="switch1" id="second-toggle-btn" type="checkbox" value="0" />
                    <label for="second-toggle-btn"></label>
                </div>
            </div>
            <div class="second_from" id="second_from" style="display: none;">
                <div class="Field">
                    <div class="label">
                        <label for="first_name"><span>First Name</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="first_name" name="first_name" type="text" class="field text" value="<?php if (isset($_GET['id'])) {
                            echo $g['first_name'];
                        } ?>">
                    </div>
                </div>
                <div id="firstname_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="last_name"><span>Last Name</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="last_name" name="last_name" type="text" class="field text" value="<?php if (isset($_GET['id'])) {
                            echo $g['last_name'];
                        } ?>">
                    </div>
                </div>
                <div id="lastname_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="company"><span>Company</span></label>
                        <span id="req_0" class="req"></span>
                    </div>
                    <div class="input">
                        <input id="company" name="company" type="text" class="field text" value="<?php if (isset($_GET['id'])) {
                            echo $g['company'];
                        } ?>">
                    </div>
                </div>
                <div id="company_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="telephone"><span>Telephone</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="telephone" name="telephone" type="tel" class="field text" value="<?php if (isset($_GET['id'])) {
                            echo $g['telephone'];
                        } ?>">
                    </div>
                </div>
                <div id="telephone_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="street"><span>Street</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="street" name="street" type="text" class="field text" value="<?php if (isset($_GET['id'])) {
                            echo $g['street'];
                        } ?>">
                    </div>
                </div>
                <div id="street_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="city"><span>City</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="city" name="city" type="text" class="field text" value="<?php if (isset($_GET['id'])) {
                            echo $g['city'];
                        } ?>">
                    </div>
                </div>
                <div id="city_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="postcode"><span>PostCode</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="postcode" name="postcode" type="text" class="field text" value="<?php if (isset($_GET['id'])) {
                            echo $g['postcode'];
                        } ?>">
                    </div>
                </div>
                <div id="postcode_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="country"><span>Country</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <div class="select">
                            <select id="country" name="country">
                                <option value=""><?php if (isset($_GET['id'])) {
                                    echo $g['country'];
                                } ?></option>
                                <option value="">--Please Select--</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="country_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="state"><span>State</span></label>
                        <span id="req_0" class="req"></span>
                    </div>
                    <div class="input">
                        <div class="select">
                            <select id="state" name="state">
                                <option value="<?php if (isset($_GET['id'])) {
                                    echo $g['state'];
                                } ?>" selected="selected">
                                   </option>
                                <option value="">
                                    Please Select a region,state or province.</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="state_err" class="error"></div>
            </div>
            <input type="hidden">
        </form>
    </div>
    <script src="ajaxinsert.js"></script>
    <!-- <script src="ajaxupdate.js"></script> -->
    <script src="country.js"></script>
    <script src="from_script.js"></script>
</body>

</html>