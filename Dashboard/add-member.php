<?php
  include'include/header.php';
  require_once'../db.php';
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $name       =$_POST['name'];
    $title      =$_POST['title'];
    $icon       =$_POST['icon'];
    $icon1      =$_POST['icon1'];
    $icon2      =$_POST['icon2'];
    $url        =$_POST['url'];
    $url1       =$_POST['url1'];
    $url2       =$_POST['url2'];
    $description=$_POST['description'];
    $image      =$_FILES['image'];
    $file       =$image['tmp_name'];
    $des        =$image['name'];
    if (move_uploaded_file($file, '../assets/portfolio/members/'. $des)) {
        $insert="INSERT INTO teammembers (name, title, icon, icon1, icon2, url, url1, url2, description, image) VALUES ('$name', '$title', '$icon', '$icon1', '$icon2', '$url', '$url1', '$url2', '$description', '$des')";
          mysqli_query($db, $insert);
          $_SESSION['message']='Add Successfull';
        }   
      else{
      $_SESSION['message']='Add Error';
    }
  }
?>
<div class="br-mainpanel">
  <div class="pd-30">
    <h6 class="tx-gray-800 mg-b-5">
      <a class="tx-white" href="dashboard.php">Dashboard /</a>
      <a class="tx-white" href="#">Member</a>
    </h6>
  </div>
  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="col-12 m-auto">
      <div class="card mt-sm-3">     
        <div class="br-section-wrapper">
        <h5 class="text-center tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Members</h5>
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
            <form action="add-member.php" method="POST" enctype="multipart/form-data">
              <div class="row mg-b-20">

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="name" value="" placeholder="Name" >
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title" value="" placeholder="Title">
                  </div>
                </div><!-- col-4 -->

                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
                  <select class="form-control" name="icon" value="">
                    <option value="bi bi-facebook">Facebook</option>
                    <option value="bi bi-twitter">Twitwr</option>
                    <option value="bi bi-linkedin">Linkedin</option>
                  </select>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Url: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="url" value="" placeholder="Title">
                  </div>
                </div>
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Icon1: <span class="tx-danger">*</span></label>
                  <select class="form-control" name="icon1" value="">
                    <option value="bi bi-facebook">Facebook</option>
                    <option value="bi bi-twitter">Twitwr</option>
                    <option value="bi bi-linkedin">Linkedin</option>
                  </select>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Url1: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="url1" value="" placeholder="Title">
                  </div>
                </div>                
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Icon2: <span class="tx-danger">*</span></label>
                  <select class="form-control" name="icon2" value="">
                    <option value="bi bi-facebook">Facebook</option>
                    <option value="bi bi-twitter">Twitwr</option>
                    <option value="bi bi-linkedin">Linkedin</option>                   
                  </select>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Url2: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="url2" value="" placeholder="Title">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="description" value="" placeholder="Summery">
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
