<?php
session_start();
if(!isset($_SESSION)) session_start();
echo "<div>";
echo $_SESSION['user'];
echo "<br>";
echo $_SESSION['user02'];


?>