<?php
	// Đây là chương trình in mảng đảo ngược
	$arr = array(1,4,2,6,9,100,4);
	echo "Mảng ban đầu là: <br>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	// Cách 1: Dùng hàm  nghịch đảo mảng ban đầu
	echo "Mảng sau khi đảo ngược là";
	echo "<pre>";
	print_r(array_reverse($arr));
	echo "</pre>";
	// Cách 2: Duyệt for từ cuối lên
	for ($i=6; $i >=0 ; $i--) { 
		echo "Phần tử thứ $i là $arr[$i] <br>";
	}
?>