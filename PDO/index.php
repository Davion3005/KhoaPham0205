<?php

$dsn = 'mysql:dbname=php0205_shopping;host=localhost';
// $username = 'admin';
// $password = '123456';
$username = 'root';
$password = '';

try{
    $connection = new PDO($dsn, $username, $password);
    // echo 'DB connected!';
}
catch(PDOException $e){
    echo $e->getMessage();
    die;
}

// $sql = "DELETE FROM users WHERE id=23";
// $result = $connection->exec($sql);

$user = 'admin0103';
$user_pass = md5('123456');
$fullname = 'Admin';
$email = "admin0103@gmail.com";
$sql = "INSERT INTO users(
            username,
            password,
            fullname,
            email
        )
        VALUES ( ?, ?, ?, ?)";
$stmt = $connection->prepare($sql);
$result = $stmt->execute([$user,$user_pass,$fullname,$email]);

var_dump($result);
?>