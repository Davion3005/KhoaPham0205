<?php
session_start();
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
if($email=='admin@gmail.com' && $password=='111111'){
    header('location: home.php');
}
else{
    $_SESSION['error'] = "Login fail!";
    header('location: index.php');
}

?>