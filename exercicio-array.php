<?php 
	echo "Quantidade de numeros";
	$in = fscanf(STDIN, "%d");
	list($n) = $in;

	$a = array();

	for ($i = 1; $i <= $n; $i++) { 
		echo "Digite o numero";
		$in = fscanf(STDIN, "%d");
		list($numero) = $in;
		$a[$i] = $numero;
	}

	foreach ( $nums as $num) {
		if (!($num%2));
		echo nums;
	}

	foreach ($nums as $num) {
		if (($num%2)=0);
		echo nums;
	}
?>