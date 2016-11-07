<?php 

$one = 1;

$two = 2;

function add(&$num1, $num2) {
	return $num1 + $num2;

}

function subtract($num1, $num2) {
	return $num1 - $num2;
}

function multiply($num1, $num2) {
	return $num1 * $num2;
}

function divide($num1, $num2) {
	return $num1 / $num2;
}

echo add($one,$one);
echo subtract(1, 1);
echo multiply(1,4);
echo divide($two, $one);