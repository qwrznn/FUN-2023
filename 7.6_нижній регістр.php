<?php

$arr = ["M", "a", "r", "Y", "S", "m", "i", "T", "h"];

function my_case($a) {
    return strtolower($a);
}

$new_arr = array_map("my_case", $arr);
print_r($new_arr);
