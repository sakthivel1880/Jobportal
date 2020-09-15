<?php

include("inc/header.php");
include 'includes/connections.php';





if(isset($_POST['submit'])) 
{
  $dept_name= $_POST['dept_name'];
  $qua_id= $_POST['qua_id'];

   $sql = "INSERT INTO `edu_quali_dept`(`dept_name`, `edu_id`) VALUES ('$dept_name','$qua_id')";
if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'view_category.php';</script>
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
         Add Education Qualification Department
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add Education Qualification Department</li>
      </ol>
    </section>
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Education Qualification Department </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="AddForm"  method="post" action="">
					<div class="">
            <?php 
           $query  = "SELECT * FROM `edu_quali`";

           $result = mysqli_query($conn,$query);


            ?>
						<div class="form-group">

						  <label for="InputCountry">Education Qualification Department</label>
						<select class="form-group" name="qua_id">

            <?php while($row1 = mysqli_fetch_array($result)):;?>

            <option value="<?php echo $row1['qua_id'];?>"><?php echo $row1['qua_name'];?></option>

            <?php endwhile;?>

        </select>
						</div>


	
					</div>

          <div class="">
            <div class="form-group">
              <label for="InputCountry"> Education Qualification Department</label>
              <input type="text" name="dept_name" class="form-control reqd" placeholder=" Add Category" title=" Add Category">
            </div>
            
          </div>
					  <!-- /.box-body -->
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
  <!-- /.content-wrapper -->
  
<?php include_once("inc/footer.php") ?>
<!-- mpp\htdocs\htdocs\new admin\category.php on line 13
Error: INSERT INTO `edu_quali_dept`(`dept_name`, `edu_id`) VALUES ('ddd','')
Cannot add or update a child row: a foreign key constraint fails (`job_portal`.`edu_quali_dept`, CONSTRAINT `edu_quali_dept_ibfk_1` FOREIGN KEY (`edu_id`) REFERENCES `edu_quali` (`qua_id`) ON DELETE CASCADE ON  -->