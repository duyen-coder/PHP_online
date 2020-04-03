<?php
	// Đây là chương trình giải phương trình bậc 2: ax^2 + bx + c =0 với mọi trường hợp.
	$a = 1 ; $b = 2; $c = -1;
	if ($a == 0)
	{
		if($b == 0 && $c != 0)
			echo "Phương trình vô nghiệm.";
		else if ($b == 0 && $c == 0)
			echo "Phương trình có vô số nghiệm.";
		else
		{
			$x = - $c / $b;
			echo "Phương trình có một nghiệm là: x = ".$x;
		}
	}
	else
	{
		$denta = $b*$b - 4*$a*$c;
		if ($denta < 0)
			echo "Phương trình vô nghiệm";
		else if ($denta == 0)
		{
			$x = -$b/ 2*$a;
			echo "Phương trình có nghiệm kép x1=x2= ".$x;
		}
		else
		{
			$x1 = (-$b - sqrt($denta)) / (2*$a);
			$x2 = (-$b + sqrt($denta)) / (2*$a);
			echo "Phương trình có hai nghiệm phân biệt x1 = " .$x1 ." x2 = " .$x2;
		}
	}
?>