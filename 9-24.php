<?php
//Reverse a string
function reverse ($string) {

	$array = str_split($string);
	$newString = "";

	for($i=strlen($string)-1; $i>=0; $i--) {
		$newString = $newString.$string[$i];
	}

	return $newString;
}

echo reverse ("abcd efg");

?>