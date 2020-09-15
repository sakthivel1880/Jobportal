<?php
include("inc/header.php");
include 'includes/connections.php';





if(isset($_GET['jty_id']))
        {
          $getid=$_GET['jty_id'];

if(isset($_POST['submit']))
{
  $jobtype= $_POST['jobtype'];

   $sql = "UPDATE `job_type` SET `jty_name`= '$jobtype' WHERE jty_id ='$getid'";
 

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'view_jobtype.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?> 



  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Edit Job Type
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Job Type</li>
      </ol>
    </section>
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="AddForm" role="form" action="" method="post">
					<div class="box-body col-md-6">
						
           


            <?php
$sql = "SELECT * FROM `job_type` WHERE `jty_id`='$getid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
			




      			<div class="form-group">
						  <label for="exampleInputEmail1">Job Type</label>
						  <input type="text" name="jobtype" class="form-control reqd" value="<?php echo $row['jty_name'] ?>" id="" placeholder="" title="Job Type">
						</div>


					<?php
      
       }
} }

          ?>


					
					</div>
					 
					  <div class="clearfix"></div>
					<div class="box-footer">
						<input name="submit" type="submit" class="btn btn-primary">
					</div>
            </form>
          </div>
          


        </div>
     </div>
	</section>
  </div>
  
  
<?php 



include_once("inc/footer.php") ?>