 <?php

include("inc/header.php");
include 'includes/connections.php';

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
            <!-- /.box-header -->
            <!-- form start -->
            <form class="well form-horizontal" action="" method="post">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">User Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="username" name="username" placeholder="User Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phone" name="phone" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="address" name="address" placeholder="Address" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                       
                         <div class="form-group"> 
                            <label class="col-md-4 control-label">Company Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="company" name="company" placeholder="Company Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Wallet</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="wallet" name="wallet" placeholder="Wallet" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Advertisement Department</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="department" name="department" placeholder="Advertisement Department" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                        
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>

                         <div class="hidden">
                            <label class="col-md-4 control-label">active_status</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="active_status" name="active_status" placeholder="active_status" value="1" type="text"></div>
                            </div>
                         </div>
                        

                          <div class="form-group">
                            <label class="col-md-6 control-label"></label>
                            <div class="col-md-6 inputGroupContainer">
                               <div class="input-group"><input  id="submit" name="submit" placeholder="" class="form-control" required="true" value="submit" type="submit" onClick=reload();></div>
                            </div>
                         </div>
                      </fieldset>
                   </form>
          </div>
          <!-- /.box -->


        </div>
     </div>
  </section>
  </div>
  <!-- /.content-wrapper -->
 




<?php

if(isset($_POST['submit'])){

  $username = $_POST['username'];  
  $phone = $_POST['phone'];  
  $address = $_POST['address'];  
  $company = $_POST['company'];  
  $wallet = $_POST['wallet'];  
  $department = $_POST['department'];  
  $email = $_POST['email'];  
echo   $active_status = $_POST['active_status'];  
 



  echo $sql = "INSERT INTO `ads_user`(`username`, `phone`, `address`, `company`, `wallet`, `department`, `email`,`active_status`,`created_date`) VALUES ('$username','$phone','$address','$company','$wallet','$department','$email','$active_status',NOW())"; 
  
  if (mysqli_query($conn, $sql)) {
    ?>
    <script>window.location = 'viewadsuser.php'</script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>









<?php include_once("inc/footer.php") ?>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
function validateImage(id) {
    var formData = new FormData();
 
    var file = document.getElementById(id).files[0];
 
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file');
        document.getElementById(id).value = '';
        return false;
    }
    if (file.size > 1024000) {
        alert('Max Upload size is 1MB only');
        document.getElementById(id).value = '';
        return false;
    }
    return true;
}
$("#img1").change(function() {
  readURL1(this);
});
function readURL1(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah1').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}



 function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah2').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#img2").change(function() {
  readURL(this);
});

function readURL2(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah3').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#img3").change(function() {
  readURL2(this);
});

function readURL3(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah4').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#img4").change(function() {
  readURL3(this);
});

</script>
