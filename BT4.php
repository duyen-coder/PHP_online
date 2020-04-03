<?php
	// Đây là chương trình tìm số lớn nhất trong mảng
	// Cách 1: Tìm Max theo kiểu duyệt mảng
	$arr = array(1,4,2,6,9,100,45,8,20); 
	$Max = $arr[0];
	for ($i=0; $i<9 ; $i++) { 
		if ($Max < $arr[$i])
			$Max= $arr[$i];
	}
	echo "Phần tử lớn nhất trong mảng là : " .$Max ."<br>";
	// Cách 2: Tìm max bằng cách sort
	sort($arr);
	echo "Phần tử lớn nhất trong mảng là : " .$arr[8];
?>