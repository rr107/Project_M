<?php
  include'include/header.php';
  require_once'../db.php';
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $title      =$_POST['title'];
    $summery    =$_POST['summery'];
    $image      =$_FILES['image'];
    $file       =$image['tmp_name'];
    $des        =$image['name'];

    if (move_uploaded_file($file, '../assets/portfolio/plan/'. $des)) {
      $insert="INSERT INTO servicesplan(title, summery, image) VALUES ('$title', '$summery', '$des')";
      mysqli_query($db, $insert);
      $_SESSION['message']='Add Successfull';
    }else{
      $_SESSION['message']='Add Error';
    }

  }
?>
<div class="br-mainpanel">
  <div class="pd-30">
    <h6 class="tx-gray-800 mg-b-5">
      <a class="tx-white" href="dashboard.php">Dashboard /</a>
      <a class="tx-white" href="service.php">Our Plan</a>
    </h6>
  </div>
  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="col-12 m-auto">
      <div class="card mt-sm-3">     
        <div class="br-section-wrapper">
        <h5 class="text-center tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add New Plan</h5>
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
            <form action="add-plan.php" method="POST" enctype="multipart/form-data">
              <div class="row mg-b-20">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Titlt: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title" value="" placeholder="Plan Title" >
                  </div>
                </div><!-- col-4 -->             

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Summery: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="summery" value="" placeholder="description">
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="file" name="image">
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
</div>
<?php include'include/footer.php';?>
