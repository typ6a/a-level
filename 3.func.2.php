<?php

function getAnswer($q) {
    $answer = rand(0, 1);
    if ($answer == 0) {
        $answer = 'Yes';
    }
    else {
        $answer = 'No';
    }
    echo $q . "\n";
    echo $answer . "\n";
    return $answer;
}
$q = 'I am lucky tomorrow?';

getAnswer($q);