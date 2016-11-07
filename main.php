<?php

require_once('./constants.php');

$array = [

	ANIMAL => 'animal',
	NAME => 'name',
	'one' => ONE,
	'two' => TWO

];

$result = $array['one'] * $array['two'];

echo "The result of {$array['one']} * {$array['two']} is: {$result}";