<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<?php
if(isset($_POST['txtSubmit'])){
    // print_r($_POST['txtEmail']);
    // login success 
    // admin@gmail.com 
    // 111111
    header('location: http://localhost/php0205/form/session/get-session.php');
}
?>
<body>
    <form method="post">
        <input type="email" name="txtEmail" placeholder="Enter email">
        <br>
        <input type="password" name="txtPassword" placeholder="Enter password">
        <br>
        <button name="txtSubmit" type="submit">Login</button>

    </form>
</body>
</html>