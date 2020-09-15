<?php

include("inc/header.php");
include 'includes/connections.php';

?>
<style type="text/css">
  button.btn.btn-primary.px-4.float-right {
    
    padding: 7px 25px 10px 20px;
    margin-left: 500px;
    margin-top: 40px;
}
div {
    overflow:auto;
}

</style>



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Ads User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Ads User</li>
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



       
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Advertisement Title</label>
                        <input type="text" class="form-control" id="ads_title" name="ads_title" placeholder="Advertisement Title">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputLastname">Current subscribtion period Date</label>
                        <input type="date" class="form-control currsubperiod" id="start" name="currsubperiod" placeholder="Current subscribtion period Date">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Subscribtion Period Date</label>
                        <input type="date" class="form-control" id="end" name="subperiod" placeholder="Subscribtion Period Date">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Subscribtion Days</label>
                        <input type="text" class="form-control" id="days" name="subdays" placeholder="Subscribtion Days">
                    </div>

                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Amount</label>
                        <input type="number" class="form-control" id="inputAddressLine1" name="amount" placeholder="Amount">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Payed Money</label>
                        <input type="number" class="form-control" id="inputAddressLine2" name="payed" placeholder="Payed Money">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">Balance</label>
                        <input type="text" class="form-control" id="inputBalance" name="balance" placeholder="Balance">
                    </div>
                     <div class="col-sm-6">
                        <label for="inputCity">Mobile landscape Image</label>
                        <input type="file" class="form-control" id="img1" name="mpic_lans" onchange="validateImage('img1')">
                        <img id="blah1" src="" / style="width: 40%;">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber"> Website landscape Image</label>
                        <input type="file" class="form-control" id="img2" name="wpic_lans" onchange="validateImage('img2')"placeholder=" Website landscape Image">
                        <img id="blah2" src="" / style="width: 40%;">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">Mobile landscape portrait</label>
                        <input type="file" class="form-control" id="img3" name="mpic_port" onchange="validateImage('img3')" placeholder="Mobile landscape portrait">
                        <img id="blah3" src="" / style="width: 40%;">
                    </div>
                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Website landscape Image</label>
                        <input type="file" class="form-control" id="img4" name="wpic_port" onchange="validateImage('img4')" placeholder="Website landscape Image">
                        <img id="blah4" src="" / style="width: 40%;">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">Logo</label>
                        <input type="file" class="form-control" id="img5" name="logo" onchange="validateImage('img5')"placeholder="Website">
                         <img id="blah5" src="" / style="width: 40%;">
                    </div>
                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Ads Link</label>
                        <input type="text" class="form-control" id="inputContactNumber" name="link" placeholder="Ads Link">
                    </div>
               
                </div>
                 <input type="hidden" class="form-control" id="inputWebsite" name="logo" placeholder="Website">
                <button type="submit" name="submit"class="btn btn-primary px-4 float-right">Save</button>
            </form>

<?php 


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "job_portal";

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
	
	if(isset($_GET['phone'])){
		echo $phone = $_GET['phone'];

		$sql = "SELECT * FROM `ads_user` WHERE `phone` ='".$phone."'";

     $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
     {
          $ads_user_id = $row["ads_user_id"];
  
if(isset($_POST['submit'])){

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
move_uploaded_file($_FILES["wpic_port"]["tmp_name"],"uploads/" . $_FILES["wpic_port"]["name"]);
$logo=$_FILES["wpic_port"]["name"];





$sql = "INSERT INTO `ads`(`ads_title`,`ads_user_id`,`currsubperiod`, `subperiod`, `subdays`, `amount`, `payed`, `balance`, `mpic_lans`, `wpic_lans`, `mpic_port`, `wpic_port`, `link`, `logo`) VALUES('$ads_title','$ads_user_id','$currsubperiod','$subperiod','$subdays','$amount','$payed','$balance','$location1','$location2','$location3','$location4','$link','$logo')";

if (mysqli_query($conn, $sql)) {
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}

  }
  } 
}

?>















<table id="ViewList" class="table table-bordered table-hover">  
        <thead>  
          <tr>  
            <th>Advertisement Title</th>  
            <th>Current subscribtion period Date</th>  
            <th>Subscribtion Period Date</th>  
            <th>Subscribtion Days</th>  
            <th>Amount</th>  
            <th>Payed Money</th>    
            <th>Balance</th>  
            <th>Mobile landscape Image</th>  
            <th>Website landscape Image</th>  
            <th>Mobile landscape portrait</th>  
            <th>Website landscape Image</th>
            <th>Ads Link</th>   
            <th>logo</th>  
            <th>Action</th>  
          </tr>  
        </thead>  
        <tbody>  
      
     <?php
     if(isset($_GET['phone'])){
		 $phone = $_GET['phone'];

		$sql = "SELECT * FROM `ads_user` WHERE `phone` ='".$phone."'";

     $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
     {
        $ads_user_id = $row["ads_user_id"];
  
     $sql = "SELECT * FROM `ads` WHERE `ads_user_id` = '$ads_user_id' AND `active_status` = 0 ";
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
         $row["ads_title"];
         $ADSID = $row["ads_id"];
   
      ?> 
              
             
          <tr> 
           <td style="display:none;" class="del"><?php echo $row['ads_id']; ?> </td> 
             <td><?php echo  $row["ads_title"]; ?></td>  
             <td><?php echo  $row["currsubperiod"]; ?></td>  
             <td><?php echo  $row["subperiod"]; ?></td>  
             <td><?php echo  $row["subdays"]; ?></td>  
             <td><?php echo  $row["amount"]; ?></td>  
             <td><?php echo  $row["payed"]; ?></td>  
             <td><?php echo  $row["balance"]; ?></td>  
             <td><img src="<?php echo 'uploads/'.$row['mpic_lans'];?>" style="width: 100%;"/></td>  
             <td><img src="<?php echo 'uploads/'.$row['mpic_port'];?>" style="width: 100%;"/></td>  
             <td><img src="<?php echo 'uploads/'.$row['wpic_lans'];?>" style="width: 100%;"/></td>  
             <td><img src="<?php echo 'uploads/'.$row['wpic_port'];?>" style="width: 100%;"/></td>      
             <td><?php echo  $row["link"]; ?></td> 
              <td><img src="<?php echo 'uploads/'.$row['logo'];?>" style="width: 100%;"/></td> 
  			<td>
              <a href="?depart_id=<?php echo $row["ads_id"] ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a> 
             <input type="button" name="" id ="dle" class="btn btn-xs btn-danger DELETE123" value="delete"><i class="fa fa-edit">
          </td>
            
     
          <?php

				 }
				} else {
				    echo "0 results";
				}
			}
		}
	}
          ?>  
          </tr>  
        </tbody>  
      </table>  


        </div>
     </div>
  </section>
  </div>
  <?php include_once("inc/footer.php") ?>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script>
 	$(".DELETE123").click(function(){
 	
 		var deleteads = $(this).parent().siblings("td.del").text();

 
 		$.ajax({ 
			 url:"activestatus.php", 
			 method:"POST", 
			 data:{deleteadsid:deleteads}, 
			 success:function(result){ 
        
      
	


			 },
        error: function (exception) {
          
            alert(exception)
        }
       });

$(this).parent().parent().hide();

 	});

</script>
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
<script>
$(document).ready(function(){

    $('#myTable').dataTable();
});




 
</script>