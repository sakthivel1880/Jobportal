<?php
include 'includes/connections.php';
include_once("inc/header.php"); 

if(isset($_GET['jobp_id'])){
  echo  $jobp_id = $_GET['jobp_id'];
}
    echo $sql = "SELECT * FROM `job_post` WHERE `jobp_id` = $jobp_id";
     $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
     {
         $jobp_type = $row["jobp_type"];
         $jobp_duties = $row["jobp_duties"];
        $jobp_responsibilities = $row["jobp_responsibilities"];
         $jobp_location = $row["jobp_location"];
        $jobp_description = $row["jobp_description"];
        $jobp_skills = $row["jobp_skills"];
        $jobp_maxsal = $row["jobp_maxsal"];
        $jobp_minsal = $row["jobp_minsal"];
        $jobp_hirepersons = $row["jobp_hirepersons"];
        $jobp_link = $row["jobp_link"];
        $jobp_refmail = $row["jobp_refmail"];

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


             <form action="editjobposttal.php" method="post" enctype="multipart/form-data" id="Myform">
                <div class="form-group row">
                    <div class="col-sm-6">
                <label for="InputCountry">JOB Post Type</label>
                    
                  <select type="select" class="form-control reqd" name="jobp_type" autocomplete="off" required value="<?php echo $jobp_type; ?>" >
                  <option value="">--select Job Type--</option>
                  <option value="Full Time">Full Time</option>
                  <option value="Part Time">Part Time</option>
                  <option value="Internship">Internship</option>  
                  <option value="Work From Home">Work From Home</option>
                  </select>
                  </div>
                    <div class="col-sm-6">
                       <label for="InputCountry">Job Duties</label>
                       <input type="text" name="jobp_duties" class="form-control reqd" value="<?php echo $jobp_duties; ?>" title="">
                    </div>

              <div class="col-sm-6">
                    <label for="InputCountry">Job Responsibilities</label>
                    <input type="text" name="jobp_responsibilities" class="form-control reqd" value="<?php echo $jobp_responsibilities; ?>" title="  ">
            </div>

             <div class="col-sm-6">
                  <label for="InputCountry">Job Description</label>
                  <textarea name="jobp_description" class="form-control reqd"> <?php echo $jobp_description; ?> </textarea>
            </div>

              <div class="col-sm-6">
                  <label for="InputCountry">Job Location</label>
                  <input type="text" name="jobp_location" class="form-control reqd" value="<?php echo $jobp_location; ?>" title="  ">
            </div>

              <div class="col-sm-6">
                  <label for="InputCountry">Job Skills</label>
                  <input type="text" name="jobp_skills" class="form-control reqd" value="<?php echo $jobp_skills; ?>" title="  ">
            </div>


              <div class="col-sm-6">
                  <label for="InputCountry">Job Maximum</label>
                  <input type="number" name="jobp_maxsal" class="form-control reqd" value="<?php echo $jobp_maxsal; ?>" title="  ">
            </div>


              <div class="col-sm-6">
                  <label for="InputCountry"> Job Minimum</label>
                  <input type="number" name="jobp_minsal" class="form-control reqd" value="<?php echo $jobp_minsal; ?>" title="  ">
            </div>


              <div class="col-sm-6">
                  <label for="InputCountry">Job Hiring</label>
                  <input type="text" name="jobp_hirepersons" class="form-control reqd" value="<?php echo $jobp_hirepersons; ?>" title="  ">
            </div>

          

            <div class="col-sm-6">
                  <label for="InputCountry">Job Link</label>
                  <input type="text" name="jobp_link" class="form-control reqd" value="<?php echo $jobp_link; ?>" title="  ">
            </div>

            <div class="col-sm-6">
                  <label for="InputCountry">Email</label>
                  <input type="email" name="jobp_refmail" class="form-control reqd" value="<?php echo $jobp_refmail; ?>" title="  ">
            </div>

          


             <div class="col-sm-6 hidden">
                  <label for="InputCountry">jobp_id</label>
                  <input type="number" name="jobp_id" class="form-control reqd" value="<?php echo $jobp_id; ?>" title="  ">
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
     