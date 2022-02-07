<?php
  session_start();
  require_once'db.php';
  include'mordana/header.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
    $name   =$_POST['name'];
    $email  =$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $select="SELECT COUNT(*) as total FROM contact WHERE email='$email' ";
    $users=mysqli_query($db, $select);
    $count=mysqli_fetch_assoc($users);
    if ($count['total']>0) {
      $_SESSION['message']='Email Already Exists';
      
    }else{
      $valid_email=$email;
      if ($name && $valid_email && $subject) {
          $insert ="INSERT INTO contact(name, email, subject, message) VALUES ('$name', '$valid_email', '$subject', '$message')";
          mysqli_query($db, $insert);
          $_SESSION['message']='Your Message Send Successfull';

      }else{
        $_SESSION['message']='Error';
      }      
    }    
  }
?>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>MORDANA</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a class="active" href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Dhaka-1207, Bangladesh</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>email@gmail.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+880123456789<br>+98 23 456 789</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="contact.php" method="POST">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input  type="text" name="name" class="form-control" id="name" placeholder="Your Name">   
                </div>

                <div class="col-md-6 form-group">
                  <input  type="text" name="email" class="form-control" id="email" placeholder="Your Email">
                </div>
              </div>

              <div class="form-group mt-3">
                <input  type="text" name="subject" class="form-control" id="subject" placeholder="Type Your Subject">
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              </div>
              </br> 
              <div class="text-center"><button class="btn btn-success" type="submit">Send Message</button></div>
              <?php
                if (isset($_SESSION['message'])) {
                  ?>
                  <div class="alert alert-warning" role="alert">
                    <strong><?php echo $_SESSION['message']?>!</strong>
                  </div>
                  <?php
                  unset($_SESSION['message']);
                }
              ?>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.093474068926!2d90.37046431443673!3d23.744045894937162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4b76fc45cb%3A0xcbcd101db46e6224!2sDhanmondi%2015!5e0!3m2!1sen!2sbd!4v1643447163230!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section><!-- End Map Section -->
  </main><!-- End #main -->
  
<?php
  include'mordana/footer.php';
?>  