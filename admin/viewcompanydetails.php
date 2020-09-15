<?php


include 'includes/connections.php';
include_once("inc/header.php");

      
?>  
<!-- Content Wrapper. Contains page content -->



  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         view Company Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> view Company Details</li>
      </ol>
    </section>


    
    <p><a href="companydetails.php" class="colour-1">Click to Add Company Details Details</a></p>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary"> 
            <div class="box-header">
              <h3 class="box-title">Ads User details </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-y: auto;">
              <table id="ViewList" class="table table-bordered table-hover">
     <thead>
         <tr>  
            <th>Company Name</th>  
            <th>Company Email</th>  
            <th>Company Phone No</th>  
            <th>Company Address</th>  
            <th>Pin code</th>  
            <th>User Type</th>  
            <th>Action</th>  
            
        </tr>  
 </thead>
         <tbody>

        

<?php

    $sql = "SELECT * FROM `company_profile` WHERE `status` = '1'";
     $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
     {
        $company_id = $row["company_id"];
    
   
      ?> 
                    <tr>

                     

             
             <td><?php echo  $row["company_name"]; ?></td>  
             <td><?php echo  $row["company_email"]; ?></td>  
             <td><?php echo  $row["company_phone"]; ?></td>  
             <td><?php echo  $row["company_address"]; ?></td>  
             <td><?php echo  $row["company_pincode"]; ?></td>  
              
               <td>
                        <?php if($row["entry_type"] == '1'){
                        ?>
                        
                         <button class="btn btn-xs btn-warning">Admin</button> 
                      <?php } else {
                        ?>
                          <button class="btn btn-xs btn-info">User</button>
                        <?php

                         } ?>

                 </td>
                     
                    
                      <td>
                            <a href="companyedit.php?company_id=<?php echo $row["company_id"] ?>" class="btn btn-xs btn-success ">Edit</a>
                            <a href="delete.php?company_id=<?php echo $row["company_id"] ?>" class="btn btn-xs btn-danger">Delete</a>
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