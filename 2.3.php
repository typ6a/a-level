<?php

echo "Give it to me!\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

switch (true) {
    case ($number > 100):
        echo "Thanks, man!";
        break;
    case (($number > 10) && ($number < 100)):
        echo "OK :(";
        break;
    case ($number > 1000):
        echo "\n!!!!WOOOOWWWW!!!\n";
        break;
    default:
        echo "WHAAAAT????";
        break;
}

// if ($number > 100) {
//     echo "Thanks, man!";
// } elseif (($number > 10) && ($number < 100)) {
//     echo "OK :(";
// } else echo "WHAAAAT????";

// echo "\n";
// if ($number > 1000) echo "\n!!!!WOOOOWWWW!!!\n";