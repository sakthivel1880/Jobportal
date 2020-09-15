<?php
include("inc/header.php");
include 'includes/connections.php';





if(isset($_GET['can_skid']))
        {
          $getid=$_GET['can_skid'];

if(isset($_POST['submit']))
{
  $skill_name= $_POST['skill_name'];

   $sql = "UPDATE `skills` SET `skill_name`= '$skill_name' WHERE can_skid ='$getid'";
 

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'view_skills.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>  



  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Edit Skills
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Skills</li>
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
$sql = "SELECT * FROM `skills` WHERE `can_skid`='$getid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
			




      			<div class="form-group">
						  <label for="exampleInputEmail1">Skills</label>
						  <input type="text" name="skill_name" class="form-control reqd" value="<?php echo $row['skill_name'] ?>" id="" placeholder="" title="Skills">
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