<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
    <!-- <form> -->
        <input type="text" name="name" id="name">
        <input type="email" name="email" id="email">
        <button class="button">Submit</button>

        <p class="erro" style="display: none; color:red" ></p>
        <p class="succ" style="display: none; color:green" ></p>
    <!-- </form> -->


    <table style="display: none" class="tbl">
        
    </table>
</body>

<script>
    $(document).ready(function(){

        $(document).on('click','.button', function(){
            $.ajax({
                "url":"demo.php",
                "type":"json",
                "method":"post",
                "data": {                                  
                    "my_name": $('input[name="name"]').val(),
                    "email_add": $('input[name="email"]').val()                
                }, 
                success: function(response){
                    console.log(response);
                    var obj = JSON.parse(response);
                    console.log(obj);
                    if(obj.status === true) {
                        $(".succ").show();
                        $(".erro").hide();
                        $(".succ").text(obj.msg);
                    } else {
                        $(".erro").show();
                        $(".succ").hide();
                        $(".erro").text(obj.msg);
                    }
                        
                }   
            })     

            $.ajax({
                "url":"fetch.php",
                "type":"json",
                "method":"get",
                success: function(response){
                    console.log(response);
                    var tbl = $('.tbl');
                    var obj = JSON.parse(response);
                    console.log(obj);
                    obj.each(index, data)
                    {
                        var tr = `<tr class="tr">
                            <td class="name"> ${index.name}</td>
                            <td class="email">${index.email}</td>
                        </tr>`
                    }

                }   
            })     

        });
    })
</script>
</html>