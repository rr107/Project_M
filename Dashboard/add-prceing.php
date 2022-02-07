<?php
  include'include/header.php';
  require_once'../db.php';  
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $title =$_POST['title'];
    $doller=$_POST['doller'];
    $validati=$_POST['validati'];
    $p1    =$_POST['p1'];
    $p2    =$_POST['p2'];
    $p3    =$_POST['p3'];
    $p4    =$_POST['p4'];
    $p5    =$_POST['p5'];
    $icon  =$_POST['icon'];
    $url   =$_POST['url'];

    $insert="INSERT INTO pricing(title, doller, validati, p1, p2, p3, p4, p5, icon, url) VALUES ('$title', '$doller', '$validati', '$p1', '$p2', '$p3', '$p4', '$p5', '$icon', '$url')";
    mysqli_query($db, $insert);
    $_SESSION['message']='Price Add Successfull';
  }else{
    $_SESSION['message']='Price Add Error';
  }
?>
<div class="br-mainpanel">
  <div class="pd-30">
    <h6 class="tx-gray-800 mg-b-5">
      <a class="tx-white" href="dashboard.php">Dashboard /</a>
      <a class="tx-white" href="service.php">Priceing</a>
    </h6>
  </div>
  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="col-12 m-auto">
      <div class="card mt-sm-3">     
        <div class="br-section-wrapper">
          <h6 class="text-center tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Price</h6>
          <?php
            if (isset($_SESSION['message'])) {
              ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['message'] ?>!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['message']);
            }
          ?>           
          <div class="form-layout form-layout-1">
            <form action="add-prceing.php" method="POST">
              <div class="row mg-b-20">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Titlt: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title" value="" placeholder="Service Title">
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Doller: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="doller" value="" placeholder="Service Price">
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Time: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="validati" value="" placeholder="Service Time">
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">p1: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="p1" value="" placeholder="p1">
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">p2: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="p2" value="" placeholder="p2">
                  </div>
                </div>


                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">p3: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="p3" value="" placeholder="p3">
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">p4: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="p4" value="" placeholder="p4">
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">p5: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="p5" value="" placeholder="p5">
                  </div>
                </div>

                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
                  <select class="form-control" name="icon" value="">
                    <option value="bx bx-check">Right Check</option>
                    <option value="bx bx-x">Chrose Check</option>
                  </select>
                </div>

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">url: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="url" value="" placeholder="Service Link">
                  </div>
                </div>

                </div>
                <div class="form-layout-footer">
                  <button class="btn btn-info">Submit Form</button>
              </div>
            </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="br-footer">
  <div class="footer-left">
    <div class="tx-white" class="mg-b-2">Copyright &copy; 2017. All Rights Reserved By Nazmul Islam.</div>
  </div>
</footer>
</div>
<?php include'include/footer.php';?>
