<?php
include("inc/header.php");
include 'includes/connections.php';





if(isset($_GET['contact_id']))
        {
          $getid=$_GET['contact_id'];

if(isset($_POST['submit'])) 
{
 
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $address= $_POST['address'];

  $sql = "UPDATE `contact` SET `email`='$email',`phone`='$phone',`address`='$address' WHERE `contact_id` ='$getid'";

 

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'contact.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?> 



  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Edit contact
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit contact</li>
      </ol>
    </section>
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit contact</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="AddForm" role="form" action="" method="post" enctype="multipart/form-data">
					<div class="box-body col-md-6">
						
           


            <?php
$sql = "SELECT * FROM `contact` WHERE `contact_id`='$getid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
			




      			 <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="email" class="form-control reqd" value="<?php echo $row['email'] ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Phone</label>
              <input type="text" name="phone" class="form-control reqd" value="<?php echo $row['phone'] ?>" id="" placeholder="" title="Job Title">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Address</label>
              <input type="text" name="address" class="form-control reqd" value="<?php echo $row['address'] ?>" id="" placeholder="" title="Job Title">
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