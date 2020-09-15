<?php
include("inc/header.php");
include 'includes/connections.php';





if(isset($_GET['depart_id']))
        {
          $getid=$_GET['depart_id'];

if(isset($_POST['submit']))
{
  $depart_name= $_POST['depart_name'];

   $sql = "UPDATE `department` SET `depart_name`= '$depart_name' WHERE depart_id ='$getid'";
 

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'view_dep.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?> 



  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Edit  Experience Department
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit  Experience Department</li>
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
$sql = "SELECT * FROM `department` WHERE `depart_id`='$getid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
			




      			<div class="form-group">
						  <label for="exampleInputEmail1"> Experience Department</label>
						  <input type="text" name="depart_name" class="form-control reqd" value="<?php echo $row['depart_name'] ?>" id="" placeholder="" title="Job Title">
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