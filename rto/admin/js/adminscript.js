  // select data in active
  $(document).ready(function() {
    $('ul li a').click(function() {
        $('li a').removeClass("menu_select");
        $(this).addClass("menu_select");
    });
});

// hide and show data  multidic hide and show in
var $contents = $('.table');
$contents.slice(1).hide();
$('#tab1show').show();
$('.show').click(function() {
  var $target = $('#' + this.id + 'show').show();
  $contents.not($target).hide();
});


//  accept user
$(document).ready(function() {
    $('.accept').click(function() {
        if (confirm("Registerd Status Request Accept")) {
            console.log('hello');
            location.href = "accept_user.php?id=" + $(this).attr('id');
        }
    });
});

//  reject user
$(document).ready(function() {
    $('.reject').click(function() {
        if (confirm("Registerd Status Request Reject")) {
            console.log('hello');
            location.href = "reject_user.php?id=" + $(this).attr('id');
        }
    });
});

// delete Contact Us 
$('.delete').click(function() {
    if (confirm("User Message delete")) {
        location.href = "delete_user.php?id=" + $(this).attr('id');
    }
});


// update user Registerd
$('.update').click(function () {
    location.href = "./update_reg.php?id=" + $(this).attr('id');
})
