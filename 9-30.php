<?php
//Given two numbers "a b", return the a to the power of b
function powerAB($string) {

	$intArray = explode(" ", $string);

	return pow($intArray[0], $intArray[1]) % 10;
}

echo powerAB("3 10");
echo "<br>";
echo powerAB("6 2");

?>