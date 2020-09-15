<?php


include 'includes/connections.php';
include_once("inc/header.php");

      
?>  
<!-- Content Wrapper. Contains page content -->



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Ads Users Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Ads Users Details</li>
      </ol>
    </section>
    <p><a href="adsusertable.php" class="colour-1">Click to Add User Details</a></p>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary"> 
            <div class="box-header">
              <h3 class="box-title">Ads User details </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="ViewList" class="table table-bordered table-hover">
                <thead>
         <tr>  
            <th>User Name</th>  
            <th>Phone Number</th>  
            <th>Address</th>  
            <th>Company Name</th>  
            <th>Wallet</th>  
            <th>Advertisement Department</th>  
            <th>Email</th>   
            <th>Action</th>  
            <th>Active Status</th>  
        </tr>  
                </thead>
         <tbody>

        

<?php
    $sql = "SELECT * FROM `ads_user` WHERE `delete_sts` = 0";

     $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
     {
        $ads_user_id = $row["ads_user_id"];
    
   
      ?> 
                    <tr>

                     

             
             <td><?php echo  $row["username"]; ?></td>  
             <td><?php echo  $row["phone"]; ?></td>  
             <td><?php echo  $row["address"]; ?></td>  
             <td><?php echo  $row["company"]; ?></td>  
             <td><?php echo  $row["wallet"]; ?></td>  
             <td><?php echo  $row["department"]; ?></td>  
             <td><?php echo  $row["email"]; ?></td>  
                     
                    
                      <td>

                <a href="editadsuser.php?ads_user_id=<?php echo $row["ads_user_id"] ?>" class="btn btn-success btn-xs">Edit</a> 
              <a href="delete.php?ads_user_id=<?php echo $row["ads_user_id"] ?>" class="btn btn-xs btn-danger">Delete</a>
              <a href="adstable.php?ads_user_id=<?php echo $row["ads_user_id"] ?>" class="btn btn-xs btn-primary">Add Ads</a>
                
                     
                      </td>
                      <td>
                        <?php if($row["active_status"] == 0){
                        ?>
                        <a href="adsuseractive.php?Enable=<?php echo $row["ads_user_id"] ?>" class="btn btn-xs btn-warning">Enable</a>
                      <?php } else {
                        ?>
                         <a href="adsuseractive.php?Disbale=<?php echo $row["ads_user_id"] ?>" class="btn btn-xs btn-warning">Disbale</a>
                        <?php
                         }?>
                      </td>
                     </tr>





                       <?php
                        }
} else {
    echo "0 results";
} 
                       ?>

                     




                      </tbody>
               </table>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
     </div>
  </section>
  </div>

  <!-- /.content-wrapper -->
  
<?php 


include_once("inc/footer.php") ?>