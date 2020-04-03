<?php
	$mauso = 1;
	$S=0;
	$n=10;
	for ($i = 1; $i <= $n ; $i++) { 
		$mauso *= $i;
		$S += $i/$mauso;
	}
	echo "Tong cua day so la S = ".$S;
?>