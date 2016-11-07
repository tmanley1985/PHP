<?php

$numbers = range(0, 100, 3);

foreach ($numbers as $value) {

	switch($value) {

		case 3:
			echo "Three";
			break;

		case 9:
			echo str_repeat("Nine", 3);
			break;

		case 15:
			echo str_repeat("Fifteen", 5);
			break;
	}

}