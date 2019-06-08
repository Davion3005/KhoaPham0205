<?php
require 'DBConnect.php';

$connect = new DBConnect();

// $sql = "DELETE FROM users WHERE username = ? OR id = ?";
// $options = ['admin0103', 24];
// $result = $connect->executeQuery($sql, $options);

$sql = "SELECT id, username, email FROM users WHERE id IN (?,?,?,?)";
$result = $connect->getMoreRows($sql, [1,2,4,8]);
print_r($result);

?>