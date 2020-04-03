<?php
	// Đây là chương trình bảng cửu chương
	echo "<h1> Bảng cửu chương </h1> <br>  "; 
	for ($i=2; $i < 10 ; $i++) { 
		echo "Bảng cửu chương $i <br>";
		for ($j=1; $j <= 10; $j++) {
			$mul=$i*$j; 
			echo "$i x $j = ".$mul ."<br>";
		}
	}
?>