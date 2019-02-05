<?php

$handle = fopen ("php://stdin","r");
echo "enter fizz:\n";
$fizz = fgets ($handle);
echo "enter buzz:\n";
$buzz = fgets ($handle);
echo "enter number:\n";
$number = fgets ($handle);
echo "----------------\n";
for ($i = 1; $i <= $number ; $i++) { 
    if (!($i % (int)$fizz) && !($i % (int)$buzz)) {
        echo "FB";
    }
    elseif (!($i % (int)$fizz)) {
        echo "F";
    }
    elseif (!($i % (int)$buzz)) {
        echo "B";
    }
    else {
        echo $i;
    }
    echo " ";
}