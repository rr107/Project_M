<?php
	session_start();
	require_once'db.php';
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$id=$_POST['user_id'];
		
		if (empty(!$name)) {
			$len=strlen($name);
			if ($len>4) {
				$_SESSION['name']=$name;
				$valid_name=$name;
			}else{
				$_SESSION['invalidname']='Please Inter your valid name';
				header('location:edit.php');
			}
		}else{
			$_SESSION['invalidname']='Please Inter Your Name';
			header('location:edit.php');
		}


		if (empty(!$email)) {
			$regex='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
			if (preg_match($regex, $email)) {
				$_SESSION['email']=$email;
				$select="SELECT COUNT(*) as total FROM users WHERE email='$email' ";
				$users=mysqli_query($db, $select);
				$count=mysqli_fetch_assoc($users);
				if ($count['total']>0) {
					$_SESSION['invalidemail']='Email Already Exists';
					header('location:register.php');						
				}else{
					$valid_email=$email;
				}
			}else{
				$_SESSION['invalidemail']='Please Inter your valid email';
				header('location:edit.php');				
			}
		}else{
			$_SESSION['invalidemail']='Please Inter Your Email';
			header('location:edit.php');			
		}

		if ($valid_name && $valid_email) {		
			$insert="UPDATE users SET name='$valid_name', email='$valid_email' WHERE id=$id";
			if (mysqli_query($db, $insert)) {
				header('location:Dashboard/users.php');
			}else{
				// header('location:user.php');
			}
		}else{
			header('location:Dashboard/users.php');
		}
	}
	else{
		echo'Access Denied';
	}
?>