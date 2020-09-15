<?php


include 'includes/connections.php';
include_once("inc/header.php");

if(isset($_GET['ads_user_id'])){
     echo  $ads_user_id = $_GET['ads_user_id'];
     
     }       
                       
?> 
<!-- Content Wrapper. Contains page content -->

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
        Ads User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ads User</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header"> 
              <h3 class="box-title">Add Form</h3>
            </div>


             <form action="" method="post" enctype="multipart/form-data" id="Myform">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputFirstname">Advertisement Title</label>
                        <input type="text" class="form-control ads_title" id="ads_title" name="ads_title" placeholder="Advertisement Title">
                    </div>
                   <!--  <div class="col-sm-6">
                        <label for="inputLastname">Current subscribtion period Date</label>
                        <input type="date" class="form-control currsubperiod" id="start" name="currsubperiod" placeholder="Current subscribtion period Date">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Subscribtion Period Date</label>
                        <input type="date" class="form-control subperiod" id="end" name="subperiod" placeholder="Subscribtion Period Date">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Subscribtion Days</label>
                        <input type="text" class="form-control subdays" id="days" name="subdays" placeholder="Subscribtion Days">
                    </div>

                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Amount</label>
                        <input type="number" class="form-control amount" id="inputAddressLine1" name="amount" placeholder="Amount">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Payed Money</label>
                        <input type="number" class="form-control payed" id="inputAddressLine2" name="payed" placeholder="Payed Money">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">Balance</label>
                        <input type="text" class="form-control balance" id="inputBalance" name="balance" placeholder="Balance">
                    </div> -->
                     <div class="col-sm-6">
                        <label for="inputCity">Mobile landscape Image</label>
                        <input type="file" class="form-control mpic_lans" id="img1" name="mpic_lans" onchange="validateImage('img1')">
                        <img id="blah1" src="" / style="width: 40%;">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber"> Website landscape Image</label>
                        <input type="file" class="form-control wpic_lans" id="img2" name="wpic_lans" onchange="validateImage('img2')"placeholder=" Website landscape Image">
                        <img id="blah2" src="" / style="width: 40%;">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">Mobile landscape portrait</label>
                        <input type="file" class="form-control mpic_port" id="img3" name="mpic_port" onchange="validateImage('img3')" placeholder="Mobile landscape portrait">
                        <img id="blah3" src="" / style="width: 40%;">
                    </div>
                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Website landscape Image</label>
                        <input type="file" class="form-control wpic_port" id="img4" name="wpic_port" onchange="validateImage('img4')" placeholder="Website landscape Image">
                        <img id="blah4" src="" / style="width: 40%;">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputWebsite">Logo</label>
                        <input type="file" class="form-control logo" id="img5" name="logo" onchange="validateImage('img5')"placeholder="Website">
                         <img id="blah5" src="" / style="width: 40%;">
                    </div>
                </div>
                 <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputContactNumber">Ads Link</label>
                        <input type="text" class="form-control link" id="inputContactNumber" name="link" placeholder="Ads Link">
                    </div>
                     <div class="form-group row">
                        <input type="hidden" class="form-control link" id="<?php  echo $ads_user_id; ?>" name="ads_user_id" placeholder="Ads Link" value="<?php  echo $ads_user_id; ?> ">
                    </div>
             
                </div>
                <span class="hidden"><?php  echo $ads_user_id; ?> </span>
                <button type="submit" id="mysubmit" name="submit"class="btn btn-primary px-4 float-right submit123654">Save</button>
            </form>












            <div class="box-body" style="overflow-y: auto;">
              <table id="ViewList" class="table table-bordered table-hover">
                <thead>
                      <tr>
                                 <th>Advertisement Title</th>  
                              <!--     <th>Current subscribtion period Date</th>  
                                  <th>Subscribtion Period Date</th>  
                                  <th>Subscribtion Days</th>  
                                  <th>Amount</th>  
                                  <th>Payed Money</th>    
                                  <th>Balance</th> -->  
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
    

    $sql = "SELECT * FROM `ads_user` WHERE `ads_user_id` ='$ads_user_id'";

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

                       <input type="hidden" class="del" value="<?php echo $row['ads_id']; ?>">
             <td><?php echo  $row["ads_title"]; ?></td>  
           <!--   <td><?php echo  $row["currsubperiod"]; ?></td>  
             <td><?php echo  $row["subperiod"]; ?></td>  
             <td><?php echo  $row["subdays"]; ?></td>  
             <td><?php echo  $row["amount"]; ?></td>  
             <td><?php echo  $row["payed"]; ?></td>  
             <td><?php echo  $row["balance"]; ?></td>   -->
             <td><img src="<?php echo 'uploads/'.$row['mpic_lans'];?>" style="width: 20%;"/></td>  
             <td><img src="<?php echo 'uploads/'.$row['mpic_port'];?>" style="width: 100%;"/></td>  
             <td><img src="<?php echo 'uploads/'.$row['wpic_lans'];?>" style="width: 100%;"/></td>  
             <td><img src="<?php echo 'uploads/'.$row['wpic_port'];?>" style="width: 100%;"/></td>      
             <td><?php echo  $row["link"]; ?></td> 
            <td><img src="<?php echo 'uploads/'.$row['logo'];?>" style="width: 100%;"/></td> 
                    
            <td>
                              <a href="adsedittable.php?ads_id=<?php echo $row["ads_id"] ?>" class="btn btn-success btn-xs">Edit</a> 
                              <input type="button" name="" id ="dle" class="btn btn-xs btn-danger DELETE123 " value="Delete">
                     
            </td>

                     </tr>





                        <?php

         }
        } else {
            echo "";
        }
      }
    }
    else{
      ?>
       <!-- <script type="text/javascript"> window.location.href = "adstable.php";</script> -->
      <?php
    }
  // }
          ?>  




                      </tbody>
               </table>
            </div>
          </div>
        </div>
     </div>
  </section>
  </div>

  








































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
  $(".DELETE123").click(function(){
  
    var deleteads = $(this).parent().siblings("input.del").val();
    //alert(deleteads);
 
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
    $(document).ready(function(){
        $(".submit123654").click(function(){
            location.reload(true);
        });
    });
</script>
<script>
$("#mysubmit").click( function() {
    var formData = new FormData($('#Myform')[0]);
   var ads_title=$(".ads_title").val();
   var ads_user_id="<?php  echo $ads_user_id; ?>";
   //alert(ads_user_id);
   var currsubperiod=$(".currsubperiod").val();
   var subperiod=$(".subperiod").val();
  var subdays=$(".subdays").val();
    var amount=$(".amount").val();
   var payed=$(".payed").val();
   var balance=$(".balance").val();
   var link=$(".link").val();
   //alert(formData);
  $.ajax({
       url: 'adsinsert.php',
       data: formData,
       async: false,
       contentType: false,
       processData: false,
       cache: false,
       type: 'POST',
       success: function(data)
       {
         //alert(data);
         $('.myimg').empty();
         $('.myimg').append(data);
       },
  });    
  return false;    
});
</script>

<?php include_once("inc/footer.php") ?>