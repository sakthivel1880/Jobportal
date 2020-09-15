<?php


include 'includes/connections.php';
include_once("inc/header.php");

       
                       
?> 
<!-- Content Wrapper. Contains page content -->

  <style type="text/css">
  button.btn.btn-primary.px-4.float-right {
    
    padding: 7px 25px 10px 20px;
    margin-left: 500px;
    margin-top: 40px;
}
div{

  overflow:auto;
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
                    <div class="col-sm-6">
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
                    </div>
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
                        <input type="hidden" class="form-control link" id="" name="ads_user_id" placeholder="Ads Link">
                    </div>
             
                </div>
                
                <button type="submit" id="mysubmit" name="submit"class="btn btn-primary px-4 float-right submit123654">Save</button>
            </form>





                
          </div>
        </div>
     </div>
  </section>
  </div>

  



<?php include_once("inc/footer.php") ?>