<?php
session_start();

// get token from SESSION to get userID 
// request to db get user info
if(!isset($_SESSION['user']) || $_SESSION['user'] !== md5(md5(121313))) {
    if(!isset($_COOKIE['user']) || $_COOKIE['user'] !== md5(md5(121313))){
        $_SESSION['error'] = "Please login!";
        header('Location: index.php');
        return false;
    }
    else{
        //C1: 
        // $_SESSION['user'] = $_COOKIE['user'];
        //C2: add time cookie
        setcookie('user', $_COOKIE['user'], time() + 120);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Hello, Admin</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>