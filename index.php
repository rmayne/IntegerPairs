<?php
	/*
	*	Write a function f(x) that returns all distinct pairs of integers between -50 and 50 (inclusive) whose sum is X. Solution should be in PHP.
	*	Thus, 
	*	f(100) returns an empty list
	*	f(99) returns (49,50)
	*   f(0) returns too many answers to print here.
	*/
		
	function findPreviouslyUsedInteger($array1, $i2){
		foreach ($array1 as $pair) {
			if ($pair[0] == $i2){
				return true;
			}
		}
		return false;
	}


	function findPairs($x) {
	    $array1 = array();
		for ($i = -50; $i <= 50; $i++) {
			for ($i2 = -50; $i2 <= 50; $i2++) {
				if ($i + $i2 == $x && $i2 != $i && !findPreviouslyUsedInteger($array1, $i2)) {
					$array2 = array($i, $i2);
					array_push($array1, $array2);
				}
			}
		}
		return $array1;
	}


	foreach(findPairs(99) as $pair){
		echo '(' . implode(',', $pair) . ')' . '<br>';
	}

	/*
	This could be faster if iterations were reduced by 
	removing previously used intergers from the list of candidates. 
	The pairs are not evenly distributed, so eleminating some candidates based on this is also a possibility.
	I understand that this can also be solved using Big-O
	*/	
?>