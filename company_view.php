<?php include ('include/header1.php');
        
	  include('dbconfig.php');
	
?>

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
					        <h2 style="text-align:center;">COMPANY PROFILE</h2>
                            <br><br>
                            <!-- <div id="tick"></div> -->
						<div class="row bottom-mrg">
                        <?php 
                         $sql="SELECT * FROM `company_profile` where company_rpid=$pid ";
                         $result=mysqli_query($conn,$sql);
                         for($i=0;$row=mysqli_fetch_assoc($result); $i++){
                             $country=$row['company_country'];
                             $state=$row['company_state'];
                             $city=$row['company_city'];
                             $company_name=$row['company_name'];
                             $company_email=$row['company_email'];
                             $company_phone=$row['company_phone'];
                             $company_address=$row['company_address'];
                             $company_pincode=$row['company_pincode'];
       

                            ?>
							<form class="add-feild">
                            <div class="col-md-12 col-sm-6">
						    	<div class="input-group">
							<a href="javascript:void(0);" style="float:right;" class="edit" id="edit"><i class="ti-pencil"></i>Edit</a>
							</div>
						    </div>
                            <div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label> Company Name </label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" style="display:none;" class="form-control company" style="display:none;" value="<?php if($company_name==""){ echo "Not Mentioned"; } else { echo $company_name;} ?>">
									<p class="democompany"><?php if($company_name==""){ echo "Not Mentioned"; } else { echo $company_name; } ?></p>
                                    </div>
								</div>
                                   <div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label>  Mail-id </label>
									</div>
								</div>
								
							 <div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="email" style="display:none;" class="form-control email"  value="<?php if($company_email==""){ echo "Not Mentioned"; } else { echo $company_email;} ?>">
                                        <p class="demoemail"><?php if($company_email==""){ echo "Not Mentioned"; } else {  echo $company_email; } ?></p>
                                    </div>
								</div>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label>  Phone-Number </label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" style="display:none;" class="form-control phone"  value="<?php if($company_phone=="") { echo "Not Mentioned"; } else { echo $company_phone; } ?>">
                                        <p class="demophone"><?php if($company_phone=="") { echo "Not Mentioned"; } else { echo $company_phone; } ?></p>
                                    </div>
								</div>
                               <div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label> Country </label>
									</div>
								</div>
                                <?php 
                                if($country==""){ ?>
                                    <div class="col-md-9 col-sm-6">
																	<div class="input-group">
								<select id="country" style="display:none;" class="form-control country">
									<option value="<?php echo "Not Mentioned"; ?> "><?php echo  "Not Mentioned"; ?> </option>
									<?php
                                    	
                                        $query = $conn->query("SELECT * FROM country  ORDER BY cnname ASC");
        
                                        //Count total number of rows
                                        $rowCount = $query->num_rows;
                                       
									if($rowCount > 0){
										while($row = $query->fetch_assoc()){ 
											echo '<option value="'.$row['cnid'].'">'.$row['cnname'].'</option>';
										}
									}else{
										echo '<option value="">Country not available</option>';
									}
									?>
								</select>
                                <p id="democountry"><?php echo  "Not Mentioned"; ?></p>
                                </div>
                                    </div>
                                    

                              <?php  } else {
                                $sql="SELECT * FROM country where cnid=$country ";
                                $result=mysqli_query($conn,$sql);
                                for($i=0;$row=mysqli_fetch_assoc($result); $i++){
                                   $coun=$row['cnname'];
                                   $cnid=$row['cnid'];
                                    ?>
							
								               <div class="col-md-9 col-sm-6">
																	<div class="input-group">
								<select id="country" style="display:none;" class="form-control country">
									<option value="<?php echo $cnid; ?> "><?php echo $coun; ?> </option>
									<?php
                                    	
                                        $query = $conn->query("SELECT * FROM country  ORDER BY cnname ASC");
        
                                        //Count total number of rows
                                        $rowCount = $query->num_rows;
                                       
									if($rowCount > 0){
										while($row = $query->fetch_assoc()){ 
											echo '<option value="'.$row['cnid'].'">'.$row['cnname'].'</option>';
										}
									}else{
										echo '<option value="">Country not available</option>';
									}
									?>
								</select>
                                <p id="democountry"><?php echo $coun; ?></p>
                                </div>
                                    </div>
                                    <?php }  } ?>

                                    <?php if($state=="") { ?>
                                        <div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label> State </label>
									</div>
								</div>
									
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
									<select id="state" style="display:none;" class="form-control state">
										<option value="<?php echo "Not Mentioned"; ?>"><?php echo "Not Mentioned"; ?></option>
									</select>
                                    <p class="demostate"><?php echo "Not Mentioned"; ?></p>
									</div>
								</div>

                                   <?php } else {
                                $sql="SELECT * FROM state where stid=$state ";
                                $result=mysqli_query($conn,$sql);
                                for($i=0;$row=mysqli_fetch_assoc($result); $i++){
                                    ?>
								
                                    <div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label> State </label>
									</div>
								</div>
									
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
									<select id="state" style="display:none;" class="form-control state">
										<option value="<?php echo $row['stid']; ?>"><?php echo $row['stname']; ?></option>
									</select>
                                    <p class="demostate"><?php echo $row['stname']; ?></p>
									</div>
								</div>
                                <?php }  } ?>
                                <?php  
                                if($city=="") { ?>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label> City </label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
								<select id="city" name="city" style="display:none;" class="form-control city">
									<option value="<?php echo "Not Mentioned"; ?>"><?php echo "Not Mentioned"; ?></option>
								</select>
                                <p class="democity"><?php echo "Not Mentioned"; ?></p>
									</div>
								</div>

                                <?php  } else {
                                $sql="SELECT * FROM city where ctid=$city ";
                                $result=mysqli_query($conn,$sql);
                                for($i=0;$row=mysqli_fetch_assoc($result); $i++){
                                    $ctname=$row['ctname'];
                                    $ctid=$row['ctid'];
                                    ?>

                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label> City </label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
								<select id="city" name="city" style="display:none;" class="form-control city">
									<option value="<?php echo $ctid; ?>"><?php echo $ctname; ?></option>
								</select>
                                <p class="democity"><?php echo $ctname; ?></p>
									</div>
								</div>
                                <?php } }?>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label> Address </label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" style="display:none;" class="form-control address"  value="<?php if($company_address=="") { echo "Not Mentioned"; } else { echo $company_address; } ?>">
									      <p class="demoaddress"><?php if($company_address=="") { echo "Not Mentioned"; } else { echo $company_address; } ?><p>
                                    </div>
								</div>
                                <div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label> PostalCode </label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" style="display:none;"  class="form-control pincode" value="<?php if($company_pincode==""){ echo "Not Mentioned"; } else { echo $company_pincode;} ?>">
									    <p class="demopincode"><?php if($company_pincode==""){ echo "Not Mentioned"; } else { echo $company_pincode; } ?></p>
                                    </div>
								</div> 
								<div class="col-md-12 col-sm-6">
								<div class="input-group" style="text-align:center;">
                                <input type="button"  style="display:none" class="save btn btn-success" value="Save">
								<input type="button"  style="display:none" class="cancel  btn btn-danger" value="Cancel">
									</div></div>
								
							</form>
                                <?php  } ?>
						</div>
					
					
					</div>
				</div>
			</div>
			
			<!-- full detail SetionStart-->			

			
			<!-- Footer Section Start -->
		


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
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
						});

						</script>

<script type="text/javascript" 
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

                        <script type="text/javascript">
                        
                        $(document).ready(function() {

                        $(".edit").click(function(){
                            $(this).parent().parent().siblings().children().children("p").hide();
                            $(this).parent().parent().siblings().children().children("input").show();
                            $(this).parent().parent().siblings().children().children("select").show();
                             this.style.display = 'none'

                        }); 

                        $(".cancel").click(function(){
                            $(this).parent().parent().siblings().children().children("p").show();
                            $(this).parent().parent().siblings().children().children("a").show();
                            $(this).parent().parent().siblings().children().children("input").hide();
                            $(this).parent().parent().siblings().children().children("select").hide();
                            $(this).siblings("input.save").hide();
                             this.style.display = 'none'

                        }); 

                        $(".save").click(function(){
                            var pid="<?php echo $pid; ?>";
                            var name=$(this).parent().parent().siblings().children().children("input.company").val();
                            var email=$(this).parent().parent().siblings().children().children("input.email").val();
                            var phone=$(this).parent().parent().siblings().children().children("input.phone").val();
                            var country=$(this).parent().parent().siblings().children().children("select.country").val();
                            var state=$(this).parent().parent().siblings().children().children("select.state").val();
                            var city=$(this).parent().parent().siblings().children().children("select.city").val();
                            var address=$(this).parent().parent().siblings().children().children("input.address").val();
                            var pincode=$(this).parent().parent().siblings().children().children("input.pincode").val();
                            $.ajax({
                                url:'include/company_update.php',
                                method:'POST',
                                data:{pid:pid,name:name,email:email,phone:phone,country:country,state:state,city:city,address:address,pincode:pincode
                                },
                                success:function(response){
                                $("#tick").html(response);
                                $(".save").parent().parent().siblings().children().children("p").show();
                                $(".save").parent().parent().siblings().children().children("a").show();
                                $(".save").parent().parent().siblings().children().children("input").hide();
                                $(".save").parent().parent().siblings().children().children("select").hide();
                                $(".save").siblings("input.cancel").hide();
                                $(".save").hide();

                                }
                            });

                            var name=$(this).parent().parent().siblings().children().children("input.company").val();
                            $(this).parent().parent().siblings().children().children("p.democompany").text(name);
                            var email=$(this).parent().parent().siblings().children().children("input.email").val();
                            $(this).parent().parent().siblings().children().children("p.demoemail").text(email);
                            var phone=$(this).parent().parent().siblings().children().children("input.phone").val();
                            $(this).parent().parent().siblings().children().children("p.demophone").text(phone);
                            var country=$(this).parent().parent().siblings().children().children("select.country").text();
                            $(this).parent().parent().siblings().children().children("p.democountry").text(country);
                            var state=$(this).parent().parent().siblings().children().children("select.state").text();
                            $(this).parent().parent().siblings().children().children("p.demostate").text(state);
                            var city=$(this).parent().parent().siblings().children().children("select.city").text();
                            $(this).parent().parent().siblings().children().children("p.democity").text(city);
                            var address=$(this).parent().parent().siblings().children().children("input.address").val();
                            $(this).parent().parent().siblings().children().children("p.demoaddress").text(address);
                            var pincode=$(this).parent().parent().siblings().children().children("input.pincode").val();
                            $(this).parent().parent().siblings().children().children("p.demopincode").text(pincode);



                        });
                    
                        
                           

                        });

                      
                        </script>

                        

	            <!--footer-->
	       <?php include 'include/footer.php'; ?>