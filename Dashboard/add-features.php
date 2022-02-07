<?php
  include'include/header.php';
  require_once'../db.php';  
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $title  =$_POST['title'];
    $icon   =$_POST['icon'];
    $title2 =$_POST['title2'];
    $description=$_POST['description'];
    $image  =$_FILES['image'];
    $file   =$image['tmp_name'];
    $des    =$image['name'];

    if (move_uploaded_file($file, '../assets/portfolio/features/'. $des)) {
    $insert="INSERT INTO features(title, icon, title2, description, image) VALUES ('$title','$icon', '$title2', '$description', '$des')";
      if ($title && $icon && $description && $image) {
        mysqli_query($db, $insert);
        $_SESSION['message']='Features Add Successfull';
      }else{
        // echo"Error";
      }
    }else{
      $_SESSION['message']='Features Add Error';
    }
  }   
?>
<div class="br-mainpanel">
  <div class="pd-30">
    <h6 class="tx-gray-800 mg-b-5">
      <a class="tx-white" href="dashboard.php">Dashboard /</a>
      <a class="tx-white" href="#">Features</a>
    </h6>
  </div>
  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="col-12 m-auto">
      <div class="card mt-sm-3">     
        <div class="br-section-wrapper">
          <h6 class="text-center tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Features</h6>
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
            <form action="add-features.php" method="POST" enctype="multipart/form-data">
              <div class="row mg-b-20">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Titlt: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title" value="" placeholder="Title">
                  </div>
                </div><!-- col-4 -->
               
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
                  <select class="form-control" name="icon" value="">
                    <option value="bi bi-check">Checkbox</option>                   
                  </select>
                </div>

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Titlt-2: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title2" value="" placeholder="Title">
                  </div>
                </div><!-- col-4 -->                

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="description" value="" placeholder="Description">
                  </div>
                </div>

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
