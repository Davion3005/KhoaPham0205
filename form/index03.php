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
        <input type="text" placeholder="Enter a" 
        name="a">
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
        <input placeholder="KQ" disabled type="text">
    </form>
</body>
</html>