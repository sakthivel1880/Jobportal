<?php

include("inc/header.php");
include 'includes/connections.php';





if(isset($_POST['submit'])) 
{
 
 
  $fb= $_POST['fb'];
  $Instagram= $_POST['Instagram'];
  $tweet= $_POST['tweet'];
  $link = $_POST['link'];
  $youtube= $_POST['youtube'];
  


   echo $sql = "INSERT INTO `socialmedia`( `fb`, `Instagram`, `tweet`, `link`, `youtube`) VALUES ('$fb','$Instagram','$tweet','$link','$youtube')";
   

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'socialmedia.php';</script>
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
         Add social media
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add social Media</li>
      </ol>
    </section>
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Social Media </h3>
            </div>
 
            <form id="AddForm"  method="post" action="" enctype="multipart/form-data">
         
            <div class="form-group">
              <label for="InputCountry">FaceBook link</label>
              <input type="text" name="fb" class="form-control reqd" placeholder="Add socialmedia">
            </div>
             <div class="form-group">
              <label for="InputCountry">Instagram link</label>
              <input type="text" name="Instagram" class="form-control reqd" placeholder="Add title">
            </div>
             <div class="form-group">
              <label for="InputCountry">Twitter Link</label>
              <input type="text" name="tweet" class="form-control reqd" placeholder="Add title">
            </div>
             <div class="form-group">
              <label for="InputCountry">YouTube Link</label>
              <input type="text" name="youtube" class="form-control reqd" placeholder="Add title">
            </div>
             <div class="form-group">
              <label for="InputCountry">Other Link</label>
              <input type="text" name="link" class="form-control reqd" placeholder="Add title">
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


