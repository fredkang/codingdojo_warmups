<?php
//Return the smallest amount of change needed to create an amount. This isn't working right now
//due to floating point -> integer math
function changeMaker($amount) {
	$amount = round($amount, 2);
	$coins = ['quarters'=>0, 'dimes'=>0, 'nickels'=>0, 'pennies'=>0];

	$coins['quarters'] = intval($amount / .25);
	$amount = $amount - $coins['quarters']*.25;
	if($amount==0)
		return $coins;

	$coins['dimes'] = intval($amount / .10);
	$amount = $amount - $coins['dimes']*.10;
	if($amount==0)
		return $coins;

	echo $amount.", ".$amount/.05.", ".intval($amount/.05)." ";

	$coins['nickels'] = intval($amount/.05);
	$amount = $amount - $coins['nickels']*.05;
	if($amount==0)
		return $coins;

	$coins['pennies'] = intval($amount/.01);
	$amount = $amount - $coins['pennies']*.01;
	if($amount==0)
		return $coins;

	return $coins;
}

$coins = changeMaker(2.30);

foreach($coins as $coin=>$number) {
	echo $coin.": ".$number."<br>";
}
?>