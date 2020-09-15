<?php
include("inc/header.php");
include 'includes/connections.php';





if(isset($_GET['cnid']))
        {
          $getid=$_GET['cnid'];

if(isset($_POST['submit']))
{
 
  $cnname= $_POST['cnname'];
  $phonecode= $_POST['phonecode'];
  $phone_length= $_POST['phone_length'];
  $country_currency=$_POST['country_currency'];


   $sql = "UPDATE `country` SET `cnname`='$cnname',`phonecode`='$phonecode',`phone_length`= '$phone_length',`country_currency`='$country_currency' WHERE cnid ='$getid'";
 
if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'viewconutrys.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?> 



  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Edit Countries
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Countries</li>
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
 $sql = "SELECT * FROM `country` WHERE `cnid`='$getid'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
			




      			<div class="form-group">
						  <label for="exampleInputEmail1">Countries</label>
						  <input type="text" name="cnname" class="form-control reqd" value="<?php echo $row['cnname'] ?>"  placeholder="" required >
						</div>


            <div class="form-group">
              <label for="exampleInputEmail1">Phone Code</label>
              <input type="text" name="phonecode" class="form-control reqd" value="<?php echo $row['phonecode'] ?>"  placeholder="" required>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Phone Number Lenth</label>
              <input type="text" name="phone_length" class="form-control reqd" value="<?php echo $row['phone_length'] ?>"  placeholder="" required>
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
            echo   "<option value=".$row3['cur_code'].">".$row3['cur_code']."</option>";

            }
            ?>
             </select>
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