<?php
$arr = [1,2,3,4,3,2];
function hillClimb($arr, $idx) {
    if($arr[$idx] < $arr[$idx - 1]) {
        return '-1';
    }
    elseif ($arr[$idx] < $arr[$idx + 1]) {
        return '+1';
    }
    return '0';
}

function findPath($arr, $idx) {
    $path = [];
    // $pathLenght = ;
    if (hillClimb($arr, $idx) == '+1') {
        for ($i=1; $i < count($arr)-$idx-1; $i++) { 
            $path[] = $i;
        }
    }
    elseif (hillClimb($arr, $idx) == '-1') {
        for ($i=count($arr)-1; $i >= $idx; $i--) {
            $path[] = $i;
        }
    }
    return $path;
}

// function findPath($arr, $idx) {
//     $path = [];
//     $i = count($arr);
//     while ($i != 0) {
//         $path[] = $arr[$i + hillClimb($arr, $i)];
//         $i--;
//     }
//     return $path;
// }

print_r(findPath($arr, 5));