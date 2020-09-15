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

#unified-inputs.input-group { width: 100%; }
#unified-inputs.input-group  select { width: 30% !important; }
#unified-inputs.input-group  input { width: 70% !important; }
#unified-inputs.input-group select:last-of-type  { border-left: 0; }
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


             <form action="addjobpostal.php" method="post" enctype="multipart/form-data" id="Myform" required>
              <div class="form-group row">
                <div class="col-sm-6">
                <label for="InputCountry">JOB POST</label>
                    
                  <select type="select" class="form-control reqd" name="jobp_type" autocomplete="off" required>
                  <option value="">--select Job Type--</option>
									<option value="Full Time">Full Time</option>
									<option value="Part Time">Part Time</option>
									<option value="Walk-in">Walk-in</option>
									<option value="Freshers">Freshers</option>
									<option value="Internship">Internship</option>	
									<option value="Contract">Contract</option>
                  </select>
                  </div>
             
 


                
                 <?php
            $query = $conn->query("SELECT * FROM company_profile  WHERE `entry_type` = '1'");
             $rowCount = $query->num_rows;
            ?>
              <div class="col-sm-6">
              <label for="InputCountry">Company Name</label>
             <select class="form-control reqd company_name" id="company_name" name="company_name" required>
              <option value="">Select Company name</option>
              <?php
                  if($rowCount > 0){
                    while($row = $query->fetch_assoc()){ 
                      echo '<option value="'.$row['company_id'].'">'.$row['company_name'].'</option >';
                    }
                  }else{
                    echo '<option value="">Company name not available</option>';
                  }
                  ?>
             </select>
           </div>




                  <div class="col-sm-6">
                       <label for="InputCountry">Job duties</label>
                       <input type="text" name="jobp_duties" class="form-control reqd" placeholder="" title="" required>
                    </div>

              <div class="col-sm-6">
                    <label for="InputCountry">Job Responsibilities</label>
                    <input type="text" name="jobp_responsibilities" class="form-control reqd" placeholder="" title="" required>
            </div>

             <div class="col-sm-6">
                    <label for="InputCountry">Job Description</label>
                    <textarea name="jobp_description" class="form-control reqd" required> </textarea>
            </div>

             <div class="col-sm-6">
                    <label for="InputCountry">Job Location</label>
                    <input type="text" name="jobp_location" id="location" class="form-control reqd" placeholder="" title="" required>
                    <div id="location_name"  style="max-height: 100px; overflow-y: scroll; overflow-x: hidden; display:none;"></div>
            </div>
              <?php
            $query = $conn->query("SELECT * FROM `job_title` ORDER BY `job_title`.`jt_name` ASC");
             $rowCount = $query->num_rows;
            ?>
              <div class="col-sm-6">
              <label for="InputCountry">Job Title Name</label>
             <select class="form-control reqd company_name" id="jobp_titlename" name="jobp_titlename" required>
              <option value="">Select job Title</option>
              <?php
                  if($rowCount > 0){
                    while($row = $query->fetch_assoc()){ 
                      echo '<option value="'.$row['jt_id'].'">'.$row['jt_name'].'</option >';
                    }
                  }else{
                    echo '<option value=""> job_title name not available</option>';
                  }
                  ?>
             </select>
           </div>


          <div class="col-sm-6">
              <label for="InputCountry">Job Skills</label>
               <input type="text" name="jobp_skills" class="form-control reqd" placeholder="" title="" required>
           </div>
            <div class="col-sm-6" >
              <label for="InputCountry">Job Minimum salary</label>
            <div class="input-group" id="unified-inputs">
              <input type="number" name="jobp_minsal" class="form-control reqd" id="Min"> 
              <select  name="minsal_rs" class="form-control minsal_rs" autocomplete="off" required>

										<?php
									
										$sql1="SELECT * FROM `currency_type` ";
										$res1=mysqli_query($conn,$sql1);
				
								while($row3 = mysqli_fetch_array($res1))
								{
								echo 	"<option value=".$row3['cur_code'].">".$row3['cur_code']. "&nbsp&nbsp(".$row3['cur_name'].")"."</option>";
									
								}
										?>
										
										</select>
             <span class="" id=""></span>
           </div>
           </div>
           <div class="col-sm-6">
              <label for="InputCountry">Job Maximum salary</label>
             <input type="number" name="jobp_maxsal" class="form-control reqd" id="Max">  
             <span class="error_max" ></span>
           </div> 
           

           <div class="col-sm-6">
              <label for="InputCountry">Job Hiring</label>
              <input type="text" name="jobp_hirepersons" class="form-control reqd" placeholder="" title="" required>
           </div> 

           <div class="col-sm-6">
              <label for="InputCountry">Experience years</label>
             <select required name="jobp_exprience" value='' class="form-control"><option value=""> Exprience years</option>
                                    <?php
                                for ($i=0; $i<=24; $i++)
                                {
                                    ?>
                                        <option value="<?php echo $i;?> yrs" ><?php echo $i;?>&nbspyrs</option>
                                    <?php
                                }
                            ?>
                                <option value="25+ years">25+ yrs</option>
                                </select>
           </div> 


           <div class="col-sm-6">
              <label for="InputCountry">Job link</label>
              <input type="text" name="jobp_link" class="form-control reqd" placeholder="" title="" required>
           </div>

           <div class="col-sm-6">
              <label for="InputCountry">Job  Mail</label>
              <input type="email" name="jobp_refmail" class="form-control reqd" placeholder="" title="" required>
           </div>

           <div class="col-sm-6">
                  
                  <label for="job Resume">Job Resume: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
                  <input type="radio" name="jobp_resume" value=" Compulsary" checked> Compulsary &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                  <input type="radio" name="jobp_resume" value="Optional"> Optional &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                 
                </div>
            <!--  <input id="max" type="text" name="max"/>
             <input id="min" type="text" name="min" onchange="validate()" />
 -->


         </div>
                <button type="submit" id="mysubmit" name="submit" class="btn btn-primary px-4 float-right submit123654">Save</button>
            </form>   
          </div>
        </div>
     </div>
  </section>
  </div>

  

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script type="text/javascript">
 $("#Max").focusout(function(){
  var max =$(this).val();
  var min =$("#Min").val();
  
  if(max < min){
    $(".error_max").text("Invalid Maximun Salary").css('color','red');
    // console.log("Not ok");
  } else {
     $(".error_max").text("");
      //  console.log(" ok");
  }

 })

</script>     
<SCRIPT LANGUAGE="JavaScript" src="js/jquery.js"></SCRIPT>
 <SCRIPT LANGUAGE="JavaScript" src="js/location_auto.js"></SCRIPT>

<?php include_once("inc/footer.php"); ?>

