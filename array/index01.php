<?php
$person = [
    'name' => 'KPT',
    'age' => 2,
    4 => 123456,
    true
];
$b = array(
    'key1'=>1, 
    'key2'=>2,
    $person
);
// print_r($b);
// echo $b[0][4];

// $subject = array('PHP','NodeJS',$b);

// echo $subject[2][0][4];

// var_dump($person);
// // echo "<pre>";
// print_r($person);
// // echo $person['name'];
// print_r($subject[1]);


$a = [1,2,3,5,88,3,1,4,5,3,5];
foreach($a as $number) {
    echo $number.'<br>';
}
foreach($a as $index => $number) {
    echo $index. ' => ' .$number.'<br>';
}
echo '-------<br>';

// for($i=0; $i < count($a); $i++){
//     echo $a[$i]."<br>";
// }
// // i=0
// $number = 1;
// // i = 1;
// $number = 2;
// echo count($a);
// echo $a[0];
// echo $a[1];
// echo $a[2];



?>