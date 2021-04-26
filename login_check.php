<?php
session_start();
$uname=$_POST['username'];
$psw=$_POST['password'];
$ident=$_POST['ident'];
$sql='SELECT * FROM hacross WHERE username=\''.$uname.'\' AND password=\''.$psw.'\';';
?>