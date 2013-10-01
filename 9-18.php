<?php
//Return the sum of all even numbers in a fibonacci sequence up to a given integer
function fib_even($max) {
	$fib1 = 0;
	$fib2 = 1;

	$current_sum=0;

	while($fib2<$max) {
		$new_fib=$fib1+$fib2;

		$fib1=$fib2;
		$fib2=$new_fib;

		if($new_fib%2==0)
			$current_sum = $current_sum+$new_fib;
	}

	return $current_sum;
}

echo fib_even(4000000);
echo "";
echo "";


?>