<?php

// function createTea($teaType){
//     if ($teaType == "черный") {
//         echo"Заходим на кухню";
//         echo"Берем пакетик из ящика "черный чай"";
//         echo"Заливаем пакетик кипятком";
//     }
//     elseif ($teaType == "зеленый") {
//         echo"Заходим на кухню";
//         echo"Берем пакетик из ящика "зеленый чай"";
//         echo"Заливаем пакетик кипятком";
//     }
//     else echo"такого чая нет!";
// }

// function inputTeaType() {
//     $handle = fopen ("php://stdin","r");
//     echo "какой чай будем пить?\n";
//     $teaType = str_replace("\r\n", "", fgets ($handle));
//     var_dump($teaType);
//     return $teaType;
// }

// $teaType = inputTeaType();
// createTea($teaType);


function createTea($teaType){
    if ($teaType == "black") {
        echo"Заходим на кухню \n";
        echo"Берем пакетик из ящика 'черный чай' \n";
        echo"Заливаем пакетик кипятком \n";
    }
    elseif ($teaType == "green") {
        echo"Заходим на кухню \n";
        echo"Берем пакетик из ящика 'зеленый чай' \n";
        echo"Заливаем пакетик кипятком \n";
    }
    else echo"такого чая нет!";
}

function inputTeaType() {
    $handle = fopen ("php://stdin","r");
    echo "какой чай будем пить?\n";
    $teaType = trim(fgets ($handle));
    // var_dump($teaType);
    return $teaType;
}

$teaType = inputTeaType();
createTea($teaType);