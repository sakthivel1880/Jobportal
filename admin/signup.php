<?php


include 'includes/connections.php';
include_once("inc/header.php");

  if(isset($_GET['pid'])){
     $pid = $_GET['pid'];
  }     
                       
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
    <!-- Content Header (Page header) -->
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


             <form action="signupinser.php" method="post" enctype="multipart/form-data" id="Myform">
                <div class="form-group row">
                    <div class="col-sm-6">
                          <label for="InputCountry">First Name</label>
                          <input type="text" name="pfname" class="form-control reqd"  >
                    </div>
                    <div class="col-sm-6">
                       <label for="InputCountry">Last Name</label>
                       <input type="text" name="plname" class="form-control reqd"  >
                    </div>


                <div class="col-sm-6">
                  <label for="InputCountry">Gender</label>
                      <select id="gender" name="pgender" class="form-control" id="gender"  >
                  <option value="" >---Choose Your Gender---</option>
                  <option value="Male" >Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
                </select><div id='gender_error'></div>
              </div>

              <div class="col-sm-6">
                  <label for="InputCountry">Mobile</label>
                  <input type="number" name="pmobile" class="form-control reqd"  >
            </div>

            <?php
            $query = $conn->query("SELECT * FROM country  ORDER BY cnname ASC");
             $rowCount = $query->num_rows;
            ?>
              <div class="col-sm-6">
              <label for="InputCountry">Country</label>
             <select class="form-control reqd country" id="countries" name="pcountry"  >
              <option value="">--Select Country--</option>
              <?php
                  if($rowCount > 0){
                    while($row = $query->fetch_assoc()){ 
                      echo '<option value="'.$row['cnid'].'">'.$row['cnname'].'</option >';
                    }
                  }else{
                    echo '<option value="">Country not available</option>';
                  }
                  ?>
             </select>
            </div>



              <div class="col-sm-6">
              <label for="InputCountry">State</label>
              <select class="form-control reqd state" name="pstate"  id="state"  >
               <option></option>
             </select>
            </div>


              <div class="col-sm-6">
              <label for="InputCountry">City</label>
              <select class="form-control reqd city" name="pcity" id="city"  >
               <option></option>
             </select>
            </div>

            <?php  
                $query = "SELECT * FROM `work_exp`";
                $result2 = mysqli_query($conn, $query);
                $options = "";
                while($row2 = mysqli_fetch_array($result2))
                {
                  $options = $options."<option>$row2[exp_yrs]</option>";
                  
                }

          ?>
                  <div class="col-sm-6">
                     <label for="InputCountry">Experience</label>
                    <select type="select" class="form-control reqd" name="pexprience" id="exprience"  >
                       <option>--select Experience--</option>
                       <option>Fresher</option>
                       
                     </select>
                  </div>

                    <div class="col-sm-6 ">
                         <label for="InputCountry">Address</label>
                        <textarea name="paddress" class="form-control reqd"  ></textarea>
                    </div>

                     <div class="col-sm-6">
              <label for="InputCountry">Pin code</label>
              <input type="number" name="ppincode" class="form-control reqd"  >
            </div>

            <div class="col-sm-6">
              <label for="InputCountry">Profile Image</label>
              <input type="file" name="pimage" class="form-control reqd"  >
            </div>


             <div class="col-sm-6">
              <label for="InputCountry">Resume</label>
              <input type="file" name="presume" class="form-control reqd"  >
            </div>

             <div class="col-sm-6 hidden">
              <label for="InputCountry">id</label>
              <input type="text" name="pid" class="form-control reqd" value="<?php echo $pid; ?>">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.country').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
              $.ajax({
                type:'POST',
                url:'select.php',
                data:'cnid='+countryID,
                success:function(html){
                  console.log(html);
                  $('.state').html(html);
                  $('.city').html('<option value="">Select state first</option>'); 
                }
                          }); 
                }else{
                  $('.state').html('<option value="">Select country first</option>');
                  $('.city').html('<option value="">Select state first</option>'); 
                }
              });
              
              $('.state').on('change',function(){
                var stateID = $(this).val();
                if(stateID){
                  $.ajax({
                    type:'POST',
                    url:'select.php',
                    data:'stid='+stateID,
                    success:function(html){
                      $('.city').html(html);
                    }
                  }); 
                }else{
                  $('.city').html('<option value="">Select state first</option>'); 
                }
              });
            });

            
</script>