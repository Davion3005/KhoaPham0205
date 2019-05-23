<?php
// function sum(array $a): int{
//     return array_sum($a);
// }
// echo sum([2,3,4.5, 'x']);

// function sum(int ...$number): array{
//     $count = count($number);
//     $sum = array_sum($number);
//     return [
//         'count'=>$count,
//         'sum'=>$sum
//     ];
// }
// echo 'Tong = '. sum(2,2,4,6)['sum'];
// echo 'So pt = '. sum(2,2,4,6)['count'];

function sum(int &$count=0, $a, int ...$number): float{
    $count = count($number);
    $sum = array_sum($number) + $a;
    $a = 10;
    return $sum;
}
$count = 0;
$a = 1;
sum($count, $a, 2,3,4,5);
echo $count;
echo $a;
?>