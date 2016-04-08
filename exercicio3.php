<?php 
	$in = fscanf(STDIN, "%d %d %d");
	list($a, $b, $c) = $in;
	$i = ($a + $b + $c)/3;

	switch ($i) {
		case 0:
			echo "i vale 0";
			break;
		case 1:
		case 2:
			echo "i vale 1 ou 2";
			break;
		default:
			echo "i n vale poha nenhuma";
			break;
	}
 ?>