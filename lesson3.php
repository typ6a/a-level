<?php

// function square($x) {
//     return $x*$x;
// }

$arr = range(1, 10);
// print_r(array_map('square', $arr));
print_r(array_map(function ($x){return $x*$x;}, range(1, 10)));