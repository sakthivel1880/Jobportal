<?php

include("inc/header.php");
include 'includes/connections.php';
  
  if(isset($_GET['ads_id'])){

  	echo $ads_id = $_GET['ads_id'];
  }
                       
?>

<style type="text/css">
  button.btn.btn-primary.px-4.float-right {
    
    padding: 7px 25px 10px 20px;
    margin-left: 500px;
    margin-top: 40px;
}
</style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Ads Edit 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Ads Edits</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Ads Form</h3>
            </div>
<?php
                 $sql = "SELECT * FROM `ads` WHERE `ads_id` = '$ads_id' AND `active_status` = 0 ";
        		$result = mysqli_query($conn, $sql);
		     	if (mysqli_num_rows($result) > 0) {
		    	while($row = mysqli_fetch_assoc($result)) {
?>

            	 <form action="" method="post" enctype="multipart/form-data" id="Myform">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Advertisement Title</label>
                        <input type="text" class="form-control ads_title" id="ads_title" name="ads_title" value="<?php echo  $row["ads_title"]; ?> " placeholder="Advertisement Title">
                    </div>
  <!--                   <div class="col-sm-6">
                        <label for="inputLastname">Current subscribtion period Date</label>
                        <input type="date" class="form-control currsubperiod" id="start" name="currsubperiod" value="<?php echo  $row["currsubperiod"]; ?> " placeholder="Current subscribtion period Date">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Subscribtion Period Date</label>
                        <input type="date" class="form-control subperiod" id="end" name="subperiod" value="<?php echo  $row["subperiod"]; ?> " placeholder="Subscribtion Period Date">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Subscribtion Days</label>
                        <input type="text" class="form-control subdays" id="days" name="subdays" value="<?php echo  $row["subdays"]; ?> " placeholder="Subscribtion Days">
                    </div>

                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Amount</label>
                        <input type="text" class="form-control amount" id="inputAddressLine1" name="amount" value="<?php echo  $row["amount"]; ?> " placeholder="Amount">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Payed Money</label>
                        <input type="text" class="form-control payed" id="inputAddressLine2" name="payed" value="<?php echo  $row["payed"]; ?> " placeholder="Payed Money">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">Balance</label>
                        <input type="text" class="form-control balance" id="inputBalance" name="balance" value="<?php echo  $row["balance"]; ?> " placeholder="Balance">
                    </div> -->
                     <div class="col-sm-6">
                        <label for="inputCity">Mobile landscape Image</label>
                        <input type="file" class="form-control mpic_lans" id="img1" name="mpic_lans" "onchange="validateImage('img1')">
                        <img id="blah1" src="<?php echo 'uploads/'.$row['mpic_lans']; ?>" / style="width: 40%;">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber"> Website landscape Image</label>
                        <input type="file" class="form-control wpic_lans" id="img2"  name="wpic_lans" onchange="validateImage('img2')"placeholder=" Website landscape Image">
                        <img id="blah2" src="<?php echo 'uploads/'.$row['wpic_lans'];?>" / style="width: 40%;">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">Mobile landscape portrait</label>
                        <input type="file" class="form-control mpic_port" id="img3"  name="mpic_port" onchange="validateImage('img3')" placeholder="Mobile landscape portrait">
                        <img id="blah3" src="<?php echo 'uploads/'.$row['mpic_port'];?>" / style="width: 40%;">
                    </div>
                </div>
                 

                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Website portrait Image</label>
                        <input type="file" class="form-control wpic_port" id="img4" name="wpic_port" onchange="validateImage('img4')" placeholder="Website landscape Image">
                        <img id="blah4" src="<?php echo 'uploads/'.$row['mpic_port'];?>" / style="width: 40%;">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">Logo</label>
                        <input type="file" class="form-control logo" id="img5" name="logo" onchange="validateImage('img5')"placeholder="Website">
                         <img id="blah5" src="<?php echo 'uploads/'.$row['logo'];?>" / style="width: 40%;">
                    </div>
                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Ads Link</label>
                        <input type="text" class="form-control link" id="inputContactNumber" value="<?php echo  $row["link"]; ?>"name="link" placeholder="Ads Link">
                    </div>
                     <div class="form-group row">
                    <div class="col-sm-6 " >
                       
                        <input type="hidden" class="form-control link" id="" name="ads_user_id" placeholder="Ads Link" value="<?php echo  $row["ads_user_id"]; ?> ">
                    </div>
             
                </div>
                <span class=""><?php $ads_user_id = $row["ads_user_id"]; ?> </span>
                <button type="submit" id="mysubmit" name="update"class="btn btn-primary px-4 float-right">UPDATE</button>
            </form>

<?php
					    		 }
			        } else {
			            echo "";
			        }
                ?>


            </div>
        </div>
    </div>
</section>
</div>

<?php 

if(isset($_POST['update'])){

	$ads_title = $_POST['ads_title'];
	$currsubperiod = $_POST['currsubperiod'];
	$subperiod = $_POST['subperiod'];
	$subdays = $_POST['subdays'];
	$amount = $_POST['amount'];
	$payed = $_POST['payed'];
	$balance = $_POST['balance'];
	$link = $_POST['link'];
	
	move_uploaded_file($_FILES["mpic_lans"]["tmp_name"],"uploads/" . $_FILES["mpic_lans"]["name"]);			
	$location1=$_FILES["mpic_lans"]["name"];

	move_uploaded_file($_FILES["wpic_lans"]["tmp_name"],"uploads/" . $_FILES["wpic_lans"]["name"]);			
	$location2=$_FILES["wpic_lans"]["name"];

	move_uploaded_file($_FILES["mpic_port"]["tmp_name"],"uploads/" . $_FILES["mpic_port"]["name"]);			
	$location3=$_FILES["mpic_port"]["name"];

	move_uploaded_file($_FILES["wpic_port"]["tmp_name"],"uploads/" . $_FILES["wpic_port"]["name"]);			
	$location4=$_FILES["wpic_port"]["name"];

	move_uploaded_file($_FILES["logo"]["tmp_name"],"uploads/" . $_FILES["logo"]["name"]);			
	$location5=$_FILES["logo"]["name"];







echo $sql = "UPDATE `ads` SET `ads_title`='$ads_title',`currsubperiod`='$currsubperiod',`subperiod`='$subperiod',`subdays`='$subdays',`amount`='$amount',`payed`='$payed',`balance`='$balance',`mpic_lans`='$location1',`wpic_lans`='$location2',`mpic_port`='$location3',`wpic_port`='$location4',`link`='$link',`logo`='$location5'WHERE `ads_id` = '$ads_id'";

if (mysqli_query($conn, $sql)) {
  ?>
  <script type="text/javascript"> window.location.href = "adstable.php?ads_user_id=<?php echo $ads_user_id ;?>";</script>
  <?php

} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}

?>



      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <?php include_once("inc/footer.php") ?>


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
function readURL4(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah5').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#img5").change(function() {
  readURL4(this);
});


$("#end").change(function() {
  
   var start = $("#start").val();   
   var end = $("#end").val();   
 var date2 = new Date(start);
var date1 = new Date(end);
var timeDiff = Math.abs(date2.getTime() - date1.getTime());
var dayDifference = Math.ceil(timeDiff / (1000 * 3600 * 24));
  $("#days").val(dayDifference);
        
        
    });


  </script>