<?php

include("inc/header.php");
include 'includes/connections.php';
if(isset($_GET['ads_user_id'])){

   $ads_user_id = $_GET['ads_user_id'];
}
?>




<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Advertisement User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Advertisement User</li>
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
            <?php
                    $sql = "SELECT * FROM  `ads_user` WHERE `ads_user_id` = '$ads_user_id'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                
                    while($row = mysqli_fetch_assoc($result)) {
                       echo  $row["username"];
                  ?>
            <form class="well form-horizontal" action="" method="post">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">User Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="username" name="username" placeholder="User Name" class="form-control" required="true" value="<?php echo $row["username"]; ?>" type="text"></div>
                            </div>
                         </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phone" name="phone" placeholder="Phone Number" class="form-control" required="true" value="<?php echo $row["phone"]; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="address" name="address" placeholder="Address" class="form-control" required="true" value="<?php echo $row["address"]; ?>" type="text"></div>
                            </div>
                         </div>
                       
                         <div class="form-group"> 
                            <label class="col-md-4 control-label">Company Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="company" name="company" placeholder="Company Name" class="form-control" required="true" value="<?php echo $row["company"]; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Wallet</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="wallet" name="wallet" placeholder="Wallet" class="form-control" required="true" value="<?php echo $row["wallet"]; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Advertisement Department</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="department" name="department" placeholder="Advertisement Department" class="form-control" required="true" value="<?php echo $row["department"]; ?>" type="text"></div>
                            </div>
                         </div>
                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="<?php echo $row["email"]; ?>" type="text"></div>
                            </div>
                         </div>
                             <?php
                     }
                } else {
                    echo "0 results";
                }
?>

                          <div class="form-group">
                            <label class="col-md-6 control-label"></label>
                            <div class="col-md-6 inputGroupContainer">
                               <div class="input-group "><input  id="submit" name="update" placeholder="" class="form-control" required="true" value="update" type="submit"></div>
                            </div>
                         </div>
                      </fieldset>
                   </form>
              

<?php
                if(isset($_POST['update'])){

  $username = $_POST['username'];  
  $phone = $_POST['phone'];  
  $address = $_POST['address'];  
  $company = $_POST['company'];  
  $wallet = $_POST['wallet'];  
  $department = $_POST['department'];  
  $email = $_POST['email']; 

     $sql = "UPDATE `ads_user` SET `username`='$username',`phone`='$phone',`address`='$address',`company`='$company',`wallet`='$wallet',`department`='$department',`email`='$email' WHERE `ads_user_id` = '$ads_user_id'";
  if (mysqli_query($conn, $sql)) {
    ?>
    <script>window.location = 'viewadsuser.php'</script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}



            ?>
                 </div>
          


        </div>
     </div>
  </section>
  </div>