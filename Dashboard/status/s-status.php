<?php
	session_start();
	require_once'../../db.php';
	$id=$_GET['sstatus_id'];
	$select="SELECT * FROM services WHERE id=$id";
	$quiry=mysqli_query($db, $select);
	$assoc=mysqli_fetch_assoc($quiry);
	if ($assoc['status']==1) {
		$status="UPDATE services SET status=2 WHERE id=$id";
		if (mysqli_query($db, $status)) {
		    $_SESSION['changestatus']='Detivated Successfull';
		    header('location:../service.php');
		}
	}else{
		$status="UPDATE services SET status=1 WHERE id=$id";
		if (mysqli_query($db, $status)) {
		    $_SESSION['changestatus']='Activated Successfull';
		    header('location:../service.php');
		}
	}
?>