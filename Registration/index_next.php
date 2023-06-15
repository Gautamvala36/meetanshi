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
    <form action="index_newt.php" method="post" class="form">
        <header id="header" class="info">
            <h2 class="rgname">Retreat Registration</h2>
        </header>
        <ul>
            <li id="row1" class="row1">
                <label class="desc" id="title0">
                    Name
                </label>
                <span>
                        <input id="first" name="first" type="text" class="field text fn" size="8" tabindex="0"
                               placeholder="" required><br>
                        <label for="first" class="text1">First</label>
                    </span>
                <span>
                        <input id="last" name="last" type="text" class="field text ln" size="12" tabindex="0"
                               placeholder="" required><br>
                        <label for="last" class="text1">Last</label>
                </span>
            </li>
            <li id="row2" class="row2">
                <label class="desc" id="title5">
                    Address
                </label>
                <div>
                        <span class="full addr1">
                            <input id="address" name="address" type="text" class="field text addr" value="" tabindex="0"
                                   placeholder="" required="">
                            <label for="address">Street Address</label>
                        </span>
                    <span class="full addr2">
                            <input id="address2" name="address2" type="text" class="field text addr" value=""
                                   tabindex="0" placeholder="">
                            <label for="address2">Address Line 2</label>
                        </span>
                    <span class="left city">
                            <input id="city_c" name="city_c" type="text" class="field text addr" value="" tabindex="0"
                                   placeholder="" required="">
                            <label for="city_c">City</label>
                        </span>
                    <span class="right state">
                            <input id="state_s" name="state_s" type="text" class="field text addr" value="" tabindex="0"
                                   placeholder="" required="">
                            <label for="state_s">State / Province / Region</label>
                        </span>
                    <span class="left zip">
                            <input id="zip_code" name="zip_code" type="text" class="field text addr" value=""
                                   maxlength="15" tabindex="0" placeholder="" required="">
                            <label for="zip_code">Postal / Zip Code</label>
                        </span>
                    <span class="right country">
                            <select id="Field10" name="Field10" class="field select addr" tabindex="0"
                                    data-wufoo-field="dropdown">
                                <option value="" selected="selected"></option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Australia">Australia</option>
                                <option value="Canada">Canada</option>
                                <option value="France">France</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="India">India</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="American Samoa">American</option>
                            </select>
                            <label for="Field10">Country</label>
                        </span>
                </div>
            </li>
            <li id="number_row" class="number_row">
                <label class="desc" id="title16">
                    Phone Number
                </label>
                <span>
                        <input id="number" name="number" type="tel" class="field text" value="" size="3" maxlength="3"
                               tabindex="0" placeholder="">
                        <label for="number">###</label>
                    </span>
                <span class="symbol">-</span>
                <span>
                        <input id="number-1" name="number-1" type="tel" class="field text" value="" size="3"
                               maxlength="3" tabindex="0" placeholder="">
                        <label for="number-1">###</label>
                    </span>
                <span class="symbol">-</span>
                <span>
                        <input id="number-2" name="number-2" type="tel" class="field text" value="" size="4"
                               maxlength="4" tabindex="0" placeholder="">
                        <label for="number-2">####</label>
                    </span>
            </li>
            <li id="email_row" class="email_row">
                <label class="email" id="email" for="email_id">
                    Email
                    <span id="req_11" class="req">*</span>
                </label>
                <div>
                    <input id="email_id" name="email_id" type="email" spellcheck="false" class="field text medium"
                           value="" maxlength="255" tabindex="0" required="">
                </div>
            </li>

        </ul>
        <div class="button">
            <input type="hidden" name="currentPage" id="currentPage"
                   value="kykBPk3jWUsMCDffzSJwuBe3il8xUSzMaPVW82FfUa1tFY=">
            <input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit">
        </div>
    </form>
</div>
</body>

</html>