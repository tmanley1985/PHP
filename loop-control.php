<?php

$numbers = range(0, 100, 3);

foreach ($numbers as $value) {

	if( $value % 7 === 0 ) {

		echo "First number";
		echo "Sevens are lucky, this number has " . $value / 7 . " ";
	}else if( $value % 10 === 0 ) {
		echo "Last number";
		echo "{$value} is a round number";
	}

}