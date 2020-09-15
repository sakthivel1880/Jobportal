<?php

include("inc/header.php");
include 'includes/connections.php';





if(isset($_POST['submit'])) 
{
 
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $address= $_POST['address'];


   $sql = "INSERT INTO `contact`(`email`, `phone`, `address`) VALUES ('$email','$phone','$address')";

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'contact.php';</script>
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
         Add contact
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add contact</li>
      </ol>
    </section>
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add contact </h3>
            </div>
 
            <form id="AddForm"  method="post" action="" enctype="multipart/form-data">
          <div class="">
            <div class="form-group">
              <label for="InputCountry"> Email</label>
              <input type="text" name="email" class="form-control reqd" placeholder="Add contact">
            </div>
             <div class="form-group">
              <label for="InputCountry">Phone</label>
              <input type="text" name="phone" class="form-control reqd" placeholder="Add title">
            </div>
             <div class="form-group">
              <label for="InputCountry">Address</label>
              <input type="text" name="address" class="form-control reqd" placeholder="Add title">
            </div>
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
  <!-- /.content-wrapper -->
  
<?php include_once("inc/footer.php") ?>


