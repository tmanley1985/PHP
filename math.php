<?php

class Math {
	
	public function add($num1, $num2, ...$nums) {
		
		if(count($nums) === 0) {
			
			return $num1 + $num2;
		}else {
			$numbers = array_merge([$num1, $num2], $nums);

			return array_reduce($numbers, function($val1, $val2) {
				return $val1 + $val2;
			});
		}
		
	}

	public function subtract($num1, $num2, ...$nums) {
		if(count($nums) === 0) {
			return $num1 - $num2;
		}else {
			$numbers = array_merge([$num2], $nums);

			return array_reduce($numbers, function($val1, $val2){
				
				return $val1 - $val2;

			}, $num1);

		}
		
	}

	public function multiply($num1, $num2, ...$nums) {
		if(count($nums) === 0) {
			return $num1 * $num2;
		}else {

			$numbers = array_merge([$num2], $nums);

			return array_reduce($numbers, function($val1, $val2){

				return $val1 * $val2;
			}, $num1);
		}


	}

	public function divide($num1, $num2, ...$nums) {
		if(count($nums) === 0) {
			return $num1 / $num2;
		}else {

			$numbers = array_merge([$num2], $nums);

			return array_reduce($numbers, function($val1, $val2){
				return $val1 / $val2;
			}, $num1);

		}
	}

}