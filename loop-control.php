<?php

$numbers = range(0, 100, 3);

for ($i=0; $i < count($numbers); $i++) { 
	if( $numbers[$i] % 7 === 0 ) {

		echo "First number";
		echo "Sevens are lucky, this number has " . $numbers[$i] / 7 . " ";
	}else if( $numbers[$i] % 10 === 0 ) {
		echo "Last number";
		echo "{$numbers[$i]} is a round number";
	}
}