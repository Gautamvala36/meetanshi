<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<label for="dob">Date of Birth:</label>
<input type="date" id="dob">

<div id="ages"></div>

<select class="selecttag" id="license_type" name="license_type">
                        <option>Select License Type</option>
                        <option value="1" id="ll">Learners License</option>
                        <option value="2" id="dl">Driving Licence</option>
                    </select>
<button id="submit">Submit</button>

<script>
    $(document).ready(function () {
    const getAge = (dob) => {
        // Calculate age
        const age = (new Date() - dob) / (31556952000);
        return age;
    };

    console.log('agecalculate-1');

    $('#dob').change(function () {
        try {
            console.log('agecalculate-2');
            const dateOfBirth = new Date($(this).val());
            const age = getAge(dateOfBirth);
            
            // Perform the same age-based actions as before
            if (age < 16) {
                $("#license_type").prop('disabled', true);
                $('#ages').text('Registration From is Only 15+');
                $('#submit').hide();
            } else if (age >= 16 && age <= 18) {
                $('#submit').show();
                $("#license_type").prop('disabled', false);
                $('#ages').text('');
                $('#dl').val(2).change().css('display', 'none');
                $('#license_type').val(1).change();
            } else if (age > 18) {
                $('#submit').show();
                $("#license_type").prop('disabled', false);
                $('#ages').text('');
                $('#license_type').val(2).change();
                $('#license_type').val(1).change();
            }
        } catch (error) {
            console.error('Error:', error.message);
            // You can handle the error here, show a message to the user, or take other actions as needed.
        }
    });
});

</script>
</body>
</html>