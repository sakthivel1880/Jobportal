<?php include ('include/header1.php');
        
	  include('dbconfig.php');
	
?>
<style>
	#unified-inputs.input-group { width: 100%; }
#unified-inputs.input-group select.one { width: 15% !important; }
#unified-inputs.input-group input.phone { width: 85% !important; }
#unified-inputs.input-group input:last-of-type { border-left: 0; }
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
								
							</div>
						</div><br><br>
					        <h2 style="text-align:center;">COMPANY PROFILE</h2>
						<div class="row bottom-mrg">
							<form class="add-feild" action="include/uploadcompany.php" method="post" enctype="multipart/form-data">
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" name="name" placeholder=" Company Name">
									</div>
								</div>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="email" class="form-control" name="email"  placeholder=" Company Email">
									</div>
								</div>
							
								<?php
								$query = $conn->query("SELECT * FROM country  ORDER BY cnname ASC");

								//Count total number of rows
								$rowCount = $query->num_rows;
								?>
								<div class="col-md-6 col-sm-6">
																	<div class="input-group">
								<select id="country" name="country" class="form-control country">
									<option value="">Select Country</option>
									<?php
									if($rowCount > 0){
										while($row = $query->fetch_assoc()){ 
											echo '<option value="'.$row['cnid'].'">'.$row['cnname'].'</option>';
										}
									}else{
										echo '<option value="">Country not available</option>';
									}
									?>
								</select></div>
									</div>
								
							
									
								<div class="col-md-6 col-sm-6">
									<div class="input-group" >
									<select id="state" name="state" class="form-control state">
										<option value="">Select country first</option>
									</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
								<select id="city" name="city" class="form-control city">
									<option value="">Select state first</option>
								</select>
									</div>
								</div>
								
								<input type="text" class="pcode" name="pcode">
								<input type="text" class="pcode1" name="pcode1">

								<div class="col-md-6 col-sm-6">
									<div class="input-group" id="unified-inputs">
									<select class="form-control one" style="background-color:#e4e7ec;"  name="phone_code" >
										<?php
										$sql1="SELECT * FROM `country` ";
										$res1=mysqli_query($conn,$sql1);
										$options = "";

								while($row3 = mysqli_fetch_array($res1))
								{
								echo 	"<option value=".$row3['phonecode'].">".$row3['phonecode']."</option>";;
									
								}
										?>
									</select>
										<input type="number" class="form-control phone" name="phone"  placeholder=" Company Phone No">
										<span class="code_error"></span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" name="address" placeholder="Your Address">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" name="pincode" class="form-control" placeholder="Your PostalCode">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="input-group">
										<textarea  name="description" class="form-control" placeholder="Your description"></textarea>
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
			
			<!-- full detail SetionStart-->			

			
			<!-- Footer Section Start -->
		


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$(".pcode").hide();
					$(".pcode1").hide();

					$('#country').on('change',function(){
						var countryID = $(this).val();
						if(countryID){
							$.ajax({
								type:'POST',
								url:'select.php',
								data:'cnid='+countryID,
								success:function(html){
									$('#state').html(html);
									$('#city').html('<option value="">Select state first</option>'); 
								}
													}); 
								}else{
									$('#state').html('<option value="">Select country first</option>');
									$('#city').html('<option value="">Select state first</option>'); 
								}
							});
							
							$('#state').on('change',function(){
								var stateID = $(this).val();
								if(stateID){
									$.ajax({
										type:'POST',
										url:'select.php',
										data:'stid='+stateID,
										success:function(html){
											$('#city').html(html);
										}
									}); 
								}else{
									$('#city').html('<option value="">Select state first</option>'); 
								}
							});
							$(".country").change(function(){
								var code=$(".country").val();
								$.ajax({
									url:'select.php',
									method:'POST',
									dataType:'JSON',
									async:false,
									data:{code:code},
									success:function(data){
										response = data;
									},
									error:function(){

									}
								});
								var len=response.length;
								for(var i=0;i<len;i++){
									var pcode=response[i].pcode;
									var plength=response[i].plength;

									if(plength.length > 2){
									value=plength.split("-");
									one=value[0];
									two=value[1];
									$(".pcode").val(one);
									$(".pcode1").val(two);
									
									} else {
										$(".pcode").val(plength);
									}


									$(".phone").attr("placeholder",plength+"  "+"Digits");
									$(".one").val(pcode);
								}
							});

							$(".one").change(function(){
								var one=$(this).val();
								$.ajax({
									url:'select.php',
									method:'POST',
									data:{one:one},
									success:function(data){
										$(".phone").attr("placeholder",data+"  "+"Digits");
										
										if(data.length > 2){
									value=data.split("-");
									one=value[0];
									two=value[1];
									$(".pcode").val(one);
									$(".pcode1").val(two);
									
									} else {
										$(".pcode").val(data);
									}

									}
								});
							});

							$(".phone").change(function(){
							var phone=$(this).val().length;
							var length=$(".pcode").val();
							var length1=$(".pcode1").val();
							if((phone == length) || (phone ==length1)){
								$(".code_error").html("");
							}
							else {
								$(".code_error").html("Invalid Number").css("color","red");
								
							}
						});
						});

						</script>

	            <!--footer-->
	       <?php include 'include/footer.php'; ?>