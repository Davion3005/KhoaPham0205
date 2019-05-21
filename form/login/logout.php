<?php
session_start();

// get token from SESSION to get userID 
// request to db get user info
if(!isset($_SESSION['user']) || $_SESSION['user'] !== md5(md5(121313))) {
    $_SESSION['error'] = "Please login!";
    header('Location: index.php');
    return false;
}
session_destroy(); // delete session
setcookie('user', null, 0); // delete cookie
header('Location: index.php');
?>