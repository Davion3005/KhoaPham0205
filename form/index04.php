<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<?php
print_r($_POST['txtEmail']);

?>
<body>
    <form method="post">
        <input type="email" name="txtEmail" placeholder="Enter email">
        <br>
        <input type="password" name="txtPassword" placeholder="Enter password">
        <br>
        <button type="submit">Login</button>

    </form>
</body>
</html>