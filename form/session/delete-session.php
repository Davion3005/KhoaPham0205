<?php
session_start();
// session_destroy(); // remove all

unset($_SESSION['user02']); // remove 1 session
?>