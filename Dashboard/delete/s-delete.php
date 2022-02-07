<?php
	session_start();
	require_once'../../db.php';
	$id=$_GET['delete_id'];
	$select="DELETE FROM services WHERE id=$id";
	if (mysqli_query($db, $select)) {
		$_SESSION['changestatus']='Delete Successfull';
		header('location:../service.php');
	}
?>