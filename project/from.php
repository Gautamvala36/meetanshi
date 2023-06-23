<!-- https://prnt.sc/hs_Ll1aLp8KY table1-->
<!-- https://prnt.sc/nSPuZe7wgTaF  table 2-->
<!-- https://prnt.sc/nKjpuCsNTPX7 from1-->
<!-- https://prnt.sc/ZM4nxd_R3OXB  from2 -->

<!DOCTYPE html>
<html lang="en">

<!-- // error_reporting(0); 
// include 'database.php';
// $object = new database();

// if (isset($_POST['status'])) {

//     if (isset($_POST['status']) == true) {
//         $status = 1;
//     } else {
//         $status = 0;
//     }
//     $email = $_POST['email_id'];
//     $outletname = $_POST['outlet_name'];
//     $adminname = $_POST['admin_name'];
//     $firstname = $_POST['first_name'];
//     $lastname = $_POST['last_name'];
//     $company = $_POST['company'];
//     $telephone = $_POST['telephone'];
//     $street = $_POST['street'];
//     $city = $_POST['city'];
//     $postcode = $_POST['postcode'];
//     $country = $_POST['country'];
//     $states = $_POST['state'];

    // $object = new database('localhost', 'root', "", 'registration');
    // $name = $object->check('project', $outletname);
    // var_dump($name)
    // // $name = $object->

    // $object->insert('project', ['status' => $status, 'email_id' => $email, 'outlet_name' => $outletname, 'admin_name' => $adminname, 'first_name' => $firstname, 'last_name' => $lastname, 'company' => $company, 'telephone' => $telephone, 'street' => $street, 'city' => $city, 'postcode' => $postcode, 'country' => $country, 'state' => $states]);
    // var_dump($name);

    // echo "Insert Result is : ";
    // var_dump($object->getResult());
    // header("location: showdata.html");

    //     if ($name === NULL) {
//         if (isset($_POST['toggle']) == false) {
//             $object = new database('localhost', 'root', "", 'registration');
//             $name = $object->insert('project', $status, $email, $outletname, $adminname, $firstname, $lastname, $company, $telephone, $street, $city, $postcode, $country, $states);
//             var_dump($object->getResult());

    //         }
//         //  else {
// //             $object= new database('localhost', 'root', "", 'registration');
// //             $name = $object->insert('project', $Outlet_Name, $status, $Admin_User, $email, $Name, $lname, $Company, $Telephone, $Street, $City, $Postcode, $Country, $State);
// // //        var_dump($name);
// //         }
//     }
//     // else if ($name['OutlateName'] == $Outlet_Name) {
//     //     $name = $object->upp('detprojectails', $Outlet_Name, $status, $Admin_User, $email, $Name, $lname, $Company, $Telephone, $Street, $City, $Postcode, $Country, $State);

    //     // }

// }

// print_r($_POST);

// ?> -->

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

        <form action="" method="post" id="myform">
            <div class="btn">
                <a href="showdata.html">
                    <button type="button" id="btn_back" class="btn_back">
                        <i class="fa-solid fa-arrow-left" style="padding-right: 15px;"></i>
                        <span>Back</span>
                    </button>
                </a>
                <button type="reset" id="reset" class="reset"><span>Reset</span></button>
                <button type="submit" id="sava_edit" name="sava_edit" class="sava_edit">
                    <span>Save and Continue Edit</span>
                </button>
                <button type="button" id="sava_outlet" name="sava_outlet" class="sava_outlet">
                    <span>Save Outlet</span>
                </button>
            </div>
            <div class="first_from" id="first_from">
                <div class="Field">
                    <!-- first toggle  -->
                    <div class="label">
                        <label for="status"><span>Status</span></label>
                        <span id="req_0" class="req"></span>
                    </div>
                    <div class="input">
                        <input class="status" name="status" id="first-toggle-btn" type="checkbox" data-no="No"
                            data-yes="Yes" />
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
                        <input id="email_id" name="email_id" type="email" class="field text">
                    </div>
                </div>
                <div id="email_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="outlet_name"><span>Outlet Name</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="outlet_name" name="outlet_name" type="text" class="field text">
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
                                <option value="0">Please Select Company Name</option>
                                <option value="1">Volvo</option>
                                <option value="2">Amazon</option>
                                <option value="3">BMW</option>
                                <option value="4">Mercedes</option>
                                <option value="5">Myntra</option>
                                <option value="6">Audi</option>
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
                    <input class="switch1" id="second-toggle-btn" type="checkbox" value="0" />
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
                        <input id="first_name" name="first_name" type="text" class="field text">
                    </div>
                </div>
                <div id="firstname_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="last_name"><span>Last Name</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="last_name" name="last_name" type="text" class="field text">
                    </div>
                </div>
                <div id="lastname_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="company"><span>Company</span></label>
                        <span id="req_0" class="req"></span>
                    </div>
                    <div class="input">
                        <input id="company" name="company" type="text" class="field text">
                    </div>
                </div>
                <div id="company_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="telephone"><span>Telephone</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="telephone" name="telephone" type="tel" class="field text">
                    </div>
                </div>
                <div id="telephone_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="street"><span>Street</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="street" name="street" type="text" class="field text">
                    </div>
                </div>
                <div id="street_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="city"><span>City</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="city" name="city" type="text" class="field text">
                    </div>
                </div>
                <div id="city_err" class="error"></div>
                <div class="Field">
                    <div class="label">
                        <label for="postcode"><span>PostCode</span></label>
                        <span id="req_0" class="req">*</span>
                    </div>
                    <div class="input">
                        <input id="postcode" name="postcode" type="text" class="field text">
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
                                <option value="" selected="selected">--Please Select--</option>
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
                                <option value="" selected="selected">Please Select a region,state or province.</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="state_err" class="error"></div>
            </div>
        </form>
    </div>
    <script src="hello.js"></script>
    <script src="country.js"></script>
    <script src="from_script.js"></script>
</body>

</html>