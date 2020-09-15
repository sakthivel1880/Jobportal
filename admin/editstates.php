<?php
include("inc/header.php");
include 'includes/connections.php';





if(isset($_GET['stid']))
        {
          $getid=$_GET['stid'];

if(isset($_POST['submit']))
{
 
  $stname= $_POST['stname'];



   $sql = "UPDATE `state` SET `stname`='$stname' WHERE stid ='$getid'";
 
if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'viewstates.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?> 



  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Edit States
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit States</li>
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
 $sql = "SELECT * FROM `state` WHERE `stid`='$getid'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
			




      			<div class="form-group">
						  <label for="exampleInputEmail1">Conutry</label>
						  <input type="text" name="stname" class="form-control reqd" value="<?php echo $row['stname'] ?>"  placeholder="" required >
						</div>


          



					<?php
      
       }
  } 
}
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