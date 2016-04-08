<?php 
	$in = fscanf(STDIN, "%d %d %d");
	list($a, $b, $c) = $in;
	$i = ($a + $b + $c)/3;
	switch ($i) {
		case 1:
			echo "$i = 5"
			break;
		
		default:
			# code...
			break;
	}
?>