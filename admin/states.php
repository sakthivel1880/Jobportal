<?php

include("inc/header.php");
include 'includes/connections.php';
if(isset($_POST['submit']))
{
  $stname= $_POST['stname']; 
  $cnid= $_POST['cnid'];
  





  $sql1 = "SELECT * FROM `state` WHERE `stname` = '$stname' AND `cnid`='$cnid'";
  $result1=mysqli_query($conn,$sql1);
  $num_row=mysqli_num_rows($result1);
  if($num_row > 0){
   echo "Already Inserted country name";
   $_SESSION['Inert'] = "Already  Existing This States";
  }
  else {
  $sql = "INSERT INTO `state`(`stname`,`cnid`) VALUES ('$stname','$cnid')";
 
if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'viewstates.php';</script>
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
         Add States
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add States</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add States</h3>
            </div>

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
            <!-- /.box-header -->
            <!-- form start -->
            <form id="AddForm"  method="post" action="">


          <div class="box-body col-md-6">
           
             <div class="form-group">
               <label for="InputCountry">Countries</label>
             <select  name="cnid" class="form-control reqd" autocomplete="off" required>
              <option value="">--SELECT COUNTRIES--</option>
          <?php
            $sql1="SELECT * FROM `country` ORDER BY `cnname` ASC";
            $res1=mysqli_query($conn,$sql1);
            

            while($row3 = mysqli_fetch_array($res1))
            {
            echo "<option value=".$row3['cnid'].">".$row3['cnname']."</option>";

            }
            ?>
             </select>
            </div>
         
        </div>
            <div class="box-body col-md-6">
           
            <div class="form-group">
              <label for="InputCountry">States</label>
              <input type="text" name="stname" class="form-control reqd" placeholder=" State" required>
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