<?php
include 'includes/connections.php';
include_once("inc/header.php"); 

if(isset($_GET['company_id'])){
  echo  $company_id = $_GET['company_id'];
}
    echo $sql = "SELECT * FROM `company_profile` WHERE `company_id` = $company_id";
     $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
     {
         $company_name = $row["company_name"];
         $company_email = $row["company_email"];
        $company_phone = $row["company_phone"];
         $company_address = $row["company_address"];
        $company_pincode = $row["company_pincode"];

      }
   }

?> 


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
        Edit Company Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Company Details</li>
      </ol>
    </section>



  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header"> 
              <h3 class="box-title">Company Details</h3>
            </div>


             <form action="companydetaedit.php" method="post" enctype="multipart/form-data" id="Myform">
                <div class="form-group row">
                    <div class="col-sm-6">
                          <label for="InputCountry">Company Name</label>
                          <input type="text" name="company_name" class="form-control reqd" value="<?php echo $company_name; ?>" title="">
                    </div>
                    <div class="col-sm-6">
                       <label for="InputCountry">Company Email</label>
                       <input type="email" name="company_email" class="form-control reqd" value="<?php echo $company_email; ?>" title="">
                    </div>


              <div class="col-sm-6">
                    <label for="InputCountry">Company Phone</label>
                    <input type="number" name="company_phone" class="form-control reqd" value="<?php echo $company_phone; ?>" title="  ">
            </div>

             <div class="col-sm-6">
                  <label for="InputCountry">Company Pincode</label>
                  <input type="number" name="company_pincode" class="form-control reqd" value="<?php echo $company_pincode; ?>" title="  ">
            </div>

          

             <div class="col-sm-6 hidden">
                  <label for="InputCountry">company_id</label>
                  <input type="number" name="company_id" class="form-control reqd" value="<?php echo $company_id; ?>" title="  ">
            </div>

      
           

                    <div class="col-sm-6 ">
                         <label for="InputCountry">Company Address</label>
                        <textarea name="company_address" class="form-control reqd"><?php echo $company_address; ?></textarea>
                    </div>

        </div> 
                <button type="submit" id="mysubmit" name="submit" class="btn btn-primary px-4 float-right submit123654">Save</button>
            </form>
          </div>
        </div>
     </div>
  </section>
  </div>

  



<?php include_once("inc/footer.php"); ?>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     