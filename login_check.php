<?php
session_start();
$uname=$_POST['username'];
$psw=$_POST['password'];
$ident=$_POST['ident'];
$sql='SELECT * FROM admin WHERE email=\''.$uname.'\' AND password=\''.$psw.'\';';
	$result=mysqli_query($conn,$sql);
	$rowCount=mysqli_num_rows($result);
	redirect('registeraccount.php');
?>