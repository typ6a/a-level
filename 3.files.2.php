<?php

$inputFile1Path  = 'file1.txt';
$inputFile2Path  = 'file2.txt';
$outputFilePath = 'output.txt';

function appendContents($file) {
    $inputFile = fopen($file, 'r');
    $outputFile = fopen('output.txt', 'a');
    while (!feof($inputFile)) {
        $string = fgets ($inputFile);
        fputs($outputFile, $string);
    }
    fclose($inputFile);
    fclose($outputFile);
}

function inputFileName() {
    $handle = fopen ("php://stdin","r");
    echo "input file name:\n";
    $fileName = trim(fgets ($handle));
    // var_dump($teaType);
    return $fileName;
}

$file = inputFileName();

appendContents($file);
