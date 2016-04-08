<?php 
	$in = fscanf(STDIN, "%d %d %d");
	list($a, $b, $c) = $in;
	$i = ($a + $b + $c)/3;


	while ($i <= 10) {
		echo "meu valor eh" . $i . "\n";
		$i++;
	}


 ?>