<?php
  session_start();
  require_once'../../db.php';
  $id=$_GET['features_id'];
  $selected="SELECT * FROM features WHERE id=$id";
  $quiry=mysqli_query($db, $selected);
  $assoc=mysqli_fetch_assoc($quiry);
  if ($assoc['status']==1) {
    $status="UPDATE features SET status=2 WHERE id=$id";
    if (mysqli_query($db, $status)) {
      $_SESSION['changestatus']='Detivated Successfull';
      header('location:../features.php');
    }
  }else{
    $status="UPDATE features SET status=1 WHERE id=$id";
    if (mysqli_query($db, $status)) {
      $_SESSION['changestatus']='Activated Successfull';
      header('location:../features.php');
    }
  }
?>