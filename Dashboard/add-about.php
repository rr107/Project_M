<?php
  include'include/header.php';
  require_once'../db.php';
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $title      =$_POST['title'];
    $title1     =$_POST['title1'];
    $title2     =$_POST['title2'];
    $title3     =$_POST['title3'];
    $title4     =$_POST['title4'];
    $icon       =$_POST['icon'];
    $paragrap   =$_POST['paragrap'];
    $category   =$_POST['category'];
    $image      =$_FILES['image'];
    $file=$image['tmp_name'];
    $des=$image['name'];
    if (move_uploaded_file($file, '../assets/portfolio/about/'. $des)) {
      $insert="INSERT INTO abouts(title, title1, title2, title3, title4, icon, paragrap, category, image) VALUES ('$title', '$title1', '$title2', '$title3', '$title4', '$icon', '$paragrap', '$category', '$des')";
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
      <a class="tx-white" href="service.php">About_Us</a>
    </h6>
  </div>
  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="col-12 m-auto">
      <div class="card mt-sm-3">     
        <div class="br-section-wrapper">
        <h5 class="text-center tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add AboutUs</h5>
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
            <form action="add-about.php" method="POST" enctype="multipart/form-data">
              <div class="row mg-b-20">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Titlt: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title" value="" placeholder="Title" >
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Titlt-1: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title1" value="" placeholder="Title" >
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Titlt-2: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title2" value="" placeholder="Title" >
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Titlt-3: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title3" value="" placeholder="Title" >
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Titlt-4: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title4" value="" placeholder="Title" >
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
                    <label class="form-control-label">Paragrap: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="paragrap" value="" placeholder="Category" >
                  </div>
                </div>                 

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Summery: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="category" value="" placeholder="Summery" >
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
