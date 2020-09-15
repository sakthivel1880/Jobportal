<?php include ('include/header.php');
        
        include('dbconfig.php');
      
  ?>

  <style>
	  .bottom-mrg{
		margin-bottom: 0em;
	  }
	  #demoemail {
		text-transform: lowercase;
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
					



                    <?php
                    $sql="SELECT * FROM profile where pid=$pid";
                    $result=mysqli_query($conn,$sql);
                    for($i=0; $row=mysqli_fetch_assoc($result); $i++){
						$pid=$row['pid'];
						$username=$row['pusername'];

					?>
					
					
								
									<?php if($row['pimage']=="") {
										?>
										<div class="row">
							<div class="detail-pic js" style="padding: 50px;font-size: 70px;background-color: #efddef;">
										<div class="box">
									 <span id="first" style="color:purple"><?php echo strtoupper(substr($username,0,1)); ?></span>
									</div>
						</div>	</div>
									<?php } else { ?>
										<div class="row">
							<div class="detail-pic js">
										<div class="box">
									<img src="profileimage/<?php echo $row['pimage']; ?>" alt="<?php echo strtoupper(substr($username,0,1)); ?>">
									</div>
						</div>	</div><?php } ?>
								
							

              
			   <div class="row bottom-mrg1">
					<form class="add-feild" style="text-align:center;" >
						<div class="col-md-12 col-sm-6">
									<div class="input-group">
						
						<span><h3><?php echo ucfirst( $row['pusername']); ?></h3> </span>
						<span><h5> <?php echo  $row['pemail']; ?>&nbsp&nbsp &#10003; </h5> </span>
						<span><h5> <?php echo $row['pmobile']; ?> </h5> </span>
						</div></div>

						</form>
						</div>
					
                    <!--This is For Cnadidate Personal Information-->

					<h3 style="text-align:center;color:royalblue"> MY PROFILE </h3>
						 <a href="javascript:void(0);" class="editresume" id="editresume" style="float:right;border:1px solid royalblue;padding:5px 10px; border-bottom: 3px solid royalblue;border-radius: 5px;">Upload new resume</a>
						 <div id="tickresume"></div>	<div class="row bottom-mrg">
							<form class="add-feild">
							<div class="col-md-12 col-sm-6">
									<div class="input-group">
										<label for> Resume</label>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
                                        <input type="file" class="form-control resume" style="display:none;" name="resume" id="resume">
										<p id="error1" style="display:none; color:#FF0000;">Invalid Resume Format! Resume Format Must Be doc, docx, pdf or odt.</p>
									</div>
                                </div>
                                <div class="col-md-6 col-sm-6">
								<div class="input-group" >
								<input type="button"  id="submitresume" style="display:none;" class="btn btn-lg btn-success submitresume" value="Upload New Resume" />
								<input type="button"  id="cancelresume" style="display:none" class="btn btn-lg btn-danger cancelresume " value="Cancel Resume">
									</div></div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<p id="demoresume" class="demoresume"><?php echo $row['presume']; ?>&nbsp&nbsp &#10003;</p>
									</div>
								</div>

								</form>
								</div>
						 
						  <h3> Personal Information </h3>
						  <a  href="javascript:void(0);" style="float:right;" class="edit" id="edit"><i class="ti-pencil"></i>Edit</a>
						
						<div class="row bottom-mrg">
							<form class="add-feild">
							<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> FirstName</label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control fname" id="fname"  style="display:none;" value="<?php echo $row['pfname']; ?>" ><p id="demofirst" class="demofirst"><?php echo $row['pfname']; ?></p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> LastName</label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" id="lname"  style="display:none;" value="<?php echo $row['plname']; ?>" ><p id="demolast"><?php echo $row['plname']; ?></p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Email-id</label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" id="email"  style="display:none;" value="<?php echo $row['pemail']; ?>" ><p id="demoemail"><?php echo $row['pemail']; ?></p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Gender</label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<select class="form-control" id="gender" style="display:none;" value="<?php echo $row['pgender']; ?>" >
										
										<?php
										if($row['pgender']=="Male"){?>
										<option value="Male">Male</option>
											<option value="Female">Female</option>
				                            <option value="Others">Others</option>
										<?php } 
										else
										if($row['pgender']=="Female"){?>
										<option value="Female">Female</option>
											<option value="Male">Male</option>
				                            <option value="Others">Others</option>
										<?php } 
										else
										if($row['pgender']=="Others"){?>
										<option value="Others">Others</option>
											<option value="Female">Female</option>
				                            <option value="Male">Male</option>
										<?php } ?></select>
										<p id="demogender"><?php echo $row['pgender']; ?></p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Mobile Number</label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" id="mobile"  style="display:none;" value="<?php echo $row['pmobile']; ?>" ><p id="demomobile"><?php echo $row['pmobile']; ?></p>
									</div>
								</div>
								
							
								<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Address</label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" id="address"  style="display:none;" value="<?php echo $row['paddress']; ?>" ><p id="demoaddress"><?php echo $row['paddress']; ?></p>
									</div>
								</div>
								
								<input type="button"  style="display:none" class="save btn btn-success" value="Save">
								<input type="button"  style="display:none" class="cancel  btn btn-danger" value="Cancel">
								
										<?php } ?>
								
							</form>
						</div>
						<?php
					$sql="SELECT * FROM `profile_educ` where edu_rpid=$pid";
					$result=mysqli_query($conn,$sql);
					if (mysqli_num_rows($result)=="") {

                     ?>
						<h3> Education </h3>
						  <a href="javascript:void(0);" style="float:right;" class="editedu" id="editedu"><i class="ti-pencil"></i>Edit</a>
						  
						<div class="row bottom-mrg">
							<form class="add-feild">
							<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Degree of Qualification</label>
									</div>
								</div>

								<div class="col-md-9 col-sm-6">
									<div class="input-group">
									<select  class="form-control quali" style="display:none;"  id="degree" value="">
									<option value="Not Mentioned">Not Mentioned</option>
									<?php
								
								 $sql = mysqli_query($conn,"SELECT  * FROM edu_quali");
								 while($row=mysqli_fetch_array($sql))
								 {
								 echo '<option value="'.$row['qua_id'].'">'.$row['qua_name'].'</option>';
								 } ?>
								</select>
									<p id="demodegree" >Not Mentioned</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Department</label>
									</div>
								</div>
							
								<div class="col-md-9 col-sm-6">
									<div class="input-group">

									<select  type="select" class="form-control depart" style="display:none;"  name="dept" id="dept" required>
								<option value="Not Mentioned">Not Mentioned</option>

								</select>
								<p id="demodept" >Not Mentioned</p>
									</div>
					           </div> 
							   <div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Institude</label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" id="institude" style="display:none;" value="Not Mentioned"  ><p id="demoins">Not Mentioned</p>
										<!-- <div id="institude_name"></div> -->
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Year of Passing</label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" id="pass" style="display:none;"  value="Not Mentioned" ><p id="demopass">Not Mentioned</p>
									</div>
								</div>
								

								<?php }  else {
								
                    for($i=0; $row=mysqli_fetch_assoc($result); $i++){
					
						$edu_degree=$row['edu_degree'];
						$edu_dept=$row['edu_dept'];
						$edu_ins=$row['edu_ins'];
						$edu_pass=$row['edu_pass'];
					    $edu_course_type=$row['edu_course_type'];
					

					
                    ?>
						
						  <!--This is For Cnadidate Education-->

						<h3> Education </h3>
						  <a href="javascript:void(0);" style="float:right;" class="editedu" id="editedu"><i class="ti-pencil"></i>Edit</a>
						
						<div class="row bottom-mrg">
							<form class="add-feild">
							<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Degree of Qualification</label>
									</div>
								</div>
								<?php
								
					$sql="SELECT * FROM `edu_quali` where qua_id=$edu_degree";
					$result=mysqli_query($conn,$sql);
					for($i=0; $row=mysqli_fetch_assoc($result); $i++){
						 $qua_id=$row['qua_id'];
						 $qua_name=$row['qua_name'];
						 ?>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
									<select  class="form-control quali" style="display:none;"  id="degree" value="<?php echo $row['qua_name']; ?>">
								<option   value="<?php  echo $row['qua_id'];  ?>"><?php echo $row['qua_name'];  ?></option>
								<?php
								if(!$row['qua_name']==""){
								 $sql = mysqli_query($conn,"SELECT  * FROM edu_quali");
								 while($row=mysqli_fetch_array($sql))
								 {
								 echo '<option value="'.$row['qua_id'].'">'.$row['qua_name'].'</option>';
								 } }?>
								</select>
									<p id="demodegree" ><?php echo $qua_name;  ?></p>
									</div>
								</div><?php } ?>
								<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Department</label>
									</div>
								</div>
								<?php
								$sql="SELECT * FROM `edu_quali_dept` where edu_dep_id=$edu_dept";
					$result=mysqli_query($conn,$sql);
					for($i=0; $row=mysqli_fetch_assoc($result); $i++){
						$dept_name=$row['dept_name'];
?>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">

									<select  type="select" class="form-control depart" style="display:none;" name="dept" id="dept" required>
									<option   value="<?php echo $row['edu_dep_id']; ?>"> <?php echo $row['dept_name']; ?></option>

								</select>
								<p id="demodept" ><?php echo $row['dept_name']; ?></p>
									</div>
					</div> <?php } ?>
								<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Institude</label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" id="institude" style="display:none;"  value="<?php echo $edu_ins; ?>" ><p id="demoins"><?php echo $edu_ins; ?></p>
										<!-- <div id="institude_name"  style="max-height: 100px; overflow-y: scroll; overflow-x: hidden; display:none;"></div> -->
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="input-group">
										<label for> Year of Passing</label>
									</div>
								</div>
								<div class="col-md-9 col-sm-6">
									<div class="input-group">
										<select class="form-control" id="pass" style="display:none;"   >
										<option value="<?php echo $edu_pass; ?>"><?php echo $edu_pass; ?></option>
									</select><p id="demopass"><?php echo $edu_pass; ?></p>
									</div>
								</div>
							

								<?php }  }  ?> <!-- end of education qualificaton slect query-->
								
									


								<input type="button"  style="display:none" class="saveedu btn btn-success" value="Save">
								<input type="button"  style="display:none" class="canceledu  btn btn-danger" value="Cancel">
								</form>
								</div>

                               

							   <!--This is For Cnadidate Exprience-->
					
								<h3> Exprience </h3>
								<a href="javascript:void(0);" style="float:right;color:royalblue" class="addexp" id="addexp"><i class="ti-plus">&nbspAdd Exprience</i></a><br><br>
						
						  
						  <div class="row bottom-mrg expadd" >
							<?php
                    $sql="SELECT * FROM `profile_exp` where exp_rpid=$pid";
					$result=mysqli_query($conn,$sql);
					if (mysqli_num_rows($result)=="") {
						?>

                            <form style="border: 1px solid grey;">
							<div class="add-feild">
							<div class="col-md-12 col-sm-6">
						    	<div class="input-group">
							<a href="javascript:void(0);" style="float:right;" class="editexp" id="editexp"><i class="ti-pencil"></i>Edit</a>
							</div>
						    </div>

							<div class="col-md-3 col-sm-6">
							<div class="input-group">
						        	<label for> CompanyName</label>
							</div>
						    </div>
						    <div class="col-md-9 col-sm-6">
						    	<div class="input-group">
						    		<input type="text"  style="display:none" class="form-control company" id="company"  value="Not Mentioned" ><p id="democompany" class="democompany">Not Mentioned</p>
						    	</div>
						    </div>
							

							<div class="col-md-3 col-sm-6">
							<div class="input-group">
						        	<label for> Exprience Years/Months</label>
							</div>
						    </div>
						    <div class="col-md-3 col-sm-6">
						    	<div class="input-group">
								<select name="years"  style="display:none" value="Not Mentioned" id="years" class="form-control years" required>
								<option value="Not Mentioned">Not Mentioned</option>
								<?php
                                for ($i=0; $i<=24; $i++)
                                {
                                    ?>
                                        <option value="<?php echo $i;?> yrs" ><?php echo $i;?>&nbspyrs</option>
                                    <?php
                                }
                            ?>
                                <option value="25+ years">25+ yrs</option>
								</select><p id="demoyears" class="demoyears">Not Mentioned</p>
						    	</div>
						    </div>
							<div class="col-md-6 col-sm-6">
						    	<div class="input-group">
									<select id="months"  style="display:none" value="Not Mentioned" class="form-control months" required>
									<option value="Not Mentioned">Not Mentioned</option>
                                <?php
                                for ($i=0; $i<=12; $i++)
                                {
                                    ?>
                                        <option value="<?php echo $i;?> months" ><?php echo $i;?>&nbspmonths</option>
                                    <?php
                                }
                            ?>
                                </select>
								<p id="demomonths" class="demomonths">Not Mentioned</p>
						    	</div>
						    </div>
							<div class="col-md-3 col-sm-6">
							<div class="input-group">
						        	<label for> Exprience Department</label>
							</div>
						    </div>
						    <div class="col-md-9 col-sm-6">
						    	<div class="input-group">
						    		<input type="text"  style="display:none" class="form-control department" id="department"  value="Not Mentioned" ><p id="demodepart" class="demodepart" >Not Mentioned</p>
									<div id="depart_name"   style="max-height: 100px; overflow-y: scroll; overflow-x: hidden; display:none;" ></div>
								</div>
						    </div>
							<div class="col-md-3 col-sm-6">
							<div class="input-group">
						        	<label for> Exprience Organization</label>
							</div>
						    </div>
						    <div class="col-md-9 col-sm-6">
						    	<div class="input-group">
						    		<input type="text"  style="display:none" class="form-control org" id="org"  value="Not Mentioned" ><p id="demoorg " class="demoorg">Not Mentioned</p>
						    	    <div id="org_name"   style="max-height: 100px; overflow-y: scroll; overflow-x: hidden;display:none;"></div>
								</div>
						    </div>
							<div class="col-md-3 col-sm-6">
							<div class="input-group">
						        	<label for> Exprience Salary</label>
							</div>
						    </div>
						    <div class="col-md-3 col-sm-6">
						    	<div class="input-group">
									<select  style="display:none"  class="form-control lakhs" id="lakhs"  value="Not Mentioned" required>
									<option value="Not Mentioned">Not Mentioned</option>
                            <?php
                                for ($i=0; $i<=100; $i++)
                                {
                                    ?>
                                        <option value="<?php echo $i;?> lakhs" ><?php echo $i;?>&nbsplakhs</option>
                                    <?php
                                }
                            ?>
                            </select>
									<p id="demolakhs" class="demolakhs">Not Mentioned</p>
						    	</div>
						    </div>
							<div class="col-md-6 col-sm-6">
						    	<div class="input-group">
									<select   style="display:none" class="form-control thousands" id="thousands" value="Not Mentioned"  required> 
									<option value="Not Mentioned">Not Mentioned</option>
                                <?php
                                    for ($i=0; $i<=100; $i++)
                                    {
                                        ?>
                                            <option value="<?php echo $i;?> thousands" ><?php echo $i;?>&nbspthousands</option>
                                        <?php
                                    }
                                ?>
                                </select>
									<p id="demothousands" class="demothousands">Not Mentioned</p>
						    	</div>
						    </div>
								

							<input type="button"  style="display:none" class="saveexp btn btn-success" value="Save">
								<input type="button"  style="display:none" class="cancelexp  btn btn-danger" value="Cancel">
							</form>
								


						<?php } else {
                    for($i=0; $row=mysqli_fetch_assoc($result); $i++){

						?>
						 
						
						<form style="border: 1px solid grey;">
							<div class="add-feild">
							<div class="col-md-12 col-sm-6">
						    	<div class="input-group">
							<a href="javascript:void(0);" style="float:right;" class="editexp" id="editexp"><i class="ti-pencil"></i>Edit</a>
							</div>
						    </div>

							<div class="col-md-3 col-sm-6">
							<div class="input-group">
						        	<label for> CompanyName</label>
							</div>
						    </div>
						    <div class="col-md-9 col-sm-6">
						    	<div class="input-group">
						    		<input type="text"  style="display:none" class="form-control company" id="company"  value="<?php if(!$row['exp_compname']==""){ echo $row['exp_compname']; } else { echo "Not Mentioned"; } ?>" ><p id="democompany" class="democompany"><?php if(!$row['exp_compname']==""){ echo $row['exp_compname']; } else { echo "Not Mentioned"; }  ?></p>
						    	</div>
						    </div>
							

							<div class="col-md-3 col-sm-6">
							<div class="input-group">
						        	<label for> Exprience Years/Months</label>
							</div>
						    </div>
						    <div class="col-md-3 col-sm-6">
						    	<div class="input-group">
								<select name="years"  style="display:none" value="<?php if (!$row['exp_yrs']=="") { echo $row['exp_yrs']; } else { echo "Not Mentioned"; } ?>" id="years" class="form-control years" required>
								<option value="<?php if (!$row['exp_yrs']=="") { echo $row['exp_yrs']; } else { echo "Not Mentioned"; } ?>"><?php if (!$row['exp_yrs']=="") { echo $row['exp_yrs']; } else { echo "Not Mentioned"; } ?></option>
								<?php
                                for ($i=0; $i<=24; $i++)
                                {
                                    ?>
                                        <option value="<?php echo $i;?> yrs" ><?php echo $i;?>&nbspyrs</option>
                                    <?php
                                }
                            ?>
                                <option value="25+ years">25+ yrs</option>
								</select><p id="demoyears" class="demoyears"><?php if (!$row['exp_yrs']=="") { echo $row['exp_yrs']; } else { echo "Not Mentioned"; } ?></p>
						    	</div>
						    </div>
							<div class="col-md-6 col-sm-6">
						    	<div class="input-group">
									<select id="months"  style="display:none" value="<?php if(!$row['exp_months']=="") { echo $row['exp_months']; } else { echo "Not Mentioned"; } ?>" class="form-control months" required>
									<option value="<?php if(!$row['exp_months']=="") { echo $row['exp_months']; } else { echo "Not Mentioned"; } ?>"><?php if(!$row['exp_months']=="") { echo $row['exp_months']; } else { echo "Not Mentioned"; } ?></option>
                                <?php
                                for ($i=0; $i<=12; $i++)
                                {
                                    ?>
                                        <option value="<?php echo $i;?> months" ><?php echo $i;?>&nbspmonths</option>
                                    <?php
                                }
                            ?>
                                </select>
								<p id="demomonths" class="demomonths"><?php if(!$row['exp_months']=="") { echo $row['exp_months']; } else { echo "Not Mentioned"; } ?></p>
						    	</div>
						    </div>
							<div class="col-md-3 col-sm-6">
							<div class="input-group">
						        	<label for> Exprience Department</label>
							</div>
						    </div>
						    <div class="col-md-9 col-sm-6">
						    	<div class="input-group">
						    		<input type="text"  style="display:none" class="form-control department" id="department"  value="<?php if(!$row['exp_depart']=="") { echo $row['exp_depart']; } else { echo "Not Mentioned"; } ?>" ><p id="demodepart" class="demodepart" ><?php if(!$row['exp_depart']=="") { echo $row['exp_depart']; } else { echo "Not Mentioned"; } ?></p>
									<div id="depart_name" style="max-height: 100px; overflow-y: scroll; overflow-x: hidden; display:none;"></div>
								</div>
						    </div>
							<div class="col-md-3 col-sm-6">
							<div class="input-group">
						        	<label for> Exprience Organization</label>
							</div>
						    </div>
						    <div class="col-md-9 col-sm-6">
						    	<div class="input-group">
						    		<input type="text"  style="display:none" class="form-control org" id="org"  value="<?php if(!$row['exp_orgtype']=="") { echo $row['exp_orgtype']; } else { echo "Not Mentioned";} ?>" ><p id="demoorg " class="demoorg"><?php if(!$row['exp_orgtype']=="") { echo $row['exp_orgtype']; } else { echo "Not Mentioned";} ?></p>
						    	    <div id="org_name" style="max-height: 100px; overflow-y: scroll; overflow-x: hidden; display:none;" ></div>
								</div>
						    </div>
							<div class="col-md-3 col-sm-6">
							<div class="input-group">
						        	<label for> Exprience Salary</label>
							</div>
						    </div>
						    <div class="col-md-3 col-sm-6">
						    	<div class="input-group">
									<select  style="display:none"  class="form-control lakhs" id="lakhs"  value="<?php if(!$row['exp_sal_lakhs']=="") { echo $row['exp_sal_lakhs']; } else { echo "Not Mentioned"; } ?>" required>
									<option value="<?php if(!$row['exp_sal_lakhs']=="") { echo $row['exp_sal_lakhs']; } else { echo "Not Mentioned"; } ?>"><?php if(!$row['exp_sal_lakhs']=="") { echo $row['exp_sal_lakhs']; } else { echo "Not Mentioned"; } ?></option>
                            <?php
                                for ($i=0; $i<=100; $i++)
                                {
                                    ?>
                                        <option value="<?php echo $i;?> lakhs" ><?php echo $i;?>&nbsplakhs</option>
                                    <?php
                                }
                            ?>
                            </select>
									<p id="demolakhs" class="demolakhs"><?php if(!$row['exp_sal_lakhs']=="") { echo $row['exp_sal_lakhs']; } else { echo "Not Mentioned"; } ?></p>
						    	</div>
						    </div>
							<div class="col-md-6 col-sm-6">
						    	<div class="input-group">
									<select   style="display:none" class="form-control thousands" id="thousands" value="<?php if(!$row['exp_sal_thousands']=="") { echo $row['exp_sal_thousands']; } else {echo "Not Mentioned"; } ?>"  required> 
									<option value="<?php if(!$row['exp_sal_thousands']=="") { echo $row['exp_sal_thousands']; } else {echo "Not Mentioned"; } ?>"><?php if(!$row['exp_sal_thousands']=="") { echo $row['exp_sal_thousands']; } else {echo "Not Mentioned"; } ?></option>
                                <?php
                                    for ($i=0; $i<=100; $i++)
                                    {
                                        ?>
                                            <option value="<?php echo $i;?> thousands" ><?php echo $i;?>&nbspthousands</option>
                                        <?php
                                    }
                                ?>
                                </select>
									<p id="demothousands" class="demothousands"><?php if(!$row['exp_sal_thousands']=="") { echo $row['exp_sal_thousands']; } else {echo "Not Mentioned"; } ?></p>
						    	</div>
						    </div>
								

							<input type="button"  style="display:none" class="saveexp btn btn-success" value="Save">
								<input type="button"  style="display:none" class="cancelexp  btn btn-danger" value="Cancel">
							</form>
								</div>
							
								<?php } }  ?>
								</div>

								 <!--This is For Cnadidate Skills-->
					
								 <h3> Skills </h3>
						 
						 
					   <div class="row bottom-mrg add">
					   <a href="javascript:void(0);" style="float:right;color:royalblue" class="addskills" id="addskills"><i class="ti-plus">&nbspAdd Skills</i></a><br><br>
						   <?php
				   $sql="SELECT * FROM `profile_skills` where skills_rpid=$pid";
				   $result=mysqli_query($conn,$sql);
				   if (mysqli_num_rows($result)=="") {
					   

					   ?>

                           <div class="add-feild">
						   <div class="col-md-3 col-sm-6">
						   <div class="input-group">
								   <label for> Skills Name</label>
								   <span style="display:none;" class="skills_id"><?php echo $row['skills_id']; ?></span>
						   </div>
						   </div>
						   <div class="col-md-3 col-sm-6 skills_col">
							   <div class="input-group skills_group">
								   <input type="text" name="skills" style="display:none "  class="form-control skills" id="skills"  value="Not Mentioned" >
								   <div id="skill_name" style="max-height: 100px; overflow-y: scroll; overflow-x: hidden; display:none;"></div> <p class="demoskills">Not Mentioned</p>
							   </div>
						   </div>
						   <div class="col-md-4 col-sm-6 skills_exp_col">
							   <div class="input-group skills_exp_group">
							   <select style="display:none;"  class="form-control skills_exp" name="skills_exp" id="skills_exp" value="Not Mentioned" required>
							   <option value="Not Mentioned">Not Mentioned</option>
                                        <?php
                                    for ($i=0; $i<=25; $i++)
                                    {
                                        ?>
                                            <option value="<?php echo $i;?> yrs" ><?php echo $i;?>&nbsp yrs</option>
                                        <?php
                                    }
                                ?>
                                </select>
								   <p class="demoskills_exp">Not Mentioned</p>
								   
							   </div>
						   </div>

						   <div class="col-md-2 col-sm-6 diveditm">
							   <div class="input-group divedit">
						   <a href="javascript:void(0);"  style="float:right;" class="editskills" id="editskills">&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp <i class="ti-pencil"></i></a>
						    <a href="javascript:void(0);" style="float:right;" class="deleteskills" id="deleteskills"><i class="ti-trash"></i></a>
							
					   </div>
						   </div>
						   
						   <input type="button"  style="display:none" class="saveskills btn btn-success" value="Save">
							   <input type="button"  style="display:none" class="cancelskills  btn btn-danger" value="Cancel">
							   

						   </div>

				  <?php } else { 
				   for($i=0; $row=mysqli_fetch_assoc($result); $i++){

				$skills_id=$row['skills_id'];

					   ?>
												   <div class="add-feild">
						   <div class="col-md-3 col-sm-6">
						   <div class="input-group">
								   <label for> Skills Name</label>
								   <span style="display:none;" class="skills_id"><?php echo $row['skills_id']; ?></span>
						   </div>
						   </div>
						   <div class="col-md-3 col-sm-6 skills_col">
							   <div class="input-group skills_group">
								   <input type="text" name="skills" style="display:none "  class="form-control skills" id="skills"  value="<?php if(!$row['skills']=="") { echo $row['skills']; } else { echo "Not Mentioned"; } ?>" >
								   <div id="skill_name" style="max-height: 100px; overflow-y: scroll; overflow-x: hidden; display:none;" ></div> <p class="demoskills"><?php if(!$row['skills']=="") { echo $row['skills']; } else { echo "Not Mentioned"; } ?></p>
							   </div>
						   </div>
						   <div class="col-md-4 col-sm-6 skills_exp_col">
							   <div class="input-group skills_exp_group">
							   <select style="display:none;"  class="form-control skills_exp" name="skills_exp" id="skills_exp" value="<?php if(!$row['skills_exp']=="") { echo $row['skills_exp']; } else { echo "Not Mentioned"; } ?>" required>
							   <option value="<?php if(!$row['skills_exp']=="") { echo $row['skills_exp']; } else { echo "Not Mentioned"; } ?>"><?php if(!$row['skills_exp']=="") { echo $row['skills_exp']; } else { echo "Not Mentioned"; } ?></option>
                                        <?php
                                    for ($i=0; $i<=25; $i++)
                                    {
                                        ?>
                                            <option value="<?php echo $i;?> yrs" ><?php echo $i;?>&nbsp yrs</option>
                                        <?php
                                    }
                                ?>
                                </select>
								   <p class="demoskills_exp"><?php if(!$row['skills_exp']=="") { echo $row['skills_exp']; } else { echo "Not Mentioned"; } ?></p>
								   
							   </div>
						   </div>

						   <div class="col-md-2 col-sm-6 diveditm">
							   <div class="input-group divedit">
						   <a href="javascript:void(0);"  style="float:right;" class="editskills" id="editskills">&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp <i class="ti-pencil"></i></a>
						    <a href="javascript:void(0);" style="float:right;" class="deleteskills" id="deleteskills"><i class="ti-trash"></i></a>
							
					   </div>
						   </div>
						   
						   <input type="button"  style="display:none" class="saveskills btn btn-success" value="Save">
							   <input type="button"  style="display:none" class="cancelskills  btn btn-danger" value="Cancel">
							   

						   </div><?php } } ?>
							   </div>
					
					</div>
				</div>
			</div>
			<!-- General Detail End -->

			<script type="text/javascript" 
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<script type="text/javascript">
					$(document).ready(function() {

						//This is For Resume

						// var resume = document.getElementById("resume").value;
						// document.getElementById("demoresume").innerHTML = resume;
						$("p.demoresume").css("color", "royalblue");

						//Upload Resume
						$(".editresume").click(function(){
							$("#resume").show();
							$("#cancelresume").show();
							$("#submitresume").show();
							this.style.display = 'none'

						});

						$(".cancelresume").click(function(){
							$("#resume").hide();
							$("#submitresume").hide();
							$("#editresume").show();
							this.style.display = 'none'

						});

						$('input.submitresume').prop("disabled", true);
						var myfile="";
							$('.resume').on( 'change', function() {
							myfile= $( this ).val();
							var ext = myfile.split('.').pop();
							if(ext=="pdf" || ext=="docx" || ext=="doc" || ext=="odt" || ext=="Docx" || ext=="Doc"|| ext=="Pdf" || ext=="Odt"){
								$('input.submitresume').attr('disabled',false);
									$('#error1').hide();
							} else{
								$('#error1').slideDown("fast");
							}
							});

						$(".submitresume").click(function(){
							var pid="<?php echo $pid; ?>";
							var resume = $('#resume').prop("files")[0];
							var form_data = new FormData();  
							form_data.append('file', resume);
							//alert(form_data); 
							$.ajax({
							url:'include/resume_update.php',
							dataType: 'text',  // what to expect back from the PHP script, if anything
							cache: false,
							contentType: false,
							processData: false,
							data: form_data,                         
							type: 'post',
							success:function(){
						   $("#tickresume").html();
						
							}
						});
						$(this).siblings("input.cancelresume").hide();
						$(this).parent().parent().siblings().children().children("p.demoresume").show();
						$(this).parent().parent().siblings().children().children("input").hide();
						$(this).parent().parent().parent().parent().parent("a").show();
						$(this).siblings("p.error1").hide();
						this.style.display = 'none'
						var resume = document.getElementById("resume").value;
					    document.getElementById("demoresume").innerHTML = resume;

					

						});



					//This is For Personal Information
						
						 
						//Edit Profile

						$(".edit").click(function(){
							$("#demofirst").hide();
							$("#demolast").hide();
							$("#demoemail").hide();
							$("#demogender").hide();
							$("#demomobile").hide();
							$("#demoaddress").hide();
							$("#fname").show();
							$("#lname").show();
							$("#email").show();
							$("#gender").show();
							$("#mobile").show();
							$("#address").show();
							$(".save").show();
							$(".cancel").show();
							this.style.display = 'none'
							});

							//Cancel Profile

							$(".cancel").click(function(){
							$("#demofirst").show();
							$("#demolast").show();
							$("#demoemail").show();
							$("#demogender").show();
							$("#demomobile").show();
							$("#demoaddress").show();
							$("#fname").hide();
							$("#lname").hide();
							$("#email").hide();
							$("#gender").hide();
							$("#mobile").hide();
							$("#address").hide();
							$(".save").hide();
							$(".edit").show();
							this.style.display = 'none'
							});

							//Save Profile

							$(".save").click(function(){
							var pid="<?php echo $pid; ?>";
							var fname = $('#fname').val();
							var lname = $('#lname').val();
							var gender = $('#gender').val();
							var email = $('#email').val();
							var mobile = $('#mobile').val();
							var address = $('#address').val();
							$.ajax({
                        url:'include/profile_update.php',
                        method:'POST',
                        data:{
                            pid:pid,fname:fname,lname:lname,email:email,gender:gender,mobile:mobile,address:address
                        },
                        success:function(response){
                           $("#tick").html(response);
						   $("#demofirst").show();
							$("#demolast").show();
							$("#demoemail").show();
							$("#demogender").show();
							$("#demomobile").show();
							$("#demoaddress").show();
							$("#fname").hide();
							$("#lname").hide();
							$("#email").hide();
							$("#gender").hide();
							$("#mobile").hide();
							$("#address").hide();
							$(".cancel").hide();
							$(".edit").show();
							$(".save").hide();
							
							
                        }
					});
					
					var fname = $("#fname").val();
					$("#demofirst").text(fname);
					var lname = $("#lname").val();
					$("#demolast").text(lname);
					var email = $("#email").val();
					$("#demoemail").text(email);
					var gender = $("#gender").val();
					$("#demogender").text(gender);
					var mobile = $("#mobile").val();
					$("#demomobile").text(mobile);
					var address = $("#address").val();
					$("#demoaddress").text(address);
               });


                    //This Is For Education

			 $(".editedu").click(function(){
			 		$("#demodegree").hide();
			 		$("#demodept").hide();
					$("#demoins").hide();
			 		$("#demopass").hide();
					$("#democourse").hide();
			 		$("#degree").show();
			 		$("#dept").show();
					$("#institude").show();
			 		$("#pass").show();
					$("#course").show();
			 		$(".saveedu").show();
			 		$(".canceledu").show();
			 		this.style.display = 'none'
					 });
					 
					 //Cancel Education

			 $(".canceledu").click(function(){
			 		$("#demodegree").show();
			 		$("#demodept").show();
					$("#demoins").show();
			 		$("#demopass").show();
					//$("#democourse").hide();
			 		$("#degree").hide();
			 		$("#dept").hide();
					$("#institude").hide();
			 		$("#pass").hide();
					//$("#course").show();
			 		$(".saveedu").hide();
			 		$(".editedu").show();
			 		this.style.display = 'none'
					 });
					 
					 //Save Education

			 $(".saveedu").click(function(){
					var pid="<?php echo $pid; ?>";
					var degree = $('#degree').val();
					var dept = $('#dept').val();
					var institude = $('#institude').val();
					var pass = $('#pass').val();
					$.ajax({
                        url:'include/education_update.php',
                        method:'POST',
                        data:{
                            pid:pid,degree:degree,dept:dept,institude:institude,pass:pass
                        },
						success:function(response){
                           $("#tickedu").html(response);
						   $("#demodegree").show();
							$("#demodept").show();
							$("#demoins").show();
							$("#demopass").show();
							$("#degree").hide();
							$("#dept").hide();
							$("#institude").hide();
							$("#pass").hide();
							$(".canceledu").hide();
							$(".editedu").show();
							$(".saveedu").hide();
							
							
                        }
					});
					
					var degree = $("#degree option:selected").text();
					$("#demodegree").text(degree);
					var dept = $("#dept option:selected").text();
					$("#demodept").text(dept);
					var institude = $("#institude").val();
					$("#demoins").text(institude);
					var pass = $("#pass").val();
					$("#demopass").text(pass);
					var course = $("#course").val();
					$("#democourse").text(course);

				// var degree = document.getElementById("degree").text();
			    // document.getElementById("demodegree").innerHTML = degree;
			 	// var dept = document.getElementById("dept").text();
			    // document.getElementById("demodept").innerHTML = dept;
				// var institude = document.getElementById("institude").value;
			    // document.getElementById("demoins").innerHTML = institude;
			 	// var pass = document.getElementById("c").value;
			    // document.getElementById("demopass").innerHTML = pass;
				// var course = document.getElementById("course").value;
			    // document.getElementById("democourse").innerHTML = course;
			});


			//This is For Exprience
			

			//Edit Exprience

			$(".editexp").click(function(){
				$(this).parent().parent().siblings().children().children("p").hide();
				$(this).parent().parent().siblings().children().children("input").show();
				$(this).parent().parent().siblings().children().children("select").show();
				$(this).parent().parent().children().children("a.deleteskills").hide();
					 $(this).parent().parent().siblings("input").show();
		  				this.style.display = 'none'
						  });
							
							//Cancel Exprience

					$(".cancelexp").click(function(){
						$(this).siblings().children().children("p").show();
						$(this).siblings().children().children("input").hide();
						$(this).siblings().children().children("select").hide();
						$(this).siblings().children().children("a").show();
						$(this).siblings("input").hide();
						this.style.display = 'none'
							});

							//Save Exprience

				$(".saveexp").click(function(){
							var pid="<?php echo $pid; ?>";
							var company = $(this).siblings().children().children("input.company").val();
							var years = $(this).siblings().children().children("select.years").val();
							var months = $(this).siblings().children().children("select.months").val();
							var department = $(this).siblings().children().children("input.department").val();
							var org = $(this).siblings().children().children("input.org").val();
							var lakhs = $(this).siblings().children().children("select.lakhs").val();
							var thousands = $(this).siblings().children().children("select.thousands").val();
							$.ajax({
                        url:'include/exprience_update.php',
                        method:'POST',
                        data:{
                            pid:pid,company:company,years:years,months:months,department:department,org:org,lakhs:lakhs,thousands:thousands
                        },
                        success:function(response){
                           $("#tickexp").html(response);
						   $(".saveexp").siblings().children().children("p").show();
							$(".saveexp").siblings().children().children("input").hide();
							$(".saveexp").siblings().children().children("select").hide();
							$(".saveexp").siblings().children().children("a").show();
							$(".saveexp").siblings("input.cancelexp").hide();
							$(".saveexp").hide();
                        }
					});

			var company=$(this).siblings().children().children("input.company").val();
			$(this).siblings().children().children("p.democompany").text(company);
			 var years=$(this).siblings().children().children("select.years").val();
			 $(this).siblings().children().children("p.demoyears").text(years);
			 var months=$(this).siblings().children().children("select.months").val();
			 $(this).siblings().children().children("p.demomonths").text(months);
			 var department=$(this).siblings().children().children("input.department").val();
			 $(this).siblings().children().children("p.demodepart").text(department);
			 var org=$(this).siblings().children().children("input.org").val();
			 $(this).siblings().children().children("p.demoorg").text(org);
			 var lakhs=$(this).siblings().children().children("select.lakhs").val();
			 $(this).siblings().children().children("p.demolakhs").text(lakhs);
			 var thousands=$(this).siblings().children().children("select.thousands").val();
			 $(this).siblings().children().children("p.demothousands").text(thousands);

			
			
		});

		//add new exp
  		$(".addexp").click(function(){

          var addexp= '<form style="border:1px solid grey;"><div class="add-feild"><h4 style="text-align:center;color:royalblue;">Add New Exprience</h4><div class="col-md-12 col-sm-6"><div class="input-group"><a href="javascript:void(0);" style="float:right;display:none" class="editexp" id="editexp"><i class="ti-pencil"></i>Edit</a></div></div><div class="col-md-3 col-sm-6"><div class="input-group"><label for> CompanyName</label></div></div><div class="col-md-9 col-sm-6"><div class="input-group"><input type="text"   class="form-control company" id="company"  value="" ><p style="display:none;" class="adddemocomp"></p></div> </div> <div class="col-md-3 col-sm-6"><div class="input-group"><label for> Exprience Years/Months</label></div></div> <div class="col-md-3 col-sm-6"><div class="input-group"><select name="years" value="" id="years" class="form-control years" required><?php for ($i=0; $i<=24; $i++){ ?> <option value="<?php echo $i;?> yrs" ><?php echo $i;?>&nbspyrs</option> <?php }?> <option value="25+ years">25+ yrs</option></select><p style="display:none;" class="adddemoyrs"></p></div> </div> <div class="col-md-6 col-sm-6"><div class="input-group"><select id="months" value="" class="form-control months" required> <?php for ($i=0; $i<=12; $i++) { ?> <option value="<?php echo $i;?> months" ><?php echo $i;?>&nbspmonths</option> <?php }?></select><p style="display:none;" class="adddemomonths"></p></div> </div>	<div class="col-md-3 col-sm-6"><div class="input-group"><label for> Exprience Department</label></div> </div> <div class="col-md-9 col-sm-6"><div class="input-group"><input type="text"  class="form-control department" id="department"  value="" ><p style="display:none;" class="adddemodepart"></p><div id="depart_name" ></div></div></div><div class="col-md-3 col-sm-6"><div class="input-group"><label for> Exprience Organization</label></div></div><div class="col-md-9 col-sm-6"><div class="input-group"><input type="text"  class="form-control org" id="org"  value="" ><p style="display:none;" class="adddemoorg"></p> <div id="org_name" ></div></div> </div><div class="col-md-3 col-sm-6"><div class="input-group"><label for> Exprience Salary</label></div> </div><div class="col-md-3 col-sm-6"><div class="input-group"><select  class="form-control lakhs" id="lakhs"  value="" required><?php for ($i=0; $i<=100; $i++) { ?> <option value="<?php echo $i;?> lakhs" ><?php echo $i;?>&nbsplakhs</option> <?php }?></select><p style="display:none;" class="adddemolakhs"></p></div> </div><div class="col-md-6 col-sm-6"><div class="input-group"><select   class="form-control thousands" id="thousands" value="<?php echo $row['exp_sal_thousands']; ?>"  required>  <?php for ($i=0; $i<=100; $i++){ ?><option value="<?php echo $i;?> thousands" ><?php echo $i;?>&nbspthousands</option> <?php } ?> </select><p style="display:none;" class="adddemothousands"></p></div> </div><input type="button"   class="submitexp btn btn-success" value="Submit Query">&nbsp&nbsp<input type="button"  class="cancelexp  btn btn-danger" value="Cancel"></div></form>'

 
      $("div.expadd").append(addexp);
	  
	  //cancel new exp
	  $(".cancelexp").click(function(){ 
			 	   $(this).parent().parent().hide();


				});

				 // insert new exp
				$(".submitexp").click(function(){ 
				var pid="<?php echo $pid; ?>";
				var company=$(this).siblings().children().children("input.company").val();
			 	var years=$(this).siblings().children().children("select.years").val();
				var months=$(this).siblings().children().children("select.months").val();
			 	var department=$(this).siblings().children().children("input.department").val();
				var org=$(this).siblings().children().children("input.org").val();
			 	var lakhs=$(this).siblings().children().children("select.lakhs").val();
				var thousands=$(this).siblings().children().children("select.thousands").val();
			 	    $.ajax({
			 	 	   url:'include/add_exprience.php',
			 	 	   method:'POST',
			 	 	   data:{pid:pid,company:company,years:years,months:months,department:department,org:org,lakhs:lakhs,thousands:thousands },
					   success:function(response){
							$("#tickaddexp").html(response);
							$(".submitexp").siblings("input.cancelexp").hide();
							$(".submitexp").siblings().children().children("input").hide();
							$(".submitexp").siblings().children().children("select").hide();
							$(".submitexp").siblings().children().children("a").show();
							$(".submitexp").siblings().children().children("p").show();
							$(".submitexp").siblings("h4").hide();

					        $(".submitexp").hide();
							$(this).parent().css("background-color","blue");

						
						  
			 	 	   }


			 	    });
					 
					var company= $(this).siblings().children().children("input.company").val();
					$(this).siblings().children().children("p.adddemocomp").text(company);
					var years= $(this).siblings().children().children("select.years").val();
					$(this).siblings().children().children("p.adddemoyrs").text(years);
					var months= $(this).siblings().children().children("select.months").val();
					$(this).siblings().children().children("p.adddemomonths").text(months);
					var department= $(this).siblings().children().children("input.department").val();
					$(this).siblings().children().children("p.adddemodepart").text(department);
					var org= $(this).siblings().children().children("input.org").val();
					$(this).siblings().children().children("p.adddemoorg").text(org);
					var lakhs= $(this).siblings().children().children("select.lakhs").val();
					$(this).siblings().children().children("p.adddemolakhs").text(lakhs);
					var thousands= $(this).siblings().children().children("select.thousands").val();
					$(this).siblings().children().children("p.adddemothousands").text(thousands);
					
			   });
				


 		});


       //This is For Skills

		  $(".editskills").click(function(){
			         $(this).parent().parent().siblings().children().children("p").hide();
					 $(this).parent().parent().siblings().children().children("input").show();
					 $(this).parent().parent().siblings().children().children("select").show();
					 $(this).parent().parent().children().children("a.deleteskills").hide();
					 $(this).parent().parent().siblings("input").show();
		  				this.style.display = 'none'
						  });
						  
           //cancel Skills

		  $(".cancelskills").click(function(){
			         $(this).siblings().children().children("p").show();
					 $(this).siblings().children().children("input").hide();
					 $(this).siblings().children().children("select").hide();
					 $(this).siblings().children().children("a").show();
					 $(this).siblings("input").hide();
					 this.style.display = 'none'
						  });
						  

				//Save Skills
				
		  $(".saveskills").click(function(){
			var pid="<?php echo $pid; ?>";
		    var skills_id = $(this).siblings().children().children("span.skills_id").text();
			var skills=$(this).siblings().children().children("input.skills").val();
			var skills_exp=$(this).siblings().children().children("select.skills_exp").val();
			$.ajax({
			url:'include/skills_update.php',
                        method:'POST',
                        data:{
                            pid:pid,skills_id:skills_id,skills:skills,skills_exp:skills_exp
                        },
						success:function(response){
							$("#tickskills").html(response);
							$(".saveskills").siblings().children().children("p").show();
							$(".saveskills").siblings().children().children("input").hide();
							$(".saveskills").siblings().children().children("select").hide();
							$(".saveskills").siblings().children().children("a").show();
							$(".saveskills").siblings("input.cancelskills").hide();
							$(".saveskills").hide();
							
						}

					});
					var skills=$(this).siblings().children().children("input.skills").val();
							$(this).siblings().children().children("p.demoskills").text(skills);
							var skills=$(this).siblings().children().children("select.skills_exp").val();
							$(this).siblings().children().children("p.demoskills_exp").text(skills);
					
		  });

		  //Delete Skills

		  $(".deleteskills").click(function(){
			var pid="<?php echo $pid; ?>";
		    var skills_id = $(this).parent().parent().siblings().children().children("span.skills_id").text();
			var skills=$(this).parent().parent().siblings().children().children("p.demoskills").text();
			var skills_exp=$(this).parent().parent().siblings().children().children("p.demoskills_exp").text();
			$.ajax({
			url:'include/skills_delete.php',
                        method:'POST',
                        data:{
                            pid:pid,skills_id:skills_id,skills:skills,skills_exp:skills_exp
                        },
						success:function(response){
							$("#tickdelete").html(response);
						
							
						}
			});
			               $(this).parent().parent().siblings().children().children("label").hide();
							$(this).parent().parent().siblings().children().children("input").hide();
							$(this).parent().parent().siblings().children().children("select").hide();
							$(this).parent().parent().siblings().children().children("p").hide();
							$(this).siblings("a.editskills").hide();
							this.style.display = 'none'
		  });
			 
		  //This is For Div Append

		  $(".addskills").click(function(){

			   var add= '<div class="add-feild"><div class="col-md-3 col-sm-6"><div class="input-group"><label> Skills Name</label></div></div><div class="col-md-3 col-sm-6 "><div class="input-group "><input type="text" name="skills"  class="form-control skills_add" id="skills_add"  value="" require=""> <p style="display:none;" class="adddemoskills"></p> <div id="skill_name"></div><div id="skills_add_error"></div></div></div>  <div class="col-md-4 col-sm-6 "> <div class="input-group "><select   class="form-control skills_add_exp" name="skills_add_exp" id="skills_add_exp" value="" required><?php for ($i=0; $i<=25; $i++) { ?> <option value="<?php echo $i;?> yrs" ><?php echo $i;?>&nbsp yrs</option> <?php } ?></select><p style="display:none;" class="adddemoexp"></p></div></div> <div class="col-md-2 col-sm-6 "><div class="input-group  "><a href="javascript:void(0);"  style="float:right;display:none;" class="editskills" id="editskills">&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp <i class="ti-pencil"></i></a> <a href="javascript:void(0);" style="float:right; display:none;" class="deleteskills" id="deleteskills"><i class="ti-trash"></i></a> </div> </div> <input type="button" class="submit_query btn btn-success" value="Submit"> <input type="button"  class="cancelquery  btn btn-danger" value="Cancel"> </div>'

			    
			   $("div.add").append(add);

			   //Submit Query
			   
			   $(".submit_query").click(function(){ 
					var pid="<?php echo $pid; ?>";
					var skills_add=$(this).siblings().children().children("input.skills_add").val();
			 	   var skills_add__exp=$(this).siblings().children().children("select.skills_add_exp").val();
			 	    $.ajax({
			 	 	   url:'include/add_skills.php',
			 	 	   method:'POST',
			 	 	   data:{pid:pid,skills_add:skills_add,skills_add__exp:skills_add__exp },
			 	 	   success:function(response){
						  $("#tickadd").html(response);
						  $(".submit_query").siblings().children().children("input").hide();
						  $(".submit_query").siblings().children().children("select").hide();
						  $(".submit_query").siblings().children().children("p").show();
						  $(".submit_query").siblings().children().children("a").show();
						  $(".submit_query").hide();
						  $(".submit_query").siblings("input.cancelquery").hide();

						  
			 	 	   }


			 	    });
					 var skills= $(this).siblings().children().children("input.skills_add").val();
					$(this).siblings().children().children("p.adddemoskills").text(skills);
					var exp= $(this).siblings().children().children("select.skills_add_exp").val();
					$(this).siblings().children().children("p.adddemoexp").text(exp);
					 
			   });

			   //Cancel Query

			    $(".cancelquery").click(function(){ 
			 	   $(this).parent().hide();


				});
				
					//This Validation For Skills

				$("#skills_add").focusout(skills_add)
				function skills_add(){
				var skills_add=$("#skills_add").val();
				if(skills_add=="")
				 $("#skills_add_error").html("skills is Required").css('color','red');
            
                }

		  });

							

							
						});
			</script>

 


<!-- This is For Department Depentent Selection -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
				</script>
				<script type="text/javascript">
				$(document).ready(function()
				{
				$(".quali").change(function()
				{
				var qua_id=$(this).val();
				var post_id = 'id='+ qua_id;
				
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

 <!-- This For Year Selection -->
        <script>
			var start = 1970;
			var end = new Date().getFullYear();
			var options = "";
			for(var year = start ; year <=end; year++){

			options += "<option>"+ year +"</option>";
			}
			document.getElementById("pass").innerHTML = options;

			</script>

				<!-- This is For Javascript Validation Script -->

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>   
   <!-- This is For Keyword Auto Search -->
   <!-- This is For Location Auto Search -->
   <!-- This is For College Auto Search -->
   <!-- This is For Skills Auto Search -->
   <!-- This is For dept Auto Search -->
   <SCRIPT LANGUAGE="JavaScript" src="js/keywordauto.js"></SCRIPT>

				<!-- This is For College Autocomplete Serch-->

 <!-- <SCRIPT LANGUAGE="JavaScript" src="js/jquery.js"></SCRIPT>
 <SCRIPT LANGUAGE="JavaScript" src="js/clgauto.js"></SCRIPT> -->
				
				 <!--This is for Department Autocomplete -->

<!-- <SCRIPT LANGUAGE="JavaScript" src="js/jquery.js"></SCRIPT>
 <SCRIPT LANGUAGE="JavaScript" src="js/expdepartauto.js"></SCRIPT> -->

  <!--This is for Organisation Autocomplete -->
<!-- 
<SCRIPT LANGUAGE="JavaScript" src="js/jquery.js"></SCRIPT>
 <SCRIPT LANGUAGE="JavaScript" src="js/exporgauto.js"></SCRIPT> -->

  <!--This is for Skills Autocomplete -->

 <!-- <SCRIPT LANGUAGE="JavaScript" src="js/jquery.js"></SCRIPT>
 <SCRIPT LANGUAGE="JavaScript" src="js/skillauto.js"></SCRIPT> -->

				
	<!--footer-->
    <?php include 'include/footer.php'; ?>
		