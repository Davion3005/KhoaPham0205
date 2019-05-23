<?php
/**
 * Cho day cac so tu min=0 -> max=100;
 * Đếm xem trong dãy số trên có bao nhiêu số nguyên tố,
 * In ra dãy các số ngtố đó.
 * 2 3 5 7 11 13 17 ...
 */
 
function checkSNT(int $number): bool{
    if($number == 0 || $number == 1)
        return false;
    for($i=2; $i <= sqrt($number); $i++){
        if($number%$i==0) return false;
    }
    return true;
}

// $c = checkSNT(9);
// var_dump($c);


function inSNT(int $min=0, int $max = 100){
    $kq = [];
    for( ; ; ){
        if($min<=$max){
            if(checkSNT($min)){
                $kq[] = $min;
            }
        }
        $min++;
        if($min==$max) return $kq;
    }
}
$data = inSNT();
print_r($data);


?>