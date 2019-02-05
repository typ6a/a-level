<?php

$arr = [
    [0,0,1,0],
    [1,0,0,0],
    [1,1,1,0],
    [1,1,1,0]
];

$pos = [0,0];
$end = [3,3];

$direction = 'down';

start($arr, $pos, $direction, $end);

function start($arr, $pos, $direction, $end) {
    while ($pos != $end) {
        changeDirection($arr, $pos, $direction);
        print_r("\n" . $direction);
        print_r($arr);
        move($arr, $pos, $direction);
    }

        print_r($pos);
        print_r($end);

    


    
}

function getMoves($arr, $pos) {
    $x = $pos[1];
    $y = $pos[0];
    $around = [];
    $around['up']    = isset($arr[$x][$y - 1]) ? ['x' => $x, 'y' => $y - 1, 'val' => $arr[$y - 1][$x]] : ['val' => 'wall'];
    $around['down']  = isset($arr[$x][$y + 1]) ? ['x' => $x, 'y' => $y + 1, 'val' => $arr[$y + 1][$x]] : ['val' => 'wall'];
    $around['left']  = isset($arr[$x - 1][$y]) ? ['x' => $x - 1, 'y' => $y, 'val' => $arr[$y][$x - 1]] : ['val' => 'wall'];
    $around['right'] = isset($arr[$x + 1][$y]) ? ['x' => $x + 1, 'y' => $y, 'val' => $arr[$y][$x + 1]] : ['val' => 'wall'];
    
    return $around;
}

function changeDirection($arr, $pos, &$direction) {
    //     turn($direction);
    // print_r(getRightHand($arr, $pos, $direction));
    // turn($direction);
    // print_r(getRightHand($arr, $pos, $direction));
    
    // while ((getRightHand($arr, $pos, $direction)['val'] == 'wall') || (getRightHand($arr, $pos, $direction)['val'] == 1)) {
    // print_r(getRightHand($arr, $pos, $direction)['val'] . "\n");
    while ((trim(getRightHand($arr, $pos, $direction)['val']) == 'wall') || (getRightHand($arr, $pos, $direction)['val'] == 1) || (getRightHand($arr, $pos, $direction)['val'] == 2))  {
        turn($direction);
    }
    turn($direction);
    print_r($direction);
    return $direction;
}

function getRightHand($arr, $pos, $direction) {
    $around = getMoves($arr, $pos);
    if ($direction == 'down') {
        $rightHand = $around['left'];
    }
    if ($direction == 'up') {
        $rightHand = $around['right'];
    }
    if ($direction == 'left') {
        $rightHand = $around['up'];
    }
    if ($direction == 'right') {
        $rightHand = $around['down'];
    }
    return $rightHand;
}


// function selectDirection($arr, $pos) {
//     $directions =['up', 'down', 'left', 'right'];
//         // print_r(getRightHand($arr, $pos, $directions[0]));
//     for ($i=0; $i < count($directions); $i++) { 
//         $rightHand =getRightHand($arr, $pos, $directions[$i]);
//         // print_r($rightHand);
//         if ($rightHand['val'] == 0) {

//             return turn($directions[$i]);
//         }
//     }
// }

function move(&$arr, &$pos, $direction) {
    // $direction = changeDirection($arr, $pos, $direction);
    // print_r($direction . 'after move');
    $nextCoordinates = [];
    
    if ($direction == 'up') {
        $nextCoordinates[0] = $pos[0] - 1;
        $nextCoordinates[1] = $pos[1];
    }
    if ($direction == 'down') {
        $nextCoordinates[0] = $pos[0] + 1;
        $nextCoordinates[1] = $pos[1];
    }
    if ($direction == 'left') {
        $nextCoordinates[0] = $pos[0];
        $nextCoordinates[1] = $pos[1] - 1;
    }
    if ($direction == 'right') {
        $nextCoordinates[0] = $pos[0];
        $nextCoordinates[1] = $pos[1] + 1;
    }
    $nextCoordinates['val'] = $arr[$nextCoordinates[0]][$nextCoordinates[1]];
    $arr[$pos[0]][$pos[1]] = 2;
    $pos[0] = $nextCoordinates[0];
    $pos[1] = $nextCoordinates[1];
    return $nextCoordinates;
}


    // foreach ($directions as $direction) {
    //     foreach (getRightHand($arr, $pos, $direction) as $rightHand) {
    //         if ($rightHand[$direction]['val'] == 0) {
    //             return $direction;
    //         }
    //     }
    // }



function turn(&$direction) {
    if ($direction == 'up') {
        return $direction = 'right';
    }
    elseif ($direction == 'down') {
        return $direction = 'left';
    }
    elseif ($direction == 'left') {
        return $direction = 'up';
    }
    elseif ($direction == 'right') {
        return $direction = 'down';
    }
    return 'wrong direction!';

}


// // print_r(nextCoordinates([0, 0], 'down', $start));
// print_r(selectDirection($arr, $start, $direction));


