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

#unified-inputs.input-group { width: 100%; }
#unified-inputs.input-group select.one { width: 15% !important; }
#unified-inputs.input-group input.phone { width: 85% !important; }
#unified-inputs.input-group input:last-of-type { border-left: 0; }

	
	</style>

			<div class="clearfix"></div>
			
			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">
				<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step" >
        <a href="#step-1" type="button" style="background-color:#81b300;" class="btn btn-primary btn-circle color" >1</a>
        <p>Personal Info</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle " disabled="disabled">2</a>
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
					<form class="add-feild" action="include/uploadprofile.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="detail-pic js">
								<div class="box">
									<input type="file" name="image" id="upload-pic" class="inputfile" onchange="loadFile(event)"  />
									<label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><img id="output"/><span></span></label>
								</div>&nbsp&nbsp&nbsp<b>Profile Image</b>
								
							</div>
							<center><p id="error1" style="display:none; color:#FF0000;">Invalid Image Format! Image Format Must Be JPG, JPEG or PNG.</p></center>
						</div>
						        <h2 style="text-align:center;">PERSONAL INFORMATION</h2>
						<div class="row bottom-mrg">
							
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" name="fname" id="fname" placeholder=" Your First Name" required>
										<div id='fname_error'></div>
									</div>
								</div>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" name="lname" id="lname"  placeholder=" Your Last Name" required>
										<div id='lname_error'></div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
									<select id="gender" name="gender" class="form-control" id="gender" required>
									<option value="" >---Choose Your Gender---</option>
									<option value="Male" >Male</option>
									<option value="Female">Female</option>
									<option value="Others">Others</option>
								</select><div id='gender_error'></div>
									</div>
								</div>
								<?php
								$query = $conn->query("SELECT * FROM country  ORDER BY cnname ASC");

								//Count total number of rows
								$rowCount = $query->num_rows;
								?>
								<div class="col-md-6 col-sm-6">
																	<div class="input-group">
								<select id="country" name="country" class="form-control country" id="country" required>
									<option value="">Select Country</option>
									<?php
									if($rowCount > 0){
										while($row = $query->fetch_assoc()){ 
											echo '<option value="'.$row['cnid'].'">'.$row['cnname'].'</option >';
										}
									}else{
										echo '<option value="">Country not available</option>';
									}
									?>
								</select>
								<div id='country_error'></div>
								</div>
									</div>
								
							
									
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
									<select id="state" name="state" class="form-control state" id="state" required>
										<option value="">Select country first</option>
									</select>
									<div id='state_error'></div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
								<select id="city" name="city" class="form-control city" id="city" required>
									<option value="">Select state first</option>
								</select>
								<div id='city_error'></div>
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
								echo "<option value=".$row3['phonecode'].">".$row3['phonecode']."</option>";;
									
								}
										?>
									</select>
										<input type="number" class="form-control phone"  name="mobile" id="cuspno" placeholder="Your Mobile number" required>
										<div id='cuspno_error'></div>
										<div class='pcode_error'></div>
										<!-- <button type="button" id="csearch" data-toggle="modal" required>Send OTP</button> -->
									</div>
								</div>
								<!-- <div class="col-md-6 col-sm-6"  style='display:none;' id="otpform">
									<div class="input-group">
										<input type="text" class="form-control"name="otpcode" id="otps" placeholder="Enter Your OTP" required>
										<div id='otps_error'></div>
										<button type="button" data-toggle="modal" id="sendotps"  required>Verify OTP</button>
									</div>
								</div> -->
							
								<?php
								
								
								$query = "SELECT * FROM `work_exp`";
								$result2 = mysqli_query($conn, $query);

							
								$options = "";

								while($row2 = mysqli_fetch_array($result2))
								{
									$options = $options."<option>$row2[exp_yrs]</option>";
									
								}

								
								?>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
									<select type="select" class="form-control" name="exprience" id="exprience" required>
								<option>--Exprience--</option>
									<?php echo $options;?>
								</select>
								<div id='exprience_error'></div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" name="address" id="address" placeholder="Your Address" required>
									    <div id='address_error'></div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" name="pincode" class="form-control" id="pincode" placeholder="Your PostalCode" required>
									    <div id='pincode_error'></div>
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
			<!-- General Detail End -->
			
			<!--Form Validation-->
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script type="text/javascript">

				$(document).ready(function () {
					$(".pcode").hide();
					$(".pcode1").hide();
					$(".phone_code").hide();

				$("#fname").focusout(fname)
				function fname(){
				var pfname=$("#fname").val();
				if(pfname==""){
				$("#fname_error").html("FirstName is Required").css('color','red');
				} else {
					$("#fname_error").hide();
				}
				}

				$("#lname").focusout(lname)
				function lname(){
				var lname=$("#lname").val();
				if(lname=="") {
				$("#lname_error").html("LastName is Required").css('color','red');
				} else {
					$("#lname_error").hide();
				}
				}
				$("#gender").focusout(gender)
				function gender(){
				var gender=$("#gender").val();
				if(gender=="") {
				$("#gender_error").html("Gender is Required").css('color','red');
				} else {
					$("#gender_error").hide();
				}
				}

				$("#cuspno").focusout(cuspno)
				function cuspno(){
				var cuspno=$("#cuspno").val();
				if(cuspno=="") {
				$("#cuspno_error").html("Mobile Number is Required").css('color','red');
				} else {
					$("#cuspno_error").hide();
				}
				}

				$("#otps").focusout(otps)
				function otps(){
				var otps=$("#otps").val();
				if(otps=="") {
				$("#otps_error").html("Otp is Required").css('color','red');
				} else {
					$("#otps_error").hide();
				}
				}

				$("#country").focusout(country)
				function country(){
				var country=$("#country").val();
				if(country=="") {
				$("#country_error").html("Country is Required").css('color','red');
				} else {
					$("#country_error").hide();
				}
				}

				$("#state").focusout(state)
				function state(){
				var state=$("#state").val();
				if(state=="") {
				$("#state_error").html("State is Required").css('color','red'); 
				} else {
					$("#state_error").hide();
				}
				}

				$("#city").focusout(city)
				function city(){
				var city=$("#city").val();
				if(city=="") {
				$("#city_error").html("City is Required").css('color','red');
				} else {
					$("#city_error").hide();
				}
				}

				$("#exprience").focusout(exprience)
				function exprience(){
				var exprience=$("#exprience").val();
				if(exprience=="") {
				$("#exprience_error").html("Exprience is Required").css('color','red');
				} else {
					$("#exprience_error").hide();
				}
				}

				$("#address").focusout(address)
				function address(){
				var address=$("#address").val();
				if(address=="") {
				$("#address_error").html("Address is Required").css('color','red');
				} else {
					$("#address_error").hide();
				}
				}

				$("#pincode").focusout(pincode)
				function pincode(){
				var pincode=$("#pincode").val();
				if(pincode=="") {
				$("#pincode_error").html("Pincode is Required").css('color','red'); 
				} else {
					$("#pincode_error").hide();
				}
				}

	});  
		

</script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.country').on('change',function(){
						var countryID = $(this).val();
						if(countryID){
							$.ajax({
								type:'POST',
								url:'select.php',
								data:'cnid='+countryID,
								success:function(html){
									$('.state').html(html);
									$('.city').html('<option value="">Select state first</option>'); 
								}
													}); 
								}else{
									$('.state').html('<option value="">Select country first</option>');
									$('.city').html('<option value="">Select state first</option>'); 
								}
							});
							
							$('.state').on('change',function(){
								var stateID = $(this).val();
								if(stateID){
									$.ajax({
										type:'POST',
										url:'select.php',
										data:'stid='+stateID,
										success:function(html){
											$('.city').html(html);
										}
									}); 
								}else{
									$('.city').html('<option value="">Select state first</option>'); 
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
										$(".phone").attr("placeholder",+data+"  "+"Digits");
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
								$(".pcode_error").html("");
							}
							else {
								$(".pcode_error").html("Invalid Number").css("color","red");
								
							}
						});
						});

						</script>

						<script type="text/javascript">
						function showFunction() {
						var x = document.getElementById("otpform");
						if (x.style.display === "none") {
							x.style.display = "block";
						} else {
							//x.style.display = "none";
						}
						}
						</script>

						<script type="text/javascript">
						


						//	$(document).ready(function(){
								
								
								
						// 	$("#csearch").click(function()
						// 	{
						// 		var textboxvalue = $('input[name=mobile]').val();

						// 		$.ajax(
						// 		{
						// 			type: "POST",
						// 			url: 'include/sendotp.php',
							
						// 			data: {txt1: textboxvalue,action:"send_otp"},
						// 			success: function(result)
						// 			{
										
						// 				$("#result").html(result);
						// 				// $("input[value='two']").prop( "checked", true );
						// 				console.log(result);  
						// 			// $("div#otpform").removeClass("hidden");
						// 				//document.getElementById("").style.display='block';
						// 				showFunction();
						// 			}
						// 		});
						// 	});  
						// 	$("#sendotps").click(function()
						// 	{
								
						// var textboxvalue = $('input[name=otpcode]').val();
						// /*$query=$conn->query("select * from customer where email='$email'");
						// 		if($query->num_rows>0)
						// 		{
						// 			$_SESSION['sign_msg'] = "Email already taken";
						// 			header('location:register.php');
						// 		}*/
						
						// 	$.ajax(
						// 		{
						// 			type: "POST",
						// 			url: 'include/sendotp.php',
							
						// 			data: {txt1: textboxvalue,action:"verify_otp"},
						// 			success: function(result)
						// 			{
						// 				$("#result").html(result);
										
						// 			console.log(result);  
									
						// 				if(result=="1"){
						// 					$("#cuspno").prop("readonly", true);
						// 					$("#otps").prop("readonly", true);
						// 					$(':input[type="submit"]').prop('disabled', false);
						// 				}else{
						// 					alert("OTP NOT VERIFIED");
						// 				}
						// 			}
						// 		});
							
						// 	});  
						// 	});
							</script>

							<script>
							$(document).ready(function() {

							$(".inputfile").bind('change',function(){
								var ext = $('.inputfile').val().split('.').pop().toLowerCase();
								if ($.inArray(ext, ['png','jpg','jpeg']) == true){
									$('#error1').hide();

								}
								else{
									$("#error1").slideDown("fast");
								}
							});
						});
		</script>

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
	  $("i.fa-upload").hide();
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
		
	<!--footer-->
	<?php include 'include/footer.php'; ?>