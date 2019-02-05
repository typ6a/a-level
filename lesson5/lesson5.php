<?php

//lesson5

// function arr_switch($arr, $i, $j) {
//   $c = $arr[$i];
//   $arr[$i] = $arr[$j];
//   $arr[$j] = $c;

//   return $arr;
// }

// $arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0, 10, 13, 12, 15, 14];
// print_r($arr);
// $len = count($arr);

// for ($i = 1; $i < $len; $i++) { 
//   for ($j = 0; $j < $len - $i; $j++) { 
//     if ($arr[$j] > $arr[$j + 1]) $arr = arr_switch($arr, $j, $j + 1);
//   }
// }

// print_r($arr);



// $a = range(1, 10);
// foreach ($a as $key => $value) {
//     echo 'key   :' . $key . PHP_EOL;
//     echo 'value :' . $value . PHP_EOL;
// }






// $arr = [];
function generate(&$arr) {
  $arr = array_merge(array_fill(0, 5, 'X'), array_fill(5, 4, '0'));
  shuffle($arr);
  // return $arr;
}

function field($arr) {
  for ($i=0; $i < 9; $i++) { 
    print($arr[$i]?'X':'O');
    print " ";
    if(in_array($i, [2, 5, 8])) print(PHP_EOL);
  }
  return true;
}

function checkH($arr){
  foreach ([0,3,6] as $first) {
    if($arr[$first]){
      if($arr[$first + 1]){
        if($arr[$first + 2]){
          print "We have found Horizontal!";
          print PHP_EOL . $first/3 + 1 . PHP_EOL;
        }
      }
    }
  }
}

function checkV($arr){
    foreach ([0,1,2] as $first) {
        if($arr[$first]){
            if($arr[$first + 3]){
                if($arr[$first + 6]){
                    print "We have found Vertical!";
                    print PHP_EOL . $first + 1 . PHP_EOL;
                }
            }
        }
    }
}

function checkD($arr){

    if($arr[0]){
        if($arr[4]){
            if($arr[8]){
                print "We have found Diagonal!";
                print PHP_EOL . 'left up to right down' . PHP_EOL;
            }
        }
    }
    else if ($arr[2]) {
        if($arr[4]){
            if($arr[6]){
                print "We have found Diagonal!";
                print PHP_EOL . 'left down to right up' . PHP_EOL;
            }
        }
    }
}

function check($arr) {
    checkH($arr);
    checkV($arr);
    checkD($arr);
}

generate($arr);
print_r($arr);
field($arr);
check($arr);






// function numbers() {
//     $handle = fopen ("php://stdin","r");
//     echo "enter first number:\n";
//     $first = fgets ($handle);
//     echo "enter second number:\n";
//     $second = fgets ($handle);
//     echo "enter third number:\n";
//     $third = fgets ($handle);
//     if ($first == $second) {
//         return "first = second";
//     }
//     else if ($first == $third) {
//         return "first = third";
//     }
//     else if ($second == $third) {
//         return "second = third";
//     }
//     else {
//         return "All are different!";
//     }
// }

// // print_r(numbers());

// function isDivision() {
//     $handle = fopen ("php://stdin","r");
//     echo "enter a number:\n";
//     $number = fgets ($handle);
//     do {
//         $arr = array_map('intval', str_split(trim($number)));
//         $number =  array_sum($arr);
//     }
//     while ($number >= 10);
//     return $number;
// }
// // print_r(isDivision());

// function simpleFractionsSum() {
//     $handle = fopen ("php://stdin","r");
//     echo "enter first number:\n";
//     $first = fgets ($handle);
//     echo "enter second number:\n";
//     $second = fgets ($handle);
//     echo "\n";
    
//     $firstNumerator = explode('/', $first)[0];
//     $firstDenominator = explode('/', $first)[1];
//     $secondNumerator = explode('/', $second)[0];
//     $secondDenominator = explode('/', $second)[1];
    
//     $sumNumerator = ((int)$firstNumerator * (int)$secondDenominator) + ((int)$secondNumerator * (int)$firstDenominator);
//     $sumDenonimator = (int)$firstDenominator * (int)$secondDenominator;

//     return $sumNumerator . '/' . $sumDenonimator;
// }
// print_r(simpleFractionsSum());
