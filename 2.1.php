<?php

$handle = fopen ("php://stdin","r");
echo "enter a:\n";
$a = fgets ($handle);
echo "enter b:\n";
$b = fgets ($handle);
echo "----------------\n";
if ($a > $b) {
    echo "a > b";
}
elseif ($a < $b) {
    echo "a < b";
}
else {
    echo "a = b";
}