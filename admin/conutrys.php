<?php

include("inc/header.php");
include 'includes/connections.php';
if(isset($_POST['submit']))
{
  $cnname= $_POST['cnname'];
  $phonecode= $_POST['phonecode'];
  $phone_length= $_POST['phone_length'];
  $country_currency=$_POST['country_currency'];

   $sql1 = "SELECT * FROM `country` WHERE `cnname` = '$cnname' OR `phonecode`='$phonecode' ";
  $result1=mysqli_query($conn,$sql1);
  $num_row=mysqli_num_rows($result1);
  if($num_row > 0){
   echo "Already Inserted country name";
   $_SESSION['Inert'] = "Already Inserted country name,phone code,phone length";
  }
  else {
    $sql = "INSERT INTO `country`(`cnname`, `phonecode`, `phone_length`,`country_currency`) VALUES ('$cnname','$phonecode','$phone_length','$country_currency')";
  if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'viewconutrys.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

  }

 

}

?>  
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Add countries
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add countries</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add countries</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="AddForm"  method="post" action="">
             <?php
             if(isset($_SESSION['Inert'])){
              ?>
              <div style="height: 40px;"></div>
              <div class="alert alert-danger">
                <span><center>
                <?php echo $_SESSION['Inert'];
                unset($_SESSION['Inert']); 
                ?>
                </center></span>
              </div>
<?php } ?>
          <div class="box-body col-md-6">

            <div class="form-group">
              <label for="InputCountry">countries</label>
              <input type="text" name="cnname" class="form-control reqd" placeholder=" countries" required>
            </div>

            <div class="form-group">
              <label for="InputCountry">Phone Code</label>
              <input type="text" name="phonecode" class="form-control reqd" placeholder=" Phone Code" required>
            </div>

            <div class="form-group">
              <label for="InputCountry">Phone Number Lenth</label>
              <input type="text" name="phone_length" class="form-control reqd" placeholder="Phone Number Lenth" required>
            </div>
            
             <div class="form-group">
               <label for="InputCountry">Currency</label>
             <select  name="country_currency" class="form-control reqd" autocomplete="off" required>
               <option value="">--SELECT CURRENCY--</option>





          <?php
            $sql1="SELECT * FROM `currency_type` ";
            $res1=mysqli_query($conn,$sql1);
            $options = "";

            while($row3 = mysqli_fetch_array($res1))
            {
            echo   "<option value=".$row3['cur_code'].">".$row3['cur_code']. "&nbsp&nbsp(".$row3['cur_name'].")"."</option>";

            }
            ?>
             </select>
            </div>
            
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