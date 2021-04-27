<?php 
	
	$server='localhost';
	$username='root';
	$password='';
	$dbname='HACROSS';

	$conn=mysqli_connect($server,$username,$password,$dbname);

	if(!$conn){
		echo "<h1 style='color: red;'>Connection Error: ".mysqli_connect_error()."</h1>";
	} 

 ?>