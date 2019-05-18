<?php
session_start();
$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : null;
$password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : null;
if($email == null || $password == null){
    $_SESSION['error'] = "Please login!";
    header('location: index.php');
    return;
}

// request db to get user info
if($email=='admin@gmail.com' && $password=='111111'){
    $userId = 121313; // get from db
    $_SESSION['user'] = md5(md5($userId));
    header('location: home.php');
}
else{
    $_SESSION['error'] = "Login fail!";
    header('location: index.php');
}

?>