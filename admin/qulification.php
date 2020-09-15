<?php

include("inc/header.php");
include 'includes/connections.php';






if(isset($_POST['submit']))
{
  $qua_name = $_POST['qua_name'];
  // $cat_name= $_POST['name'];
  
 
    $sql = "INSERT INTO `edu_quali`(`qua_name`) VALUES ('$qua_name')";

if ($conn->query($sql) === TRUE) 
{
  
  ?>
  <script type="text/javascript">location.href = 'view_qulification.php';</script>
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
         Education Qulification  
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Education Qulification   </li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="AddForm"  method="post" action="">
          <div class="box-body col-md-6">
 

         

       
          <div class="form-group">
              <label for="InputCountry"> Education Qulification  </label>
              <input type="text" name="qua_name" class="form-control reqd" placeholder="Education Qulification" title=" Education Qulification ">
            </div>
           

            <!-- <div class="form-group">
              <label for="InputCountry"> Education Qulification   category</label>
              <select type="select" class="form-control" name="name">
        <option>--Education Qulification category--</option>
            <?php echo $options1;?>
        </select>
            </div> -->
            


            
          </div>
            <!-- /.box-body -->
            <div class="clearfix"></div>
          <div class="box-footer">
            <input name="submit" type="submit" class="btn btn-primary">
          </div>
            </form>
          </div>
          <!-- /.box -->


        </div>
     </div>
  </section>
  </div>
  <!-- /.content-wrapper -->
  
<?php include_once("inc/footer.php") ?>