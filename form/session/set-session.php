<?php
session_start();
$_SESSION['user'] = md5('1212121');
$_SESSION['user02'] = md5('admin02');

echo 'Session created!';

?>