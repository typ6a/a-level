<?php

$inputFilePath  = 'fizzBuzzData.txt';
$outputFilePath = 'fizzBuzzRes.txt';

function inputFizz() {
    $handle = fopen ("php://stdin","r");
    echo "enter fizz:\n";
    $fizz = fgets ($handle);
    return $fizz;
}

function inputBuzz() {
    $handle = fopen ("php://stdin","r");
    echo "enter buzz:\n";
    $buzz = fgets ($handle);
    return $buzz;
}

function inputNumber() {
    $handle = fopen ("php://stdin","r");
    echo "enter number:\n";
    $number = fgets ($handle);
    return $number;
}

function getFizzFromFile($file) {
    $handle = $file;
    $fizz = fgets ($handle);
    return $fizz;
}

function getBuzzFromFile($file) {
    $handle = $file;
    $buzz = fgets ($handle);
    return $buzz;
}

function getNumberFromFile($file) {
    $handle = $file;
    $number = fgets ($handle);
    return $number;
}

function output($fizz, $buzz, $number) {
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
}


function writeToFile($file, $fizz, $buzz, $number){
    for ($i = 1; $i <= $number ; $i++) { 
        if (!($i % (int)$fizz) && !($i % (int)$buzz)) {
            fputs($file, "FB");
        }
        elseif (!($i % (int)$fizz)) {
            fputs($file, "F");
        }
        elseif (!($i % (int)$buzz)) {
            fputs($file, "B");
        }
        else {
            fputs($file, $i);
        }
        fputs($file, ' ');
    }
}

// function FBWrite($arrNumber, $fizz, $buzz) {
//         if (!($arrNumber % (int)$fizz) && !($arrNumber % (int)$buzz)) {
//             $arrNumber = "FB";
//         }
//         elseif (!($arrNumber % (int)$fizz)) {
//             $arrNumber = "F";
//         }
//         elseif (!($arrNumber % (int)$buzz)) {
//             $arrNumber = "B";
//         }
//         else {
//             $arrNumber = $arrNumber;
//         }
//         return $arrNumber;
// }

function getArrFromFile($file) {
        $arr = [];
        $lines = file($file);
    // while (!feof($file)) {
    //     $handle = $file;
    //     $arrNum = fgets ($handle);
    //     array_push($arr, intval($arrNum));
    // }
    return $lines;
}

function arrayMapOutput($number, $fizz, $buzz) {
    $arr = range(1, $number);
    $newArr = array_map(
        function ($arrNumber) use ($fizz, $buzz) {
            if (!($arrNumber % (int)$fizz) && !($arrNumber % (int)$buzz)) {
                $arrNumber = "FB";
            }
            elseif (!($arrNumber % (int)$fizz)) {
                $arrNumber = "F";
            }
            elseif (!($arrNumber % (int)$buzz)) {
                $arrNumber = "B";
            }
            else {
                $arrNumber = $arrNumber;
            }
            return $arrNumber;
        }, $arr);
    return $newArr;
}


// if (file_exists($inputFilePath)) {
//     $file = fopen($inputFilePath, 'r');
//     $fizz = getFizzFromFile($file);
//     $buzz = getBuzzFromFile($file);
//     $number = getNumberFromFile($file);
//     fclose($file);
//     echo $fizz . $buzz . $number . "\n";
// }
// else {
//     $fizz = inputFizz();
//     $buzz = inputBuzz();
//     $number = inputNumber();
// }

if (file_exists($inputFilePath)) {
    $file = fopen($inputFilePath, 'r');
    $arrIn = getArrFromFile($inputFilePath);
print_r($arrIn); exit;
    $fizz = $arrIn['0'];
    $buzz = $arrIn['1'];
    $number = $arrIn['2'];
    fclose($file);
}
else {
    $fizz = inputFizz();
    $buzz = inputBuzz();
    $number = inputNumber();
}



$arrOut = arrayMapOutput($number, $fizz, $buzz);
$outString = implode(" ",$arrOut);

if (file_exists($outputFilePath)){
    $file = fopen($outputFilePath, 'r+');
    // writeToFile($file ,$fizz, $buzz, $number);
    fputs($file, $outString);
    fclose($file);
    echo 'file' . $outputFilePath . ' has been written' . "\n";
}
else {
    // output($fizz, $buzz, $number);
    print_r($outString);
}

echo "----------------\n";

