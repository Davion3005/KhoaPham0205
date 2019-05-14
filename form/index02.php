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
<?php
// print_r($_GET);
if(isset($_GET['btnSubmit'])){
    $a = $_GET['a'];
    $pt = $_GET['pheptinh'];
    $b = $_GET['b'];
    if(!is_numeric($a) || !is_numeric($b)){
        echo 'Invalid number!';
        return;
    }
    if($pt=='+') $kq = $a+$b;
    elseif($pt=='-') $kq = $a-$b;
    elseif($pt=='*') $kq = $a*$b;
    elseif($pt=='/' & $b!=0) $kq = $a/$b;
    else $kq = 'Error!';
    echo $kq;
}

?>
<body>
    <form method="GET">
        <input type="text" placeholder="Enter a" name="a">
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
        <button type="submit" name="btnSubmit">=</button>
        <br>
        <input type="text" placeholder="KQ">
    </form>
</body>
</html>