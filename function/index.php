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

/**
 * Viet funtion thuc hien cac chuc nang sau:
 * - min: 0, max: 20;
 * - in ra day cac so chia het cho 2
 * - in ra day cac so ko chia het cho 2
 * - in ra day cac so chia het cho 4 du 3
 */

?>
