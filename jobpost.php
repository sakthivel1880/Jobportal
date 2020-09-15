<?php include ('include/header1.php');
        
	  include('dbconfig.php');
	
?>
<style>
	#unified-inputs.input-group { width: 100%; }
#unified-inputs.input-group  select { width: 40% !important; }
#unified-inputs.input-group  input { width: 60% !important; }
#unified-inputs.input-group select:last-of-type  { border-left: 0; }
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
							<div class="">
								<!-- <div class="box">
									<input type="file" name="upload-pic[]" id="upload-pic" class="inputfile" />
									<label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
								</div> -->
							</div>
						</div><br><br>
					        <h2 style="text-align:center;">JOB POST</h2>
						<div class="row bottom-mrg">
							<form class="add-feild"action="include/upload_jobpost.php" method="post" id="frm" enctype="multipart/form-data">
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
									<select type="select" class="form-control" name="type" autocomplete="off" required>
									<option value="">--select Job Type--</option>
									<option value="Full Time">Full Time</option>
									<option value="Part Time">Part Time</option>
									<option value="Walk-in">Walk-in</option>
									<option value="Freshers">Freshers</option>
									<option value="Internship">Internship</option>	
									<option value="Contract">Contract</option>
									</select>
									</div>
								</div>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
									<textarea type="text" class="form-control" name="duties"  placeholder="Job duties" autocomplete="off" required></textarea>
									</div>
								</div>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
									<textarea type="text" class="form-control" name="responsibilities"   placeholder="Job Responsibilities" required></textarea>
									</div>
								</div>
								
							
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<textarea type="text" class="form-control" name="description" placeholder="Job Description" required></textarea>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" name="location" id="location" autocomplete="off"  placeholder="Job Location" required>
										
									</div>
								</div>
									<?php
								
								
								$query = "SELECT * FROM `job_title` ORDER BY `jt_name` ASC";
								$result2 = mysqli_query($conn, $query);

								$options = "";

								while($row2 = mysqli_fetch_array($result2))
								{
									$options = $options."<option>$row2[jt_name]</option>";
									
								}

								
								?>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
									<select type="select" class="form-control" name="titlename" required>
									<option>--select Job Title--</option>
										<?php echo $options;?>
									</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" name="skills" class="form-control" autocomplete="off" placeholder="Job Skills" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" name="hirepersons" class="form-control" autocomplete="off" placeholder="Job Hirepersons" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group" id="unified-inputs">
										<input type="number" name="minsal" class="form-control minsal" autocomplete="off" placeholder="Minimum Salary" required>
										
										<select  name="minsal_rs" class="form-control minsal_rs" autocomplete="off" required>

										<?php
										$sql4="SELECT * FROM `company_profile` WHERE company_rpid='$pid' ";
										$res4=mysqli_query($conn,$sql4);
										$row4 = mysqli_fetch_array($res4);
										$country=$row4['company_country'];

										$sql5="SELECT * FROM `country` WHERE cnid='$country' ";
										$res5=mysqli_query($conn,$sql5);
										$row5 = mysqli_fetch_array($res5);
										
										echo "<option value=".$row5['contry_currency'].">".$row5['country_currency']."</option>";

										$sql1="SELECT * FROM `currency_type` ";
										$res1=mysqli_query($conn,$sql1);
				
								while($row3 = mysqli_fetch_array($res1))
								{
								echo 	"<option value=".$row3['cur_code'].">".$row3['cur_code']. "&nbsp&nbsp(".$row3['cur_name'].")"."</option>";
									
								}
										?>
										
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="number" name="maxsal" class="form-control maxsal" autocomplete="off" placeholder="Maximum Salary" required>
										<span class="sal_error" style="color:red;"></span>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
									<select name="exprience" value='' class="form-control"><option value=""> Exprience years</option>
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
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" name="link" class="form-control" autocomplete="off" placeholder="Job Link" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="email" name="refmail" class="form-control" autocomplete="off" placeholder="Job  Mail" required>
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="input-group"><br>
									<label for="job Resume">Job Resume: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
									<input type="radio" name="resume" value=" Compulsary" checked> Compulsary &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
									<input type="radio" name="resume" value="Optional"> Optional &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
									</div>
								</div>
								
								<div class="input-group" style="text-align:center;">
								<input type="submit" name="submit" class="btn btn-lg btn-success" value="Submit" />
									</div>
								
							</form>
						</div>
					
						
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


                    <script>
         $(document).ready(function(){
        
			//THIS IS FOR SALARY
			$(".maxsal").change(function(){
				var minsal=$(".minsal").val();
				var maxsal=$(this).val();

				var cal=maxsal - minsal;
				//console.log(cal);
				if(maxsal <= minsal){
					$(".sal_error").html("Inavlid Salary Maximum Salary");
				} else {
					$(".sal_error").html("");
				}
			});
        });
		</script>

		
		

	            <!--footer-->
	       <?php include 'include/footer.php'; ?>