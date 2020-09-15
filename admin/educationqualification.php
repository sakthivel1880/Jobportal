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


             <form action="inserteducation.php" method="post" enctype="multipart/form-data" id="Myform"  >
                <div class="form-group row">
                    <div class="col-sm-6">

                          <label for="InputCountry">Degree of Qualification:</label>
                          <select  class="form-control quali" name="edu_degree" id="degree"  >
                <option value="0">Select Qualification</option>
                <?php
                
                $sql = mysqli_query($conn,"SELECT * FROM `edu_quali` ORDER BY `edu_quali`.`qua_name` ASC");
                while($row=mysqli_fetch_array($sql))
                {
                echo '<option value="'.$row['qua_id'].'">'.$row['qua_name'].'</option>';
                } ?>
                </select>
                    </div>



                    <div class="col-sm-6">
                       <label for="InputCountry">Education Qualification Department:</label>
                      <select  class="form-control depart" name="edu_dept" id="edu_dept"  >
                <option value="0">Select Qualification</option>
                
                </select>
                    </div>


                <div class="col-sm-6">
                  <label for="InputCountry">Institude:</label>
                   <input type="text" name="edu_ins" class="form-control " id="institude" autocomplete="off"  >
                   <div id="institude_name"  style="max-height: 100px; overflow-y: scroll; overflow-x: hidden; display:none;"></div>  
              </div>

               <div class="col-sm-6 hidden">
                  <label for="InputCountry">id:</label>
                   <input type="text" name="id" class="form-control " value="<?php echo $pid; ?>" autocomplete="off"  >
              </div>

             

              <div class="col-sm-6">
                    <label for="InputCountry">Year of Passing:</label>
                   <select name="edu_pass" class="form-control quali"  >
                     <option>SELECT YEAR OF PASSING</option>
                     <option value="2013">2013</option>
                     <option value="2014">2014</option>
                     <option value="2015">2015</option>
                     <option value="2016">2016</option>
                     <option value="2017">2017</option>
                     <option value="2018">2018</option>
                     <option value="2019">2019</option>
                     
                   </select>
            </div>

               <div class="col-md-12 col-sm-12">
                  <label for="Course Type">Course Type: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
                  <input type="radio" name="edu_course_type" value=" Full Time" checked>  Full Time &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                  <input type="radio" name="edu_course_type" value="Part Time"> Part Time &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                  <input type="radio" name="edu_course_type" value="Correspondence"> Correspondence
                  
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
 <SCRIPT LANGUAGE="JavaScript" src="js/clgauto.js"></SCRIPT>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
				</script>
				<script type="text/javascript">
				$(document).ready(function()
				{
				$(".quali").change(function()
				{
				var qua_id=$(this).val();
				var post_id = 'id='+ qua_id;
				//console.log(qua_id);
				
				$.ajax
				({
				type: "POST",
				url: "../deptselect.php",
				data: post_id,
				cache: false,
				success: function(dept)
				{
				$(".depart").html(dept);
				} 
				});
				
				});
				});
				</script>

<?php include_once("inc/footer.php"); ?>

