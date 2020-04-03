<?php
	$arr_name = array('Ba Cường', 'Mẹ Gấm', 'Mẹ Hương', 'Ba Thanh', "Anh Bình", "Em <3", "Thanh Nhàn", "Đăng Khoa");
	echo "<pre>";
		print_r($arr_name);
	echo "</pre>";
	echo "Xin chào ".$arr_name[4];
	$arr_name[] = 'Baby';
	echo "<pre>";
		print_r($arr_name);
	echo "</pre>";
	$subjects = array();
	$subjects[] = array("Toán",10);
	$subjects[] = "Lý";
	$subjects[] = "Hóa";
	echo "<pre>";
		print_r($subjects);
	echo "</pre>";
	echo "Môn: ".$subjects[0][0] ." - Điểm: ".$subjects[0][1];
?>