


<?php include ('include/header.php');

        include('dbconfig.php');

  ?>

<style>
	.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}


	</style>


			<div class="clearfix"></div>

			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">

				<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step" >
        <a href="#step-1" type="button"  class="btn btn-primary btn-circle " style="background-color:#81b300;" disabled="disabled">1</a>
        <p>Personal Info</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" style="background-color:#81b300;" class="btn btn-primary btn-circle " >2</a>
        <p>Education</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Skills</p>
      </div>
    </div>
  </div>

				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->

			<!-- General Detail Start -->
			<div class="section detail-desc">
				<div class="container">
					<div class="ur-detail-wrap create-kit padd-bot-0">

						<div class="row">
							<!-- <div class="detail-pic js">
								 <div class="box">
									<input type="file" name="image" id="upload-pic" class="inputfile" />
									<label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
								</div>
							</div> -->
						</div><br><br>
					        <h2 style="text-align:center;">EDUCATION QUALIFICATION</h2>
						<div class="row bottom-mrg">
						<form class="add-feild" action="include/uploadeducation.php" method="post" enctype="multipart/form-data">
					
								 <div class="col-md-2 col-sm-6">
									<div class="input-group">
										<label style="font-size: 16px;">Degree of Qualification:</label>
									</div>
                                </div>
							<div class="col-md-5 col-sm-6">
									<div class="input-group">
									<select  class="form-control quali" name="degree" id="degree">
								<option value="0">Select Qualification</option>
								<?php
								
								$sql = mysqli_query($conn,"SELECT * FROM edu_quali");
								while($row=mysqli_fetch_array($sql))
								{
								echo '<option value="'.$row['qua_id'].'">'.$row['qua_name'].'</option>';
								} ?>
								</select>
								<div id='degree_error'></div>
									</div>
                                </div>

								<div class="col-md-5 col-sm-6">
									<div class="input-group">

									<select type="select" class="form-control depart" name="dept" id="dept" required>
								<option>--Department--</option>

								</select>
								<div id='dept_error'></div>
									</div>
                                </div>
                                <div class="col-md-12 col-sm-6">
									<div class="input-group">
									<label for="Insititude">Institude:</label>
									<!-- <div class="search-box"> -->
										<input type="text" name="institude" class="form-control " id="institude" autocomplete="off" required>
									<div id='institude_error'></div>
								</div></div>

								<div class="col-md-12 col-sm-6">
									<div class="input-group">
									<label for="Year of Passouts">Year of Passing:</label>
									<select id="year" class="form-control" name="passedout" required>
								</select>

								</div>
								</div>

								<div class="col-md-12 col-sm-6">
									<div class="input-group" >
									<label for="Course Type">Course Type: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
									<input type="radio" name="type" value=" Full Time" checked>  Full Time &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
									<input type="radio" name="type" value="Part Time"> Part Time &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
									<input type="radio" name="type" value="Correspondence"> Correspondence
									</div>
								</div>


								<div class="input-group" style="text-align:center;">
								<input type="submit"  name="submit" class="btn btn-lg btn-success" value="Next" />
									</div>


						</div>
						</form>


					</div>
				</div>
			</div>

	 <script>
			var start = 1970;
			var end = new Date().getFullYear();
			var options = "";
			for(var year = start ; year <=end; year++){

			options += "<option>"+ year +"</option>";
			}
			document.getElementById("year").innerHTML = options;

			</script> 

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
   <!-- This is For Keyword Auto Search -->
   <!-- This is For Location Auto Search -->
   <!-- This is For College Auto Search -->
   <!-- This is For Skills Auto Search -->
   <!-- This is For dept Auto Search -->
 <SCRIPT LANGUAGE="JavaScript" src="js/keywordauto.js"></SCRIPT>

           <!--Form Validation-->
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script type="text/javascript">

				$(document).ready(function () {
				$("#degree").focusout(degree)
				function degree(){
				var degree=$("#degree").val();
				if(degree=="")
				$("#degree_error").html("Degree is Required").css('color','red');
				}

			
				$("#dept").focusout(dept)
				function dept(){
				var dept=$("#dept").val();
				if(dept=="")
				$("#dept_error").html("Select Department First").css('color','red');
				}

				$("#institude").focusout(institude)
				function institude(){
				var institude=$("#institude").val();
				if(institude=="")
				$("#institude_error").html("Institude is Required").css('color','red');
				}

				

			});

			</script>



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
				url: "deptselect.php",
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



	<!--footer-->
    <?php include 'include/footer.php'; ?>


