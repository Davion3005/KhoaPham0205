<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

setcookie('user',md5('admin'), time() + 120); // 2mins  time: >0

echo "Cookie created!";

// echo date_default_timezone_get();
// $time = getdate();
// print_r($time);

?>