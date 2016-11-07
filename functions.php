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

// echo add($one,$one);
// echo subtract(1, 1);
// echo multiply(1,4);
// echo divide($two, $one);

function comparison( $val_1, $val_2, $compare_data_types = false ) {

	if( $compare_data_types === false ) {
		$result = ($val_1 == $val_2) ? "equal" : "not equal";
		echo "These parameters are " . $result;
	}else {
		$result = ($val_1 == $val_2) ? "equal" : "not equal";
		$datatype = ($val_1 === $val_2) ? "and are of the same datatype" : "and are not of the same datatype";
		echo "These parameters are " . $result . " " . $datatype;
	}
}

