<?php
  include'include/header.php';
  require_once'../db.php';
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $title   =$_POST['title'];
    $icon    =$_POST['icon'];
    $category=$_POST['category'];
    if ($title && $icon && $category) {
      $insert="INSERT INTO whyus (title, icon, category) VALUES ('$title', '$icon', '$category')";
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
      <a class="tx-white" href="service.php">WhyUs</a>
    </h6>
  </div>
  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="col-12 m-auto">
      <div class="card mt-sm-3">     
        <div class="br-section-wrapper">
        <h5 class="text-center tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add WhyUs</h5>
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
            <form action="add-whyus.php" method="POST" enctype="multipart/form-data">
              <div class="row mg-b-20">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Titlt: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title" value="" placeholder="Portfolio Title">
                  </div>
                </div><!-- col-4 -->

                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
                  <select class="form-control" name="icon" value="">
                    <option value="bx bx-fingerprint">Fingerprint</option>
                    <option value="bx bx-gift">Gift Box</option>                   
                  </select>
                </div>                

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="category" value="" placeholder="Category" >
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
