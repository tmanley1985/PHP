<?php

$numbers = range(0, 100, 3);


while (list($index, $number) = each ($numbers)) {
    if( $number % 7 === 0 ) {

		echo "First number";
		echo "Sevens are lucky, this number has " . $number / 7 . " ";
	}else if( $number % 10 === 0 ) {
		echo "Last number";
		echo "{$number} is a round number";
	}
}