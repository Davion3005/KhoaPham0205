<?php

/**
 * print number
 * @param integer $a
 * @return integer
 */
function inSo(int $a, int $b=0): int{
    $a+=$b; // a = a+b
    return $a;
}
echo inSo(2, 5);

// echo inSo();

// $kq = inSo() + 2; 
// echo $kq;  // 3

// echo number_format(2222);

?>
