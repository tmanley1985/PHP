<?php

$numbers = range(0, 100, 3);

$i = 0;

do {

	if( $numbers[$i] % 7 === 0 ) {

		echo "First number";
		echo "Sevens are lucky, this number has " . $numbers[$i] / 7 . " ";
	}else if( $numbers[$i] % 10 === 0 ) {
		echo "Last number";
		echo "{$numbers[$i]} is a round number";
	}

	$i++;
	
} while ($i < count($numbers));