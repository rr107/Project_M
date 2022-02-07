<?php
	session_start();
	require_once'../../db.php';
	$id=$_GET['p_id'];
	$select="SELECT * FROM portfolio WHERE id=$id";
	$quiry=mysqli_query($db, $select);
	$assoc=mysqli_fetch_assoc($quiry);
	if ($assoc['status']==1) {
		$status="UPDATE portfolio SET status=2 WHERE id=$id";
		if (mysqli_query($db, $status)) {
	      $_SESSION['changestatus']='Detivated Successfull';
	      header('location:../Portfolios.php');			
		}
	}else{
		$status="UPDATE portfolio SET status=1 WHERE id=$id";
		if (mysqli_query($db, $status)) {
	      $_SESSION['changestatus']='Activated Successfull';
	      header('location:../Portfolios.php');			
		}
	}
?>