<?php 
include_once("inc/header.php");

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Job</h3>

              
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="view_jobtitle.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> Education<sup style="font-size: 20px"></sup></h3>

              
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="view_qulification.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Experience </h3>

              
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="view_dep.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Ads</h3>

              
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="viewadsuser.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->




      <div class="row">
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              <li><a href="#sales-chart" data-toggle="tab"></a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div>
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                        title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Exists</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>


 <section class="content">
      <div class="row">
         <!-- <p><a href="sinupreg.php" class="colour-1">Click to Add Candidate Details</a></p> -->
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary"> 
            <div class="box-header">
              <h3 class="box-title">Candidate List </h3>
             <a href="viewcandidate.php"> <h3 class="box-title" style="margin-left: 80%;">More Details </h3></a>
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
            <!-- <th>Action</th>  --> 
            
        </tr>  
 </thead>
         <tbody>

        

<?php
    $sql = "SELECT * FROM `profile` WHERE `profile_status` = '1' AND `p_no` = '0000'";

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
                     
                    
                      <!-- <td>
               <a href="editsignup.php?pid=<?php echo $row['pid']; ?>" class="btn btn-xs btn-success ">Edit</a></i>
              <a href="delete.php?pid=<?php echo $row["pid"] ?>" class="btn btn-xs btn-danger">Delete</a>

                      </td> -->
                     
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









  <section class="content">
      <div class="row">
        <!--  <p><a href="companydetails.php" class="colour-1">Click to Add Company Details Details</a></p> -->
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary"> 
            <div class="box-header">
              <h3 class="box-title">Company Details List</h3>
               <a href="viewcompanydetails.php"> <h3 class="box-title" style="margin-left: 80%;">More Details </h3></a>
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
              
            <!-- <th>Action</th>   -->
            
        </tr>  
 </thead>
         <tbody>

        

<?php

    $sql = "SELECT * FROM `company_profile` WHERE `entry_type` = '1' AND `status` = '1'";
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
              
                     
                    <!-- 
                      <td>
               <a href="companyedit.php?company_id=<?php echo $row["company_id"] ?>" class="btn btn-xs btn-success ">Edit</a></i>
              <a href="delete.php?company_id=<?php echo $row["company_id"] ?>" class="btn btn-xs btn-danger">Delete</a>

                      </td> -->
                     
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


  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary"> 
            <div class="box-header">
              <h3 class="box-title">Job Post List </h3>
               <a href="viewjobpost.php"> <h3 class="box-title" style="margin-left: 80%;">More Details </h3></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-y: auto;">
              <table id="ViewList" class="table table-bordered table-hover">
     <thead>
         <tr>  
            <th>JOB Post Type</th>  
            <th>Job Duties</th>  
            <th>Job Responsibilities</th>  
            <th>Job Description</th>  
            <th>Job Location</th>  
            <th>Job Skills</th>  
            <th>Job Maximum</th>   
            <th>Job Minimum</th>   
            <th>Job Hiring</th>   
            <th>Job Link</th>   
            <th>Job Mail</th>   
            <!-- <th>Action</th>   -->
            
        </tr>  
 </thead>
         <tbody>

        

<?php
    $sql = "SELECT * FROM `job_post` WHERE `active_status` = '0' AND `entry_type` = '1'";
     $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
     {
        $jobp_id = $row["jobp_id"];
    
   
      ?> 
                    <tr>

                     

             
             <td><?php echo  $row["jobp_type"]; ?></td>  
             <td><?php echo  $row["jobp_duties"]; ?></td>  
             <td><?php echo  $row["jobp_responsibilities"]; ?></td>  
             <td><?php echo  $row["jobp_description"]; ?></td>  
             <td><?php echo  $row["jobp_location"]; ?></td>  
             <td><?php echo  $row["jobp_skills"]; ?></td>  
             <td><?php echo  $row["jobp_maxsal"]; ?></td>  
             <td><?php echo  $row["jobp_minsal"]; ?></td>  
             <td><?php echo  $row["jobp_hirepersons"]; ?></td>  
             <td><?php echo  $row["jobp_link"]; ?></td>  
             <td><?php echo  $row["jobp_refmail"]; ?></td>  
                     
               <!--      
                      <td>
               <a href="editjobpost.php?jobp_id=<?php echo $row["jobp_id"] ?>" class="btn btn-xs btn-success ">Edit</a></i>
              <a href="delete.php?jobp_id=<?php echo $row["jobp_id"] ?>" class="btn btn-xs btn-danger">Delete</a>

                      </td> -->
                     
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











    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <?php include 'inc/footer.php'; ?>