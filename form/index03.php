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
        <span class="message_txtSoa"></span>
        <br>
        <select name="pheptinh">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="text" placeholder="Enter b" class="txtSob"
        name="b">
        <span class="message_txtSob"></span>
        <br>
        <button type="button" name="btnSubmit">=</button>
        <br>
        <input placeholder="KQ" disabled type="text" class="txtKQ">
    </form>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
        // $ = jQuery
        $(document).ready(function(){
            jQuery('.txtSoa').keyup(function(){
                var a = jQuery('.txtSoa').val()// get value
                if(isNaN(a)){
                    $('.message_txtSoa').html('Error number a!');
                    $('button').attr('disabled','disabled')
                }
                else {
                    $('.message_txtSoa').html('')
                    $('button').removeAttr('disabled')
                }
            })
            jQuery('.txtSob').keyup(function(){
                var b = jQuery('.txtSob').val()// get value
                if(isNaN(b)){
                    $('.message_txtSob').html('Error number b!');
                    $('button').attr('disabled','disabled')
                }
                else{
                    $('.message_txtSob').html('')
                    $('button').removeAttr('disabled')
                }
            })
            $('button').click(function(){
                var a = jQuery('.txtSoa').val();
                var b = jQuery('.txtSob').val();
                var pt = $('select').val();
                if(a==''){
                    jQuery('.txtSoa').focus();
                    return
                }
                else if(b==''){
                    jQuery('.txtSob').focus()
                    return;
                }
                else {
                    if(pt=='+')
                        $('.txtKQ').val(parseFloat(a)+parseFloat(b))
                    else if(pt=='-')
                        $('.txtKQ').val(parseFloat(a)-parseFloat(b))
                    else if(pt=='*')
                        $('.txtKQ').val(parseFloat(a)*parseFloat(b))
                    else if(pt=='/' && b!=0){
                        var kq = parseFloat(a)/parseFloat(b)
                        $('.txtKQ').val(kq)
                    }
                    else if(pt=='/' && b==0){
                        Query('.txtSob').focus()
                        return;
                    }
                    else{
                        $('.txtKQ').val('Error!');
                        return;
                    }
                }
            })
           
        })
        
    </script>
</body>
</html>