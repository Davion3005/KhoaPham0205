<?php

$dsn = 'mysql:dbname=php0205_shopping;host=localhost';
// $username = 'admin';
// $password = '123456';
$username = 'root';
$password = '';

try{
    $connection = new PDO($dsn, $username, $password);
    $connection->exec('SET NAMES utf8');
    // echo 'DB connected!';
}
catch(PDOException $e){
    echo $e->getMessage();
    die;
}

// $sql = "DELETE FROM users WHERE id=23";
// $result = $connection->exec($sql);

// $user = 'admin0104';
// $user_pass = md5('123456');
// $fullname = 'Nguyễn Admin'; //Nguyá»…n Admin
// $email = "admin0104@gmail.com";
// // $sql = "INSERT INTO users(
// //             username,
// //             password,
// //             fullname,
// //             email
// //         )
// //         VALUES ( ?, ?, ?, ?)";
// $stmt = $connection->prepare($sql);
// $result = $stmt->execute([$user,$user_pass,$fullname,$email]);

// $user = 'admin0104';
// $fullname = "Nguyễn Văn A"; // Nguyễn Văn A

// $sql = "UPDATE users SET fullname = ?
//         WHERE username = ? ";
// $stmt = $connection->prepare($sql);
// $result = $stmt->execute([$fullname, $user]);

$sql = "SELECT * FROM users WHERE id<=10";
$stmt = $connection->prepare($sql);
$result = $stmt->execute();
if($result){
    // get data
    $users = $stmt->fetchAll(); // fetch()
    print_r($users);
}
else{
    die('Error query!');
}
?>