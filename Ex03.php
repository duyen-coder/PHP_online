<?php
	// Cách khai báo biến, hằng trong PHP
	// Khai báo biến
	$number =10;
	$name = "Duyên";
	$point = 9.5;
	echo "Xin chào ".$name ."<br>";
	$class = "PHP online";
	echo "Bạn đang học lớp $class";
	// Khai báo hằng
	define('PI', 3.14);
	echo "<br> Pi= " .PI;
	// Cấu trúc điều khiển
	// Rẽ nhánh
	// Kiểm tra tính chẵn lẻ
	if ($number % 2 == 0)
		echo "<br> Số này là số chẵn.";
	else
		echo "<br> Số này là số lẻ";
	$day = 3;
	switch ($day) {
		case '2': echo "<br> Đây là thứ 2.";
			break;
		case '3': echo "<br> Đây là thứ 3.";
			break;
		
		default:
			echo "<br> Thứ không hợp lệ.";
			break;
		}
	// Lặp
		for ($i=0; $i < 10; $i++) { 
			echo "<br> $i";
		}
		$i=0;
		while ($i < 10) {
			echo "<br>" .$i;
			$i++;
		}
		$i=0;
		do {
			echo "<br>" .$i;
			$i++;
		} while ($i < 10);
?>