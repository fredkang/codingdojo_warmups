<?php

//Create a 10 by 10 array and fill eahc value randomly with either "D" or "E"
function tenByTen() {

	$grid = array();
	
	for($i=0; $i<10; $i++) {
		for ($j=0; $j<10; $j++) {
			if (rand(0, 1)==1)
				$grid[$i][$j] = "D";
			else
				$grid[$i][$j] = "E";
		}
	}

	return $grid;
}


$grid = tenByTen();

echo "<table>";

foreach ($grid as $row) {
	echo "<tr>";
	foreach ($row as $item) {
		echo "<td>".$item."</td>";
	}
	echo "</tr><br>";
}

echo "</table>";

?>