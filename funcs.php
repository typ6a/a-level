<?php

$sum = function($c, $d) {
	return $c + $d;
};

$sub = function($e, $f) {
	return $e - $f;
};

$div = function($e, $f) {
    return $e / $f;
};

$mul = function($e, $f) {
    return $e * $f;
};

function operation($a, $b, $op) {
	$res = $op($a, $b);
	return $res;
}

//Указываем с какими числами будет производится операция
//и тип операции. Если вместо $sub вставить $sum - числа будут складываться
echo operation(3, 4, $mul);
