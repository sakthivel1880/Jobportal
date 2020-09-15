<?php
include("inc/header.php");
include 'includes/connections.php';





if(isset($_GET['ctid']))
        {
          $getid=$_GET['ctid'];

if(isset($_POST['submit']))
{
 
  $ctname= $_POST['ctname'];



   $sql = "UPDATE `city` SET `ctname`='$ctname' WHERE `ctid` ='$getid'";
 
if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'viewcitys.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?> 



  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Edit Cities
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Cities</li>
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
 $sql = "SELECT * FROM `city` WHERE `ctid`='$getid'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
			




      			<div class="form-group">
						  <label for="exampleInputEmail1">Cities</label>
						  <input type="text" name="ctname" class="form-control reqd" value="<?php echo $row['ctname'] ?>"  placeholder="" required >
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