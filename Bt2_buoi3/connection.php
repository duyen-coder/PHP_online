<?php
// Thông số kết nối CSDL

$servername = "localhost"; // 255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

$username = "root"; // Tên đăng nhập

$password = ""; // Mật khẩu truy cập

$dbname = "blogs"; // Tên CSDL muốn kết nối

// Tạo kết nối đến CSDL
$conn = new mysqli($servername, $username, $password, $dbname);
?>