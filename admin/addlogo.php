<?php

include("inc/header.php");
include 'includes/connections.php';





if(isset($_POST['submit'])) 
{
  move_uploaded_file($_FILES["logo"]["tmp_name"],'logo/' . $_FILES["logo"]["name"]);
 $logo=$_FILES["logo"]["name"];

  $title= $_POST['title'];


   $sql = "INSERT INTO `logo`(`title`, `logo`) VALUES ('$title','$logo')";

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'logo.php';</script>
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
         Add logo
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add logo</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add logo </h3>
            </div>
 
            <form id="AddForm"  method="post" action="" enctype="multipart/form-data">
          <div class="">
            <div class="form-group">
              <label for="InputCountry"> logo</label>
              <input type="file" name="logo" class="form-control reqd" placeholder="Add logo">
            </div>
             <div class="form-group">
              <label for="InputCountry">Title</label>
              <input type="text" name="title" class="form-control reqd" placeholder="Add title">
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


