<?php

// function my_cmp($a, $b) {
//     if ($a > $b)
//         return 1;
//     if ($a == $b)
//         return 0;
//     else
//         return -1;
// }

$arr = ["M", "a", "r", "Y", "S", "m", "i", "T", "h"];

function my_case($a) {
    return strtolower($a);
}

$new_arr = array_map("my_case", $arr);
print_r($new_arr);