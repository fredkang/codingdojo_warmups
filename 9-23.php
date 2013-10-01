<?php
	//given an integer, return the next integer that, as a string, is a palindrome
	function next_pali($x) {
		$current = $x;

		while(true) {
			if($current<10)
				return $current;
			else {
				$current_array = strval($current);

				$current_array = str_split($current_array);

				$new_pali = $current_array;
				
				for($i=0; $i<count($current_array); $i++) {
					$new_pali[count($current_array)-$i] = $current_array[$i];
				}

				if($new_pali==$current_array)
					return $current;
				else
					$current++;
			}
		}
	}

echo next_pali(47);
?>