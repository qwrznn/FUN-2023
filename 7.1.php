<?php
function sum_row($i)
{
    return $i * $i;
}

$a = array(1, 2, 3, 4, 5);
$c = array_sum(array_map("sum_row", $a));
print_r($c);

// через цикл
// $a = [1, 2, 3, 4, 5];
// $b = array_map(function ($n) {
//     for($i = 1; $i < 5; $i++){
//         return $n * $n."\n";
//     } 
// }, $a);
// $c = array_sum($b);
// echo $c;