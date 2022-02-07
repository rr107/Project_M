<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'mordana');
	$db=mysqli_connect(HOST, USER, PASSWORD, DATABASE);
	if ($db) {
		// echo'Database Connect';
	}else{
		echo'Error';
	}		
?>