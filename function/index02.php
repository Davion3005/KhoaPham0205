<?php
/**
 * Viet funtion thuc hien cac chuc nang sau:
 * - min: 0, max: 20;
 * - in ra day cac so chia het cho 2
 * - in ra day cac so ko chia het cho 2
 * - in ra day cac so chia het cho 4 du 3
 */

function inSoChan(){
    $min = 0;
    $max = 20;
    $kq = '';
    for($i = $min; $i<=$max; $i++)
    if($i%2 == 0) $kq .= ' '.$i;
    return $kq;
}
function inSoLe(){
    $min = 0;
    $max = 20;
    $kq = '';
    for($i = $min; $i<=$max; $i++)
    if($i%2 == 1) $kq .= ' '.$i;
    return $kq;
}
function inSo($soChia, $soDu){
    $min = 0;
    $max = 20;
    $kq = '';
    for($i = $min; $i<=$max; $i++)
    if($i%$soChia == $soDu) $kq .= ' '.$i;
    return $kq;
}
echo inSo(4,3);
// echo inSoChan();






?>