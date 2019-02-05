<?php

// LESSON 4
// pithagor table

// function result($res) {
//     $len = strlen(strval($res));
//     if ($len == 1) {
//         $result = '   ' . $res;
//     }
//     elseif ($len == 2) {
//         $result = '  ' . $res;
//     }
//     elseif ($len == 3) {
//         $result = ' ' . $res;
//     }
//     return $result;
// }

// $list = range(2, 9);

function space_design($num, $digits) {
    $len = strlen(strval($num));
    $spaces = str_repeat(' ', $digits - $len);
    return $spaces . $num;
}

function getPifagor ($i) {
    for ($j = 1; $j <= 20; $j++) {
        $res = $i * $j; 
        print space_design($res, 4);
        if ($j == 1) print ' |';
    }
    print PHP_EOL;
    if ($i == 1) print " " . str_repeat('-', 4*20) . PHP_EOL;
}
// print(' ');
// for ($r=2; $r <= 20 ; $r++) { 
//     print space_design($r, 4);
// }
// print PHP_EOL;
for ($i = 1; $i <= 20; $i++) {
    
    
}