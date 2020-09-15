<?php

include("inc/header.php");
include 'includes/connections.php';





if(isset($_POST['submit']))
{
 echo  $Keywords= $_POST['Keywords'];
  echo $name= $_POST['name'];
  $company= $_POST['company'];
  $sub_perides= $_POST['sub_perides'];
  $amount= $_POST['amount'];
  $website= $_POST['website'];
  $phone= $_POST['phone'];
  $address= $_POST['address'];
  $active_status= $_POST['active_status'];
  $currsub_perides = $_POST['currsub_perides'];

  
move_uploaded_file($_FILES["m_lansimage"]["tmp_name"],"uploads/" . $_FILES["m_lansimage"]["name"]);
echo $location1=$_FILES["m_lansimage"]["name"];
move_uploaded_file($_FILES["m_portimage"]["tmp_name"],"uploads/" . $_FILES["m_portimage"]["name"]);
$location2=$_FILES["m_portimage"]["name"];
move_uploaded_file($_FILES["web_lansimage"]["tmp_name"],"uploads/" . $_FILES["web_lansimage"]["name"]);
$location3=$_FILES["web_lansimage"]["name"];
move_uploaded_file($_FILES["web_portimage"]["tmp_name"],"uploads/" . $_FILES["web_portimage"]["name"]);
$location4=$_FILES["web_portimage"]["name"];



    echo $sql = "INSERT INTO `ads_maintainings`(`Keywords`, `name`, `company`, `sub_perides`, `currsub_perides`, `amount`, `website`, `phone`, `address`, `m_lansimage`, `m_portimage`, `web_lansimage`, `web_portimage`, `active_status`) VALUES ('$Keywords','$name','$company','$sub_perides','$currsub_perides','$amount','$website','$phone','$address','$location1','$location2','$location3','$location4','$active_status')";

if ($conn->query($sql) === TRUE) {
 
  ?>
  <script type="text/javascript">location.href = '';</script> hoiiiiii
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
         Add Job Title
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add Job Title</li>
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
            <form id="AddForm"  method="post" action="" enctype="multipart/form-data">
					<div class="box-body col-md-6">
						<div class="form-group">
						  <label for=""> Ads Keyword</label>
						  <input type="text" name="Keywords" class="form-control reqd" placeholder="" title="">
						</div>

            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control reqd" placeholder="" title="">
            </div>

            <div class="form-group">
              <label for=""> Company Name</label>
              <input type="text" name="company" class="form-control reqd" placeholder="" title="">
            </div>

            <div class="form-group">
              <label for="">Current subscribtion period Date</label>
              <input type="text" id="TextBox1" name="currsub_perides" class="form-control reqd" placeholder="" title="">
            </div>

            <div class="form-group">
              <label for="">Subscribtion Period Date</label>
              <input type="text" id="TextBox2" name="sub_perides" class="form-control reqd" placeholder="" title="">
            </div>

             <div class="form-group">
              <label for="">Subscribtion Days</label>
              <input type="text" id="TextBox3" name="subscribtion_days" class="form-control reqd" placeholder="" title="">
            </div>

            <div class="form-group">
              <label for="">Amount</label>
              <input type="text" name="amount" class="form-control reqd" placeholder="" title="">
            </div>

            <!-- <div class="form-group">
              <label for="">transaction type</label>
              <select class="form-control reqd" name="transaction_type">
                <option value="Cash" name="cash">Cash</option>
                <option value="Check" name="check">Cash</option>
              </select>
            </div> -->

            <div class="form-group">
              <label for="">Web Sites</label>
              <input type="text" name="website" class="form-control reqd" placeholder="" title="">
            </div>

            <div class="form-group">
              <label for="">Phone</label>
              <input type="text" name="phone" class="form-control reqd" placeholder="" title="">
            </div>
             <div class="form-group">
              <label for="">Address</label>
              <textarea  type="text" name="address" class="form-control reqd" placeholder="" title=""></textarea>
            </div>

       <div class="form-group">
              <label for="">Mobile landscape Image</label>
              <input type="file" name="m_lansimage" class="form-control reqd" id="img1" onchange="validateImage('img1')">
              <img id="blah1" src="" / style="width: 40%;">
            </div>
            <div class="form-group">
              <label for=""> Mobile landscape portrait</label>
              <input type="file" name="m_portimage" class="form-control reqd" id="img2" onchange="validateImage('img2')">
              <img id="blah2" src="" / style="width: 40%;">
            </div>
            <div class="form-group">
              <label for=""> Website landscape Image</label>
              <input type="file" name="web_lansimage" class="form-control reqd" id="img3" onchange="validateImage('img3')">
              <img id="blah3" src="" / style="width: 40%;">
            </div>
            <div class="form-group">
              <label for=""> Website landscape portrait</label>
              <input type="file" name="web_portimage" class="form-control reqd" id="img4" onchange="validateImage('img4')">
              <img id="blah4" src="" / style="width: 40%;">
            </div>
            <div class="form-group">
                <label for=""> Acative Status</label>
              <select class="form-group" name="active_status"> 
                <option value="-" name="select">Select One</option>
                <option value="0" name="active">Active</option>
                <option value="1" name="inative">InActive</option>
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

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 

href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" 

src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
