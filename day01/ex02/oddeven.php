#!/usr/bin/php
<?php
	while (1)
	{
		echo "Entrez un nombre: ";
		$num = trim(fgets(STDIN));
		if (feof(STDIN) == TRUE)
			exit();
		if (is_numeric($num))
		{
			echo "Le chiffre " . $num . " est ";
			if ($num % 2 == 0) {
				echo "Pair";
			}
			else
				echo "Impair";
		}
		else
			echo "'".$num . "' n'est pas un chiffre";
		echo "\n";
	}
?>