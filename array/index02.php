<?php
$person = [
    'name' => 'KPT',
    'age' => 2,
    4 => 123456,
    true
];
if(array_key_exists('age1',$person)) echo 'Tim thay';
else echo 'Ko tim thay';


// isset: kiem tra su ton tai
// if(isset($person['age1'])) echo 'Tim thay';
// else echo 'Ko tim thay';

// $flag = false;
// foreach($person as $key => $item) {
//     if($key === 'age'){
//         $flag = true;
//     }
// }
// if($flag) echo 'Tim thay';
// else echo 'Ko tim thay';


// if(in_array(3,$person,3))
// echo 'Tim thay';
// else echo 'Ko tim thay';

// true : ===
// if(array_search(3,$person,true))
//     echo 'Tim thay';
// else echo 'Ko tim thay';

// $flag = false;
// foreach($person as $item) {
//     if($item === 3){
//         $flag = true;
//     }
// }
// if($flag) echo 'Tim thay';
// else echo 'Ko tim thay';


// 0 false '' null 

// if (null) echo 'Dung';
// else echo 'sai';