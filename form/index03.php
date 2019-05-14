<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<style>
select, button{
    width: 100px
}
input{
    width: 95px
}
button{
    background-color: green;
    color: #fff
}
</style>
<body>
    <form method="GET">
        <input type="text" placeholder="Enter a" class="txtSoa"
        name="a">
        <div class="message_txtSoa"></div>
        <br>
        <select name="pheptinh">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="text" placeholder="Enter b" name="b">
        <br>
        <button type="button" name="btnSubmit">=</button>
        <br>
        <input placeholder="KQ" disabled type="text">
    </form>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
        // $ = jQuery
        $(document).ready(function(){
            jQuery('.txtSoa').keyup(function(){
                var a = jQuery('.txtSoa').val()// get value
                if(isNaN(a)){
                    $('.message_txtSoa').html('Error number a!');
                }
                else $('.message_txtSoa').html('')

                $('button').click(function(){
                    // alert(a)
                    jQuery('.txtSoa').val(5) // set value
                })
            })
           
        })
        
    </script>
</body>
</html>