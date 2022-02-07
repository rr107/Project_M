<?php
  require_once'../db.php';
  $select="SELECT * FROM pricing";
  $price=mysqli_query($db, $select);
  include'include/header.php';
?>
<div class="br-mainpanel">
  <div class="pd-30">
    <h6 class="tx-gray-800 mg-b-5">
      <a class="tx-white" href="dashboard.php">Dashboard /</a>
      <a class="tx-white" href="#">Price</a>
    </h6>
  </div>

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="col-12 m-auto">
      <div class="card mt-sm-3">     
        <table class="table table-bordered mt-30 text-center">
          <div class="text-center bg-dark">
            <h2>Service Price</h2>
          </div>         
            <a class="text-right" href="add-prceing.php"><i class="fa fa-plus"></i>Add</a>          
          <thead class="thead-light">
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">Title</th>
              <th class="text-center">Price</th>
              <th class="text-center">Validaty</th>
              <th class="text-center">Status</th>
            </tr>
          </thead>
          <tbody class="tx-white">
            <?php
              foreach ($price as $key => $service) {
                ?>
               <tr>
                <td class="bg-dark"><?php echo ++$key?></td>
                <td class="bg-dark"><?php echo $service['title'];?></td>
                <td class="bg-dark"><?php echo $service['doller'];?></td>
                <td class="bg-dark"><?php echo $service['validati'];?></td>
                <td class="bg-dark"><?php echo $service['status'];?></td>
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