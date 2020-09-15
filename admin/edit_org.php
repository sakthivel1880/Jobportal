<?php
include("inc/header.php");
include 'includes/connections.php';





if(isset($_GET['org_id']))
        {
          $getid=$_GET['org_id'];

if(isset($_POST['submit']))
{
  $org_type= $_POST['org_type'];

   $sql = "UPDATE `organisation` SET `org_type`= '$org_type' WHERE org_id ='$getid'";
 

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'view_org.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>  



  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Edit organisation
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit organisation</li>
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
$sql = "SELECT * FROM `organisation` WHERE `org_id`='$getid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
			




      			<div class="form-group">
						  <label for="exampleInputEmail1">organisation</label>
						  <input type="text" name="org_type" class="form-control reqd" value="<?php echo $row['org_type'] ?>" id="" placeholder="" title="organisation">
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