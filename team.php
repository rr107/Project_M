<?php
  require_once'db.php';
  include'mordana/header.php';
  $select="SELECT * FROM teammembers";
  $teammembers=mysqli_query($db, $select);
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
          <li><a class="active" href="team.php">Team</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Team</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Our Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <?php
            foreach($teammembers as $key=> $member){
              ?>
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/portfolio/members/<?php echo$member['image']?>" class="img-fluid" alt="Image Here">
                    <div class="social">
                      <a href="<?php echo$member['url']?>"><i class="<?php echo$member['icon']?>"></i></a>
                      <a href="<?php echo$member['url1']?>"><i class="<?php echo$member['icon1']?>"></i></a>
                      <a href="<?php echo$member['url2']?>"><i class="<?php echo$member['icon2']?>"></i></a>
                      <a href="#"><i class="bi bi-pinterest"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4><?php echo$member['name']?></h4>
                    <span><?php echo$member['title']?></span>
                    <p><?php echo$member['description']?></p>
                  </div>
                </div>
              </div>
              <?php
            }
          ?>
        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

<?php include'mordana/footer.php';?>