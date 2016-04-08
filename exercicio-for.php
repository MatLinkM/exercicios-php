<?php 
	echo "Tem algum aluno?\n";
	$in = fscanf(STDIN, "%d");
	list($alunos ) = $in;

	while ($alunos != -1) {
		echo "Quantas notas são?\n";
		$in = fscanf(STDIN, "%d");
		list( $n ) = $in;

		for ($i = 1; $i <= $n; $i++) {
			echo "digite a nota do aluno!\n";
			$in = fscanf(STDIN, "%d");
			list($nota) = $in;

			if ($nota >= 7) {
				echo "a nota " . $nota . " é maneira!\n";
			}
			else{
				echo "a nota " . $nota . " é fulêra!\n";
			}
		}

		echo "tem mais vadio?\n";
		$in = fscanf(STDIN, "%d");
		list($alunos ) = $in;
	}

 ?>