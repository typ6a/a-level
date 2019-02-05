<?php 

// echo 'asdzxc';
// $file = fopen('fread/file.txt', 'r');
// // $content = fgets($file);
// // fclose($file);
// // echo $content;
// while (!feof($file)) {
//     $content = fgets($file);
//     echo $content . "\n";
// }




// $sum = function($x, $y){
//     return (int)$x + (int)$y;
// };
// $sub = function($m, $n){
//     return (int)$m - (int)$n;
// };

// function operation($first, $second, $op) {
//     $result = $op($first, $second);
//     return $result;
// }
// $handle = fopen ("php://stdin","r");
// echo "enter a:\n";
// $a = fgets ($handle);
// echo "enter b:\n";
// $b = fgets ($handle);

// echo operation($a, $b, $sub);




// echo "What is the weather?\n";
// $handle = fopen ("php://stdin","r");
// $weather = fgets ($handle);
// $weather = str_replace("\r\n", "", $weather);
// switch ($weather) {
//     case "rain":
//         echo "Take the umbrella!";
//         break;
//     case "sun":
//         echo "Take a cap";
//         break;
//     case "snow":
//         echo "Take a jaked!";
//         break;
//     default:
//         echo "Look outside";
//         break;
// }


// $arr = ['z', 'x', ['aa', 'bb']];
// print_r($arr);
// echo PHP_EOL . $arr[2][0] . PHP_EOL;

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

// function space_design($num, $digits) {
//     $len = strlen(strval($num));
//     $spaces = str_repeat(' ', $digits - $len);
//     return $spaces . $num;
// }
// // print(' ');
// // for ($r=2; $r <= 20 ; $r++) { 
// //     print space_design($r, 4);
// // }
// // print PHP_EOL;
// for ($i = 1; $i <= 20; $i++) {
//     for ($j = 1; $j <= 20; $j++) {
//         $res = $i * $j; 

//         // print($res > 9) ? $res . " " : $res . "  ";

//         // print(result($res));

//         // $len = strlen($res);
//         // $spaces = str_repeat(' ', 4 - $len);
//         // print $res . $spaces;

//         print space_design($res, 4);
//         if ($j == 1) print ' |';
//     }
//     print PHP_EOL;
//     if ($i == 1) print " " . str_repeat('-', 4*20) . PHP_EOL;
// }




$arr[4] = 1;
$arr[8] = 2;
print_r(array_values($arr));