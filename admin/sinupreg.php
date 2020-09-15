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
    margin-bottom: 30px;
}
.row {
    margin-right: 0px;
    margin-left: 0px;
}

</style> 
 

  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        ADD CANDIDATE
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">ADD CANDIDATE</li>
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


             <form action="signupinsert.php" method="post" enctype="multipart/form-data" id="Myform">
                <div class="form-group row">
                    <div class="col-sm-6">
                          <label for="InputCountry">Username </label>
                          <input type="text" name="pusername" class="form-control reqd" placeholder="" title="" required>
                    </div>
                    <div class="col-sm-6">
                       <label for="InputCountry">Email </label>
                       <input type="text" name="pemail" class="form-control reqd" placeholder="" title="" required>
                    </div>

          <div class="col-sm-6">
              <label for="InputCountry">Password </label>
              <input type="password" name="ppassword" class="form-control reqd" placeholder="" title="" required>
        </div>       
       </div>
            <button type="submit" id="mysubmit" name="submit" class="btn btn-primary px-4 float-right submit123654">Next</button>
            </form>   
          </div>
        </div>
     </div>
  </section>
  </div>

  



<?php include_once("inc/footer.php"); ?>
