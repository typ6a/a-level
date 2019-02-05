<?php
echo "Give me the mark!\n";
$handle = fopen ("php://stdin","r");
$mark = fgets($handle);

if ($mark == 2) {
    echo "I am better!!";
}
elseif ($mark == 3) {
    echo "OK :(";
}
elseif ($mark == 4 ) {
    echo "I am good :)";
}
elseif ($mark == 5) {
    echo "YeeeeWhaaaa!!!!";
}
else;



// switch ($mark) {
//     case 2:
//         echo "I am better!!";
//         break;
//     case 3:
//         echo "OK :(";
//         break;
//     case 4:
//         echo "I am good :)";
//         break;
//     case 5:
//         echo "YeeeeWhaaaa!!!!";
//         break;
// } 

echo "\n";