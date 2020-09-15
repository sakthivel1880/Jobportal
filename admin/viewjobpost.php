<?php


include 'includes/connections.php';
include_once("inc/header.php");

      
?>  
<!-- Content Wrapper. Contains page content -->
<style type="text/css">
  .btn-info {
    background-color: #00c0ef;
    border-color: #00acd6;
    padding: 0px 10px 0px 10px;
}
</style>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         view Job Post
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> view Job Post</li>
      </ol>
    </section>
    <p><a href="jobpost.php" class="colour-1">Click to Add Job Post Details</a></p>




  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary"> 
            <div class="box-header">
              <h3 class="box-title">Job Post details </h3>
              <span style="float:right;color:green">* If You Click Enable Job Will Be Showing Front</span><br>
              <span style="float:right;color:red">* If You Click Disable Job Will Be Disable Also Not Showing Front</span>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-y: auto;">
              <table id="ViewList" class="table table-bordered table-hover">
     <thead>
         <tr>  
            <th>JOB Post Type</th>  
            <th>Job Title</th> 
            <th>Job Duties</th>  
            <th>Job Responsibilities</th>   
            <th>Job Location</th>  
            <th>Job Skills</th>
            <th>Job Minimum</th>   
            <th>Job Maximum</th>  
            <th>Job Hiring</th>   
            <th>Job Link</th>   
            <th>Job Mail</th>   
            <th>Action</th>  
            <th>User Type</th>  
            <th>active status</th>  
            
        </tr>  
 </thead>
         <tbody>
 
        

<?php
    $sql = "SELECT * FROM `job_post` WHERE `active_status` NOT IN ('1');  ";
     $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
     {
        $jobp_id = $row["jobp_id"];
        $jobp_titleid = $row["jobp_titleid"];

        $sql1 = "SELECT * FROM `job_title` WHERE `jt_id`='$jobp_titleid' ";
     $result1 = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result1) > 0) {
    while($row1 = mysqli_fetch_assoc($result1))
     {
    
   
      ?> 
                    <tr>

                     

             
             <td><?php echo  $row["jobp_type"]; ?></td>   
             <td><?php echo  $row1["jt_name"]; ?></td>  
             <td><?php echo  $row["jobp_duties"]; ?></td>  
             <td><?php echo  $row["jobp_responsibilities"]; ?></td> 
             <td><?php echo  $row["jobp_location"]; ?></td>  
             <td><?php echo  $row["jobp_skills"]; ?></td> 
             <td><?php echo  $row["jobp_minsal"]; ?></td>  
             <td><?php echo  $row["jobp_maxsal"]; ?></td>  
             <td><?php echo  $row["jobp_hirepersons"]; ?></td>  
             <td><?php echo  $row["jobp_link"]; ?></td>  
             <td><?php echo  $row["jobp_refmail"]; ?></td>
             <td>
                 <a href="editjobpost.php?jobp_id=<?php echo $row["jobp_id"] ?>" class="btn btn-xs btn-success ">Edit</a>
                  <a href="delete.php?jobp_id=<?php echo $row["jobp_id"] ?>" class="btn btn-xs btn-danger">Delete</a> 
             </td>

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
                        <?php if($row["active_status"] == '2'){
                        ?>
                         <a href="jobpostalsts.php?Enable=<?php echo $row["jobp_id"] ?>" class="btn btn-xs btn-success">Enable</a>
                      <?php } else {
                        ?>
                         <a href="jobpostalsts.php?Disbale=<?php echo $row["jobp_id"] ?>" class="btn btn-xs btn-danger">Disbale</a>
                        <?php
                         }?>
            </td>
                     
                     </tr>





                       <?php
                        }
                      }
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