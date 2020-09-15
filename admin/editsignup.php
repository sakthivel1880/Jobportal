<?php
include 'includes/connections.php';
include_once("inc/header.php"); 

if(isset($_GET['pid'])){
  echo  $pid = $_GET['pid'];
}
    echo $sql = "SELECT * FROM `profile` WHERE `pid` = $pid";
     $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
     {
         $pfname = $row["pfname"];
         $plname = $row["plname"];
        $pgender = $row["pgender"];
        $pusername = $row["pusername"];
         $ppassword = $row["ppassword"];
        $pemail = $row["pemail"];
        $pmobile = $row["pmobile"];
        $pexprience = $row["pexprience"];
        $paddress = $row["paddress"];

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


             <form action="signupedit.php" method="post" enctype="multipart/form-data" id="Myform">
                <div class="form-group row">
                    <div class="col-sm-6">
                          <label for="InputCountry">First Name</label>
                          <input type="text" name="pfname" class="form-control reqd" value="<?php echo $pfname; ?>" title="">
                    </div>
                    <div class="col-sm-6">
                       <label for="InputCountry">Last Name</label>
                       <input type="text" name="plname" class="form-control reqd" value="<?php echo $plname; ?>" title="">
                    </div>


                <div class="col-sm-6">
                  <label for="InputCountry">Gender</label>
                      <select id="gender" name="pgender" class="form-control" id="gender" required>
                  <option value="" >---Choose Your Gender---</option>
                  <option value="Male" >Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
                </select><div id='gender_error'></div>
              </div>

             

              <div class="col-sm-6">
                    <label for="InputCountry">User Name</label>
                    <input type="text" name="pusername" class="form-control reqd" value="<?php echo $pusername; ?>" title="  ">
            </div>

             <div class="col-sm-6">
                  <label for="InputCountry">Email</label>
                  <input type="email" name="pemail" class="form-control reqd" value="<?php echo $pemail; ?>" title="  ">
            </div>

              <div class="col-sm-6">
                  <label for="InputCountry">Password</label>
                  <input type="text" name="ppassword" class="form-control reqd" value="<?php echo $ppassword; ?>" title="  ">
            </div>

              <div class="col-sm-6">
                  <label for="InputCountry">Mobile</label>
                  <input type="number" name="pmobile" class="form-control reqd" value="<?php echo $pmobile; ?>" title="  ">
            </div>

             <div class="col-sm-6 hidden">
                  <label for="InputCountry">pid</label>
                  <input type="number" name="pid" class="form-control reqd" value="<?php echo $pid; ?>" title="  ">
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
                     <label for="InputCountry">Exprience</label>
                    <select type="select" class="form-control reqd" name="pexprience" id="exprience" value="<?php echo $pexprience; ?>" required>
                       <option>--Exprience--</option>
                       <?php echo $options;?>
                     </select>
                  </div>

                    <div class="col-sm-6 ">
                         <label for="InputCountry">Aaddress</label>
                        <textarea name="paddress" class="form-control reqd"><?php echo $paddress; ?></textarea>
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
     