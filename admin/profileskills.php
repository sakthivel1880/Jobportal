<?php


include 'includes/connections.php';
include_once("inc/header.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
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


             <form action="insertprofileskills.php" method="post" enctype="multipart/form-data" id="Myform"  >

                <div class="form-group row">
                    <div class="col-sm-6">
                          <label for="Skills">Skills:</label>
                          <input type="text" class="form-control " name="skills[]"  id="skills"  autocomplete="off" placeholder="e.g. Css" required="no" > 
                         <div id="skill_name"  style="max-height: 100px; overflow-y: scroll; overflow-x: hidden; display:none;"></div>
                   </div>
              
                   <div class="col-sm-6 hidden">
                          <label for="Skills">Skills:</label>
                          <input type="text" class="form-control " name="id"  id="id"  value="<?php echo $id; ?>" autocomplete="off" required> 
                         
                  </div>

                    <div class="col-sm-6">
                            <label for="Skills-Exp">Skills-Exprience:</label>
                              <select   class="form-control" name="skillexp[] "  >
                                        <?php
                                    for ($i=0; $i<=25; $i++)
                                    {
                                        ?>
                                            <option value="<?php echo $i;?> yrs" ><?php echo $i;?>&nbsp yrs</option>
                                        <?php
                                    }
                                ?>
                                </select>
                  
                    </div>
           </div>
    
                <button type="submit" id="mysubmit" name="submit" class="btn btn-primary px-4 float-right submit123654">Save</button>
            </form>
          </div>
        </div>
      </div>
    </section>





                
          </div>
        </div>
     </div>
  </section>
  </div>

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<SCRIPT LANGUAGE="JavaScript" src="js/jquery.js"></SCRIPT>
 <SCRIPT LANGUAGE="JavaScript" src="js/skillauto.js"></SCRIPT>

<?php include_once("inc/footer.php"); ?>

