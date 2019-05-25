<?php
// $str = 'Hôm nay Nam đi học';
// $arrStr = explode(' ',$str);

// $newStr = implode('-',$arrStr);
// echo $newStr;
// echo strlen('Đi học'); // 9 

// $str='qwertyuiopasdfghjklzxcvbnm0987654321';
// echo $str[0];
// echo rand(0,99);

/**
 * function random string voi độ dài do user truyền vào
 */
function randomString(int $length = 40){
    $initString='qwertyuiopasdfghjklzxcvbnm0987654321';
    $str = '';
    for($i=1; $i <= $length; $i++){
        $position = rand(0, strlen($initString)-1);
        // $str .= $initString[$position];
        $str .= substr($initString,$position,1);
    }
    return $str;
}
// echo randomString(30);
//x3bdi9dvkqyb8hdjsnjvvzwzfxwyw92omdkkw6nk
//1vtnq08vv7xvhp9gzakbtvsdcyvc0xilupg5kzq4
//z86op608zga0n5lpa8bjg898lajwwn
//u69ifjdbcgjtksmw05668ws19jn18g

?>