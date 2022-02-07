<?php

  include'mordana/header.php';
  require_once'db.php';
  $select="SELECT * FROM services WHERE status=1";
  $services=mysqli_query($db, $select);

  $select="SELECT * FROM whyus";
  $whyus=mysqli_query($db, $select);

  $select="SELECT * FROM video";
  $section=mysqli_query($db, $select);

  $select="SELECT * FROM servicesplan";
  $plan=mysqli_query($db, $select);

  $select="SELECT * FROM pricing WHERE id=1";
  $price=mysqli_query($db, $select);

  $select2="SELECT * FROM pricing WHERE id=2";
  $pricing=mysqli_query($db, $select2);

  $select2="SELECT * FROM pricing WHERE id=3";
  $pric=mysqli_query($db, $select2);  

?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Mordana</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Services</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Our Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">
        <div class="row">         
          <?php
            foreach($services as $key => $service){
              ?>
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box icon-box-pink"> 
                  <div class="icon"><i class="<?php echo$service['icon']?>"></i>
                  </div>
                  <h4 class="title"><a href="#"><?php echo$service['title']?></a></h4>
                  <p class="description"><?php echo$service['description']?></p>
                </div>
              </div>
              <?php
            }
          ?>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <?php
            foreach($section as $key=> $value){
              ?>
              <div class="col-lg-6 video-box">
                <img src="assets/portfolio/whyus/<?php echo$value['image']?>" class="img-fluid" alt="">
                <a href="<?php echo $value['url']?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
              </div>
              <?php
            }
          ?>
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5"> 
            <?php
              foreach($whyus as $key=> $value){
                ?><div class="icon-box">
                    <div class="icon"><i class="<?php echo $value['icon']?>"></i></div>
                    <h4 class="title"><a href=""><?php echo $value['title']?></a></h4>
                    <p class="description"><?php echo $value['category']?></p>
                  </div>
                <?php
              }
            ?>           
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">

          <?php
            foreach($plan as $key=> $value){
              ?>
              <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/portfolio/plan/<?php echo$value['image']?>" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="#"><?php echo$value['title']?></a></h5>
                    <p class="card-text"><?php echo$value['summery']?></p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
              </div>                
              <?php
            }
          ?>
        </div>

      </div>
    </section><!-- End Service Details Section -->

    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
      <div class="container">
        <div class="section-title">
          <h2>Pricing</h2>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        </div>

        <div class="row no-gutters">
          <?php
            foreach($price as $key=> $value){
              ?>
              <div class="col-lg-4 box">
                <h3><?php echo$value['title']?></h3>
                <h4><?php echo$value['doller']?><span><?php echo$value['validati']?></span></h4>
                <ul>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p1']?></li>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p2']?></li>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p3']?></li>
                  <li class="na"><i class="bx bx-x"></i><span><?php echo$value['p4']?></span></li>
                  <li class="na"><i class="bx bx-x"></i><span><?php echo$value['p5']?></span></li>
                </ul>
                <a href="<?php echo$value['url']?>" class="get-started-btn">Get Started</a>
              </div>
              <?php
            }
          ?>   

          <?php
            foreach($pricing as $key=> $value){
              ?>
              <div class="col-lg-4 box featured">
                <h3><?php echo$value['title']?></h3>
                <h4><?php echo$value['doller']?><span><?php echo$value['validati']?></span></h4>
                <ul>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p1']?></li>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p2']?></li>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p3']?></li>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p3']?></li>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p3']?></li>
                </ul>
                <a href="<?php echo$value['url']?>" class="get-started-btn">Get Started</a>
              </div>
              <?php
            }
          ?>

          <?php
            foreach($pric as $key=> $value){
              ?>
            <div class="col-lg-4 box">
              <h3><?php echo$value['title']?></h3>
              <h4><?php echo$value['doller']?><span><?php echo$value['validati']?></span></h4>
                <ul>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p1']?></li>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p2']?></li>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p3']?></li>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p3']?></li>
                  <li><i class="<?php echo$value['icon']?>"></i><?php echo$value['p3']?></li>
                </ul>
              <a href="<?php echo$value['url']?>" class="get-started-btn">Get Started</a>
            </div>
              <?php
            }
          ?>
        </div>
      </div>
    </section><!-- End Pricing Section -->
  </main><!-- End #main -->

<?php
  include'mordana/footer.php';
?>