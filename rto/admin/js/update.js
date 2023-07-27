$("body").on("click", ".update", function(e) {
   
    console.log('hello');
    e.preventDefault();
    var editId = $(this).attr('id');
    console.log(editId);
    $.ajax({
        url: "edit.php",
        type: "POST",
        data: {
            editId: editId
        },
        success: function(response) {
            var data = JSON.parse(response);
            console.log(data);
            // $("#application_no").val(data['application_no']);
            // $("#fullname").val(data.fullname);
            // $("#email").val(data.email);
            // $("#username").val(data.username);
            // $("#dob").val(data.dob);
            // location.href = "update_reg.php";
        }
    });
    
});