<?php

$inputFilePath  = 'input.txt';
$outputFilePath = 'output.txt';

$inputFile = fopen($inputFilePath, 'r');
$outputFile = fopen($outputFilePath, 'r+');
while (!feof($inputFile)) {
    $string = fgets ($inputFile);
    fputs($outputFile, $string);
    fputs($outputFile, $string);
}

fclose($inputFile);
fclose($outputFile);
