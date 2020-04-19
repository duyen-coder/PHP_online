<?php
require_once('../../connection.php');
$auth_name= $_POST['auth_name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$status = $_POST['status'];
$query= "INSERT INTO authors(auth_name,email,password,status) VALUES ('".$auth_name."','".$email."','".$password."','".$status."');";
$status= $conn->query($query);
if($status == true)
{
	setcookie('msg','Thêm mới thành công',time()+5);
	header('Location: authors.php');
}
else
{
	
	setcookie('msg', 'Thêm mới không thành công',time()+5);
	header('Location: author_add.php');
}
?>