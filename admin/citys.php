<?php

include("inc/header.php");
include 'includes/connections.php';
if(isset($_POST['submit']))
{
  $ctname= $_POST['ctname'];
  $stid= $_POST['stid'];
  


  $sql1 = "SELECT * FROM `city` WHERE `ctname` = '$ctname' AND `stid`='$stid'";
  $result1=mysqli_query($conn,$sql1);
  $num_row=mysqli_num_rows($result1);
  if($num_row > 0){
   $_SESSION['Inert'] = "Already  Existing This city";
  }
  else {
  $sql = "INSERT INTO `city`(`ctname`,`stid`) VALUES ('$ctname','$stid')";
 
if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'viewcitys.php';</script>
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
         Add Cities
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add Cities</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Cities</h3>
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
               <label for="InputCountry">States</label>
             <select  name="stid" class="form-control reqd" autocomplete="off" required>
               <option value="">--SELECT STATES--</option>





          <?php
            $sql1="SELECT * FROM `state` ORDER BY `state`.`stname` ASC";
            $res1=mysqli_query($conn,$sql1);
            $options = "";

            while($row3 = mysqli_fetch_array($res1))
            {
            echo   "<option value=".$row3['stid'].">".$row3['stname']."</option>";

            }
            ?>
             </select>
            </div>
         
        </div>
            <div class="box-body col-md-6">
           
            <div class="form-group">
              <label for="InputCountry">Cities</label>
              <input type="text" name="ctname" class="form-control reqd" placeholder=" State" required>
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