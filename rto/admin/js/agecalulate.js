// $(document).ready(function() {
//     $('#submit').click(function() {
//         var dob = $('#dob').val();
//         var dobdate = new Date(dob);
//         var today = new Date();

//         var age = today.getFullYear() - dobdate.getFullYear();
//         var monthdiff = today.getMonth() - dobdate.getMonth();

//         if (monthdiff < 0 || (monthdiff === 0 && today.getDate() < dobdate.getDate())) {
//             age--;
//         }
//         $('#age').val(age);
//     });
// });

const getAge = (dob) => {
    return (new Date() - new Date(dob)) / (31556952000);
};

$('#dob').change(function() {
    const date = $(this).val();
    const age = getAge(date);
    if (age < 16) {
        $("#license_type").prop('disabled', 'disabled');
        $('#ages').text('Registration From is Only 15+');
        $('#submit').hide();
    }
    else if (age > 15 && age <= 18) {
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
});