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
span.error123 {
    color: red;
}
</style>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         COMPANY PROFILE
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> COMPANY PROFILE</li>
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


             <form action="addcompany.php" method="post" enctype="multipart/form-data" id="Myform" required>



                     <?php
            $query = $conn->query("SELECT * FROM profile  WHERE `p_no` = 0000");
             $rowCount = $query->num_rows;
            ?>
              <div class="col-sm-6">
              <label for="InputCountry">profile Name</label>
             <select class="form-control reqd company_name" id="company_rpid" name="company_rpid" required>
              <option value="">Select profile name</option>
              <?php
                  if($rowCount > 0){
                    while($row = $query->fetch_assoc()){ 
                      echo '<option value="'.$row['pid'].'">'.$row['pusername'].'</option >';
                    }
                  }else{
                    echo '<option value=""> profile name name not available</option>';
                  }
                  ?>
             </select>
             <span class="error123"></span>
           </div>



                <div class="form-group row">
                    <div class="col-sm-6">
                          <label for="InputCountry">Company Name</label>
                          <input type="text" name="company_name" class="form-control reqd" placeholder="" title="" required>
                    </div>
                    <div class="col-sm-6">
                       <label for="InputCountry">Company Email</label>
                       <input type="email" name="company_email" class="form-control reqd" placeholder="" title="" required>
                    </div>

              <div class="col-sm-6">
                    <label for="InputCountry">Company Phone No</label>
                    <input type="number" name="company_phone" class="form-control reqd" placeholder="" title="" required>
            </div>

            <?php
            $query = $conn->query("SELECT * FROM country  ORDER BY cnname ASC");
             $rowCount = $query->num_rows;
            ?>
              <div class="col-sm-6">
              <label for="InputCountry">Country</label>
             <select class="form-control reqd country" id="country" name="company_country" required>
              <option value="">Select Country</option>
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
              <select class="form-control reqd state" name="company_state"  id="state" required>
               <option></option>
             </select>
            </div>


              <div class="col-sm-6">
              <label for="InputCountry">City</label>
              <select class="form-control reqd city" name="company_city" id="city" required>
               <option></option>
             </select>
            </div>

            <div class="col-sm-6">
              <label for="InputCountry">Company Address</label>
              <textarea name="company_address" class="form-control reqd" required></textarea>
           </div>
                  
          <div class="col-sm-6">
              <label for="InputCountry">Company Description</label>
              <textarea name="company_desc" class="form-control reqd" required></textarea>
           </div>


           <div class="col-sm-6">
              <label for="InputCountry">Pin code</label>
              <input type="number" name="company_pincode" class="form-control reqd" required  placeholder="" title="">
           </div> 
  </div>
         
                <button type="submit" id="mysubmit" disabled="disabled" name="submit" class="btn btn-primary px-4 float-right submit123654">Save</button>
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

    $('#company_rpid').change(function(){
        var company_rpid = $(this).val();
        console.log(company_rpid);
            $.ajax({
                type:'POST',
                url:'profilename.php',
                data:{company_rpid:company_rpid},
                success:function(html){
                    $('.error123').text(html);
                     var value = html;
                        if(value === ""){
            $("#mysubmit").attr('disabled',false);
          }


                    
                }
               
            }); 
                         });




            
</script>