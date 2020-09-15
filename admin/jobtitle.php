<?php

include("inc/header.php");
include 'includes/connections.php';
if(isset($_POST['submit']))
{
  $jobtitle= $_POST['jobtitle'];

   $sql = "INSERT INTO `job_title`(`jt_name`) VALUES ('$jobtitle')";
 

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'view_jobtitle.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>	
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Add Job Title
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add Job Title</li>
      </ol>
    </section>
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="AddForm"  method="post" action="">
					<div class="box-body col-md-6">
						<div class="form-group">
						  <label for="InputCountry"> Add Job Title</label>
						  <input type="text" name="jobtitle" class="form-control reqd" placeholder=" Add Job Title" title=" Add Job Title">
						</div>
						
					</div>
					  <!-- /.box-body -->
					  <div class="clearfix"></div>
					<div class="box-footer">
						<input name="submit" type="submit" class="btn btn-primary">
					</div>
            </form>
          </div>
          <!-- /.box -->


        </div>
     </div>
	</section>
  </div>
  <!-- /.content-wrapper -->
  
<?php include_once("inc/footer.php") ?>