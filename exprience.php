

     
<?php include ('include/header.php');
        
        include('dbconfig.php');
      
  ?>

<style type="text/css">

li.ui-menu-item{
    font-size: 12px !important;
}

</style>
  		

			<div class="clearfix"></div>
			
			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">

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
					        <h2 style="text-align:center;">EXPRIENCE</h2>
						<div class="row bottom-mrg">
						<form class="add-feild"  action="include/uploadexprience.php" method="post" enctype="multipart/form-data">
								<div class="col-md-12 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" name="companyname" id="companyname" placeholder=" Company Name" required>
									    <div id="companyname_error" class="companyname_error"></div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6">
									<div class="input-group">
										<label style="font-size: 16px;">Exprience:</label>
									</div>
                                </div>
                                <div class="col-md-5 col-sm-6">
									<div class="input-group">
                                    <select name="years" value='' id="years" class="form-control" required><option value=""> Select years</option>
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
                                <div id="years_error"></div>
									</div>
                                </div>
                                <div class="col-md-5 col-sm-6">
									<div class="input-group">
                                <select name="months" value='' class="form-control" required>Select Month</option>
                                <?php
                                for ($i=0; $i<=12; $i++)
                                {
                                    ?>
                                        <option value="<?php echo $i;?> months" ><?php echo $i;?>&nbspmonths</option>
                                    <?php
                                }
                            ?>
                                </select>
									</div>
								</div>
								
                                <div class="col-md-12 col-sm-6">
									<div class="input-group ">
                               
                                    <input type="text" class="form-control" name="department" id="department" autocomplete="off" placeholder=" Exp Department" required>
                                    
                                   
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-6">
									<div class="input-group ">
                               
                                    <input type="text" class="form-control" name="organisation" id="org" placeholder="Oragnization" required>
								
                                <div id='organisation_error' ></div> 
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6">
									<div class="input-group"><br>
										<label style="font-size: 16px;">Salary:</label>
									</div>
                                </div>
                                <div class="col-md-5 col-sm-6">
									<div class="input-group">
                                    <select   class="form-control" name="lakhs" required>lakhs</option>
                            <?php
                                for ($i=0; $i<=100; $i++)
                                {
                                    ?>
                                        <option value="<?php echo $i;?> lakhs" ><?php echo $i;?>&nbsplakhs</option>
                                    <?php
                                }
                            ?>
                            </select>
                             
                                
									</div>
                                </div>
                                <div class="col-md-5 col-sm-6">
									<div class="input-group">
                                     <select   class="form-control" name="thousands" required> Thousands</option>
                                <?php
                                    for ($i=0; $i<=100; $i++)
                                    {
                                        ?>
                                            <option value="<?php echo $i;?> thousands" ><?php echo $i;?>&nbspthousands</option>
                                        <?php
                                    }
                                ?>
                                </select>
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
                $("#companyname").focusout(companyname)
				function companyname(){
				var companyname=$("#companyname").val();
				if(companyname=="")
				 $("#companyname_error").html("CompanyName is Required").css('color','red');
              
                else
                    $("#companyname_error").removeClass('companyname_error');
                
                }
                // $("#department").focusout(department)
				// function department(){
				// var department=$("#department").val();
				// if(department=="")
				//  $("#department_error").html("Department is Required").css('color','red');
                // }
                
              
                $("#org").focusout(org)
				function org(){
				var org=$("#org").val();
				if(org=="")
				 $("#organisation_error").html("Organisation is Required").css('color','red');
				}

                });
                </script>

 

<!--This is for Organization Autocomplete -->
 <SCRIPT LANGUAGE="JavaScript" src="js/exporgauto.js"></SCRIPT>
           

           <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
            
                    <script>  
        $(document).ready(function(){  
            $('#department').keyup(function(){  
                var query = $(this).val();  
                if(query != '')  
                {  
                        $.ajax({  
                            url:"autocomp.php",
                            method:"POST",  
                            data:{query:query},  
                            success:function(data)  
                            {  
                                $('#depart_name').fadeIn();  
                                $('#depart_name').html(data);  
                            }  
                        });  
                }  
            });  
            $(document).on('click', 'li', function(){  
                $('#department').val($(this).text());  
                $('#depart_name').fadeOut();  
            });  
        });  
        </script> 
         -->

     

	<!--footer-->
    <?php include 'include/footer.php'; ?>
 