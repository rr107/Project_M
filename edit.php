<?php
	session_start();
	require_once'db.php';
	$id=$_GET['edit_id'];
    $select="SELECT * FROM users WHERE id=$id";
    $quiry=mysqli_query($db, $select);
    $assoc=mysqli_fetch_assoc($quiry);
	
?>
<!DOCTYPE html>
<html>
<head>
    <title>RR_107</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
                        <form action="edit-post.php" method="POST"  class="myForm text-center">
                            <header>Update User</header>
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="<?php echo $assoc['id']?>">
                                <i class="fas fa-user"></i>
                                <input class="myInput" value="<?php echo $assoc['name']?>" type="text" placeholder="Username" name="name" id="name" value="<?php echo $_SESSION['name']??''?>" >
                                <p>
                                <span class="text">
                                <?php
                                    if (isset($_SESSION['invalidname'])) {
                                        ?>
                                        <style type="text/css">
                                            .text{
                                                color: red;
                                                font-size: 14px;
                                                font-weight: bold;
                                                font-style: italic;
                                            }
                                        </style>
                                        <?php
                                        echo $_SESSION['invalidname'];
                                        unset($_SESSION['invalidname']);
                                    }
                                ?>
                                </span>
                                </p>                                
                            </div>

                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="myInput" value="<?php echo $assoc['email']?>" placeholder="Email" name="email" type="text" id="email" value="<?php echo $_SESSION['email']??''?>" >
                                <p>
                                <span class="text">
                                <?php
                                    if (isset($_SESSION['invalidemail'])) {
                                        ?>
                                        <style type="text/css">
                                            .text{
                                                color: red;
                                                font-size: 14px;
                                                font-weight: bold;
                                                font-style: italic;
                                            }
                                        </style>
                                        <?php
                                        echo $_SESSION['invalidemail'];
                                        unset($_SESSION['invalidemail']);
                                    }
                                ?>
                                </span>
                                </p>                                 
                            </div>

                            <div class="form-group">
                                <button type="submit" class="butt">Update</button>
                            </div>                             
                           
                        </form>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="myRightCtn">
                        <div class="box"><header>Welcome</header>
                            <h5>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                            </h5>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
</div>
      
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
</body>
</html>