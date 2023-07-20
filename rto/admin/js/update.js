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
            // $("input[name='fullname']").val(data.fullname);
            // $("#name").val(data.name);
            // $("#email").val(data.email);
            // $("#username").val(data.username);
            // $("#dob").val(data.dob);
            location.href = "update_reg.php";
        }
    });
    
});