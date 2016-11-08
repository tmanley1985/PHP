<?php

class Math {
	
	const SUBTRACT = '-';
	const ADD = '+';
	const MULTIPLY = '*';
	const DIVIDE = '/';


	private function doOperation($operator, $numbers = [])
	{
		$numbers_after_first = array_filter($numbers, function($val, $index) {
			return $index > 0;
		}, ARRAY_FILTER_USE_BOTH);

		return array_reduce($numbers_after_first, function($val1, $val2) use($operator) {
				
				if($operator == self::ADD) {
					return $val1 + $val2;
				}else if($operator == self::SUBTRACT) {
					return $val1 - $val2;
				}else if($operator == self::MULTIPLY) {
					return $val1 * $val2;
				}else if($operator == self::DIVIDE) {
					return $val1 / $val2;
				}
				
			}, $numbers[0]);
	}

	public function add(...$nums)
	{
		
		return $this->doOperation('+', $nums);
		
	}

	public function subtract(...$nums) 
	{
		return $this->doOperation('-', $nums);
		
	}

	public function multiply(...$nums) 
	{
		return $this->doOperation('*', $nums);


	}

	public function divide(...$nums) 
	{
		return $this->doOperation('/', $nums);
	}

}