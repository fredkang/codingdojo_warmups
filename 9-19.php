<?php
	function larger($array) {
		if(count($array)<=1) {
			return true;
		}

		else if($array[0]<=$array[1]) {
			return larger(array_slice($array, 1, count($array)-1));
		}

		else {
			return false;
		}
	}

	$working = [1,2,2,3,4,5];
	$not_working = [1,2,3,2,1,5];


	if(larger($working))
		echo "true<br>";
	else
		echo "false<br>";
	if(larger($not_working))
		echo "true<br>";
	else
		echo "false<br>";

?>