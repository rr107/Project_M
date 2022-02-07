<?php

  include'mordana/header.php';
  session_start();
  require_once'db.php';
  $select="SELECT * FROM services WHERE status=1";
  $services=mysqli_query($db, $select);

  $select="SELECT * FROM whyus";
  $whyus=mysqli_query($db, $select);
 
  $select="SELECT * FROM video";
  $section=mysqli_query($db, $select);

  $select="SELECT * FROM features WHERE id=1 && status=1"; 
  $features=mysqli_query($db, $select);

  $select4="SELECT * FROM features WHERE id=4 && status=1";
  $features4=mysqli_query($db, $select4);

  $select6="SELECT * FROM features WHERE id=6 && status=1";
  $features6=mysqli_query($db, $select6);

  $select7="SELECT * FROM features WHERE id=7 && status=1";
  $features7=mysqli_query($db, $select7);     
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Mordana Website</span></h2>
          <p class="animate__animated animate__fadeInUp">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animate__animated animate__fadeInUp">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>

      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">orem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
          <p class="animate__animated animate__fadeInUp">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
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

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        </div>

        <?php 
          foreach($features as $key=> $feature){
            ?>
            <div class="row" data-aos="fade-up">
              <div class="col-md-5">
                <img src="assets/portfolio/features/<?php echo$feature['image']?>" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 pt-4">
                <h3><?php echo $feature['title']?></h3>
                <p class="fst-italic"><?php echo $feature['description']?></p>
                <ul>
                  <li>
                    <i class="<?php echo $feature['icon']?>"></i><?php echo $feature['title2']?>
                  </li>
                  <li>
                    <i class="<?php echo $feature['icon']?>"></i><?php echo $feature['title2']?>
                  </li>
                </ul>
              </div>
            </div>              
            <?php
          }
        ?>

        <?php 
          foreach($features4 as $key=> $feature){
            ?>
            <div class="row" data-aos="fade-up">
              <div class="col-md-5 order-1 order-md-2">
                <img src="assets/portfolio/features/<?php echo$feature['image']?>" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 pt-5 order-2 order-md-1">
                <h3><?php echo $feature['title']?></h3>
                <p class="fst-italic"><?php echo $feature['title2']?></p>
                <p><?php echo $feature['description']?></p>
              </div>
            </div>              
            <?php
          }
        ?>

        <?php
          foreach($features6 as $key=> $feature){
            ?>
            <div class="row" data-aos="fade-up">
              <div class="col-md-5">
                <img src="assets/portfolio/features/<?php echo$feature['image']?>" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 pt-5">
                <h3<?php echo $feature['title']?></h3>
                <p><?php echo $feature['description']?></p>
                <ul>
                  <li><i class="<?php echo $feature['icon']?>"></i><?php echo $feature['title2']?></li>
                  <li><i class="<?php echo $feature['icon']?>"></i><?php echo $feature['title2']?></li>
                  <li><i class="<?php echo $feature['icon']?>"></i><?php echo $feature['title2']?></li>
                </ul>
              </div>
            </div>              
            <?php
          }
        ?>

        <?php 
          foreach($features7 as $key=> $feature){
            ?>
            <div class="row" data-aos="fade-up">
              <div class="col-md-5 order-1 order-md-2">
                <img src="assets/portfolio/features/<?php echo$feature['image']?>" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 pt-5 order-2 order-md-1">
                <h3><?php echo$feature['title']?></h3>
                <p class="fst-italic"><?php echo$feature['title2']?></p>
                <p><?php echo$feature['description']?></p>
              </div>
            </div>
            <?php
          }
        ?>
      </div>
    </section><!-- End Features Section -->
  </main><!-- End #main -->
  
<?php
  include'mordana/footer.php';
?>