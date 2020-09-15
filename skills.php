

     
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
        <a href="#step-2" type="button" style="background-color:#81b300;" class="btn btn-primary btn-circle " disabled="disabled" >2</a>
        <p>Education</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" style="background-color:#81b300;" class="btn btn-primary btn-circle" >3</a>
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
							
						</div><br><br>
                        	<form class="" action="include/uploadskills.php" method="post" enctype="multipart/form-data">
					        <h2 style="text-align:center;">SKILLS</h2>
                            <div class="extra-field-box">
								<div class="multi-box">	
									<div class="dublicat-box">
									
										<div class="col-md-12 col-sm-12">
                                        <label for="Skills">Skills:</label>
											<input type="text" class="form-control " name="skills[]"  id="skills"  autocomplete="off" placeholder="e.g. Css" required> 
                                        </div>
										
										<div class="col-md-12 col-sm-12">
                                        <label for="Skills-Exp">Skills-Exp:</label>
                                        <select   class="form-control" name="skillexp[] " required>Skills-Exp</option>
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
											
										<button type="button" style="background-color:red" class="btn remove-field">Remove</button>
									</div>
                                    
								</div>									
								<button type="button" class="add-field">Add More</button>
							</div>
                            
                            <div class="col-md-12 center-block">
                      <button id="singlebutton" name="submit" style="margin-bottom:10px" class="btn btn-primary center-block">submit</button>
                     </div>
									
						</form>
						
					
					</div>
				</div>
            </div>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
   <!-- This is For Keyword Auto Search -->
   <!-- This is For Location Auto Search -->
   <!-- This is For College Auto Search -->
   <!-- This is For Skills Auto Search -->
 <SCRIPT LANGUAGE="JavaScript" src="js/keywordauto.js"></SCRIPT>
            
             <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script type="text/javascript">

				$(document).ready(function () {
                $("#skills").focusout(skills)
				function skills(){
				var skills=$("#skills").val();
				if(skills=="")
				 $("#skills_error").html("skill is Required").css('color','red');
            
                }
                
            });
           
            </script> 

<!-- 
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tokeninput/1.7.0/jquery.tokeninput.js"></script> 
             <script>
            $(document).ready(function() {
                $("#multi_autocomplete").tokenInput("multipleauto.php", {
                    hintText: "Type your skills...",
                    noResultsText: "Skill not found.",
                    searchingText: "Searching..."
                });
            });
            </script> -->

           
            <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
            
                    <script>  
        $(document).ready(function(){  
            $('#skills').keyup(function(){  
                var query5 = $(this).val();  
                if(query5 != '')  
                {  
                        $.ajax({  
                            url:"autocomp.php",
                            method:"POST",  
                            data:{query5:query5},  
                            success:function(data)  
                            {  
                                $('#skill_name').fadeIn();  
                                $('#skill_name').html(data);  
                            }  
                        });  
                }  
            });  
            $(document).on('click', 'li', function(){  
                $('#skills').val($(this).text());  
                $('#skill_name').fadeOut();  
            });  
        });  
        </script>  -->



	<!--footer-->
    <?php include 'include/footer.php'; ?>
  