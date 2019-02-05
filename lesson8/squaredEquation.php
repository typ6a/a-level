<?php



function inputKeys() {
    $keys = ['a' => 0 , 'b' => 0, 'c' => 0];
    $handle = fopen ("php://stdin","r");
    echo "enter a:\n";
    $keys['a'] = fgets ($handle);
    echo "enter b:\n";
    $keys['b'] = fgets ($handle);
    echo "enter c:\n";
    $keys['c'] = fgets ($handle);
    return $keys;
}

function roots($keys) {
    $d = pow(floatval($keys['b']), 2) - 4 * floatval($keys['a']) * floatval($keys['c']);
    if ($d < 0) {
        return 'no roots';
    }
    $xFirst = ((-1 * floatval($keys['b'])) + sqrt($d)) / (2 * $keys['a']);
    $xSecond = ((-1 * floatval($keys['b'])) - sqrt($d)) / (2 * $keys['a']);
    if ($xFirst == $xSecond) {
        return $result = $xFirst;
    }
    return $result = [$xFirst, $xSecond];
}

$keys = inputKeys();
print_r(roots($keys));