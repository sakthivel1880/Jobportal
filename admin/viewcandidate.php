<?php


include 'includes/connections.php';
include_once("inc/header.php");

      
?>  
<!-- Content Wrapper. Contains page content -->



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         view Candidate
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> view Candidate</li>
      </ol>
    </section>
    <p><a href="sinupreg.php" class="colour-1">Click to Add Candidate Details</a></p>



    
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
            <th>First Name</th>  
            <th>Last Name</th>  
            <th>Gender</th>  
            <th>User Name</th>  
            <th>Email</th>  
            <th>Password</th>  
            <th>Mobile</th>   
            <th>Experience</th>   
            <th>Address</th>   
            <th>Collage </th>   
            <th>User Type</th>   
            <th>Action</th>  
            
        </tr>  
 </thead>
         <tbody>

        

<?php
    $sql = "SELECT * FROM `profile` WHERE `profile_status` = '1'";

     $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
     {
        $pid = $row["pid"];
    
   
      ?> 
                    <tr>

                     

             
             <td><?php echo  $row["pfname"]; ?></td>  
             <td><?php echo  $row["plname"]; ?></td>  
             <td><?php echo  $row["pgender"]; ?></td>  
             <td><?php echo  $row["pusername"]; ?></td>  
             <td><?php echo  $row["pemail"]; ?></td>  
             <td><?php echo  $row["ppassword"]; ?></td>  
             <td><?php echo  $row["pmobile"]; ?></td>  
             <td><?php echo  $row["pexprience"]; ?></td>  
             <td><?php echo  $row["paddress"]; ?></td>


             <td style="width: 160px;"> <?php 
          $sql1 = "SELECT * FROM `profile_educ` WHERE `edu_rpid` = '$pid'";
         $result1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result1) > 0) {
         while($row1 = mysqli_fetch_assoc($result1)){
               $clg = $row1["edu_ins"];
             } 
         }
		  echo $clg;
		 if(empty($clg)){
			 
		 }else{
				$stripped = str_replace(' ', '', $clg);
              //$sql2 ="SELECT * FROM `colleages` WHERE `colleage_name` = '$clg'";
              $sql2 = "SELECT * FROM `colleages` WHERE upper(`clgname`)= upper('$stripped')";
             $result2 = mysqli_query($conn,$sql2);
             if(mysqli_num_rows($result2) > 0){
              	while ($row2 =mysqli_fetch_assoc($result2)) {
              		 echo $row2['colleage_name'];
              	}
              }else{
               echo $clg;
                ?> <a href="adduserclg.php?userid=<?php echo $row["pid"]; ?>&&clg=<?php echo $clg ?>"><button class='btn btn-xs btn-warning'>check clg</button></a>
                <?php
             }
		 }

   

             ?>  </td> 



                     
                 <td>

                          <?php if($row["entry_type"] == '1'){
                        ?>
                        
                         <button class="btn btn-xs btn-warning">Admin</button> 
                      <?php } else {
                        ?>
                          <button class="btn btn-xs btn-info">User</button>
                        <?php

                         }?>


                 </td>
                    
                      <td>
               <a href="editsignup.php?pid=<?php echo $row['pid']; ?>" class="btn btn-xs btn-success ">Edit</a></i>
              <a href="delete.php?pid=<?php echo $row["pid"] ?>" class="btn btn-xs btn-danger">Delete</a>

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