<?php
  require_once'../db.php';
  $select="SELECT * FROM services";
  $services=mysqli_query($db, $select);
  include'include/header.php';
?>
<div class="br-mainpanel">
  <div class="pd-30">
    <h6 class="tx-gray-800 mg-b-5">
      <a class="tx-white" href="dashboard.php">Dashboard /</a>
      <a class="tx-white" href="#">Services</a>
    </h6>
  </div>

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="col-12 m-auto">
      <div class="card mt-sm-3">     
        <table class="table table-bordered mt-30 text-center">
          <div class="text-center bg-dark">
            <h2>Our Services</h2>
          </div>         
            <a class="text-right" href="add-service.php"><i class="fa fa-plus"></i>Add</a>

          <?php
            if (isset($_SESSION['changestatus'])) {
              ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['changestatus'] ?>!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['changestatus']);
            }
          ?> 
            
          <thead class="thead-light">
            <tr>
            <th class="text-center">ID</th>
              <th class="text-center">Titlt</th>
              <th class="text-center" style="width:350px">Summery</th>
              <th class="text-center">Icon</th>
              <th class="text-center">Status</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody class="tx-white">
            <?php
              foreach ($services as $key => $service) {
                ?>
              <tr>
                <td class="bg-dark"><?php echo ++$key?></td>
                <td class="bg-dark"><?php echo $service['title'];?></td>
                <td class="bg-dark"><?php echo $service['description'];?></td>
                <td class="bg-dark"><?php echo $service['icon'];?></td>
                <td class="bg-dark"><?php
                      if ($service['status']==1) {
                        ?>
                        <a href="status/s-status.php?sstatus_id=<?php echo $service['id']?>" class="btn btn-secondary">Active</a>
                        <?php
                      }else{
                        ?>
                        <a href="status/s-status.php?sstatus_id=<?php echo $service['id']?>" class="btn btn-danger">Deactive</a>
                        <?php
                      }
                    ?>  
                </td>
                <td class="bg-dark">
                  <?php
                    if ($service['status']==1) {
                      ?>
                        <a href="#?edit_id=<?php echo$service['id']?>" class="btn btn-secondary">Edit</a>
                        <a href="delete/s-delete.php?delete_id=<?php echo$service['id']?>" class="btn btn-danger">Delete</a>
                      <?php
                    }else{
                      ?>
                        <a class="btn btn-danger">Access Denied</a>
                      <?php
                    }
                  ?>
                </td>
              </tr>
              <?php
              }
            ?>          
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include'include/footer.php'?>