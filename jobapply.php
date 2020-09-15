<?php include 'include/header.php'; 
 include 'dbconfig.php'; 

?>

			<div class="clearfix"></div>
			
		
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Job Detail Start -->
			<section>
           
				<div class="container">
                
					<div class="col-md-8 col-sm-8">
						<div class="container-detail-box">
                      
                        <?php
                        
						 if(isset($_GET['jobp_id']) && !empty($_GET['jobp_id']))
				{
					$jobp_id=$_GET['jobp_id'];

						$sql = "SELECT * FROM `job_post`  WHERE jobp_id='".$jobp_id."'";
						$result = mysqli_query($conn, $sql);

						for($i=0; $row= mysqli_fetch_assoc($result);$i++ ) {
								$id=$row['jobp_id'];
								$ad=$row['jobp_titlename'];
									?>
                                <form class="bt-form" method="POST" action="include/upload_jobapply.php?jobp_id=<?php echo $id;?>">
						
							<div class="apply-job-header">
								<h4><?php echo $row['jobp_titlename']; ?></h4>
								<a href="" class="cl-success"><span><i class="fa fa-building"></i><?php echo $row['jobp_companyname']; ?></span></a>
								<span><i class="fa fa-map-marker"></i><?php echo $row['jobp_location']; ?></span>&nbsp &nbsp
                                <span class="brows-job-sallery"><?php echo $row['jobp_cur_code']; ?>&nbsp<?php echo $row['jobp_minsal']; ?> - <?php echo $row['jobp_maxsal']; ?></span>
							</div>
							
							<div class="apply-job-detail">
								<h5>Description</h5>
								<p><?php echo $row['jobp_description']; ?></p>
								
							</div>
							<div class="apply-job-detail">
								<h5>Duties</h5>
								<p><?php echo $row['jobp_duties']; ?></p>
								
							</div>
							<div class="apply-job-detail">
								<h5>Responsbilities</h5>
								<p><?php echo $row['jobp_responsibilities']; ?></p>
								
							</div>
							
							<div class="apply-job-detail">
								<h5>Skills</h5>
								<ul class="skills">
									<li><?php echo $row['jobp_skills']; ?></li>
									<!-- <li>Html5</li>
									<li>Photoshop</li>
									<li>Wordpress</li>
									<li>PHP</li>
									<li>Java Script</li> -->
								</ul>
							</div>
							
							<div class="apply-job-detail">
								<h5>Requirements</h5>
								<ul class="job-requirements">
									<li><span>Position</span> :&nbsp &nbsp<?php echo $row['jobp_titlename']; ?></li>
									<li><span>Type</span> :&nbsp &nbsp<?php echo $row['jobp_type']; ?></li>
									<li><span>Experience</span> :&nbsp &nbsp<?php echo $row['jobp_exprience']; ?></li>
								</ul>
							</div>
                    		<?php
						 if(isset($_SESSION['resume_msg'])){
							?>
							<div style="height: 40px;"></div>
							<div class="alert alert-danger">
							  <span><center>
							  <?php echo $_SESSION['resume_msg'];
								unset($_SESSION['resume_msg']); 
							  ?>
							  </center></span>
							</div>
                            <?php
						  }
						  if(isset($pid))
						  {
						  $query_apply=mysqli_query($conn,"SELECT * FROM `job_apply` WHERE `jobp_id`='$jobp_id' AND `apply_rpid`='$pid' ");
												$num_rows=mysqli_num_rows($query_apply);
												if($num_rows > 0){
						?> 
							<input type="submit" name="submit" disabled="disabled" class="btn btn-success" value="Already Applied For This Job">
												<?php } } else { ?>
													<input type="submit" name="submit" class="btn btn-success" value="Apply For This Job">
												<?php } ?>
												</form>
                            <?php }
                } ?>
					
						</div>
						
						<!-- Similar Jobs -->
						<div class="container-detail-box">
						
							<div class="row">
								<div class="col-md-12">
									<h4>Similar Jobs</h4>
								</div>
							</div>
							
							<div class="row">
								<div class="grid-slide-2">
									
									<!-- Single Freelancer & Premium job -->

                                    <?php
						 if(isset($_GET['jobp_id']) && !empty($_GET['jobp_id']))
				{
					$jobp_id=$_GET['jobp_id'];

					$sql = "SELECT * FROM `job_post`  WHERE jobp_id > $jobp_id AND active_status='0' ORDER BY `jobp_id` DESC LIMIT 10";
						$result = mysqli_query($conn, $sql);

						for($i=0; $row= mysqli_fetch_assoc($result);$i++ ) {
								$id=$row['jobp_id'];
								//$ad=$row['jobp_titlename'];
									?>
                              
									<div class="freelance-box">
										<div class="popular-jobs-container">
											<div class="popular-jobs-box">
												<span class="popular-jobs-status bg-success"><?php echo $row['jobp_type']; ?></span>
												<h4 class="flc-rate"><?php echo $row['jobp_cur_code']; ?>&nbsp<?php echo $row['jobp_maxsal']; ?>-<?php echo $row['jobp_minsal']; ?></h4>
												<div class="popular-jobs-box">
													<div class="popular-jobs-box-detail">
														<a href="jobapply.php?jobp_id=<?php echo $id; ?>"><h4><?php echo $row['jobp_companyname']; ?></h4></a>
														<span class="desination"><?php echo $row['jobp_titlename']; ?></span>
													</div>
												</div>
												<div class="popular-jobs-box-extra">
													<ul>
														<li><?php echo $row['jobp_skills']; ?></li>
														<!-- <li>Android</li>
														<li>Html</li> 
														<li class="more-skill bg-primary">+3</li>-->
													</ul>
													<p><?php echo $row['jobp_description']; ?></p>
												</div>
											</div>
											<a href="jobapply.php?jobp_id=<?php echo $id; ?>" class="btn btn-popular-jobs bt-1">View Detail</a>
										</div>
									</div>
                        <?php } } ?>
									
									
							
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Sidebar Start-->
					<div class="col-md-4 col-sm-4">
						
						<!-- Job Detail -->
                       
						<div class="sidebar-container">
							<div class="sidebar-box">
								<?php
								$query="SELECT * FROM `ads` WHERE ads_title='$ad' ";
								$res=mysqli_query($conn,$query);
								$rowcount=mysqli_num_rows($res);
								if($rowcount != ""){

								for($i=0;$row=mysqli_fetch_assoc($res);$i++){
								?>
							<div class="w3-content w3-section"  >
            <img class="mySlides" src="admin/uploads/<?php echo $row['wpic_lans']; ?>" style="width:100%">
		</div>
								<?php } }
								else { 
									$query="SELECT * FROM `ads` ORDER BY ads_id DESC ";
								$res=mysqli_query($conn,$query);
								for($i=0;$row=mysqli_fetch_assoc($res);$i++){
								?>
								<div class="w3-content w3-section"  >
								<a href="<?php echo $row['link']; ?>"><img class="mySlides" src="admin/uploads/<?php echo $row['wpic_lans']; ?>" style="width:100%">
			</a><?php echo $row['wpic_port']; ?>
		</div>
								<?php } } ?>
							
							</div>
							<a href="#" class="btn btn-sidebar bt-1 bg-success">Contact Here</a>
                        </div>
                
						
						<!-- Share This Job -->
						<div class="sidebar-wrapper">
							<div class="sidebar-box-header bb-1">
								<h4>Share This Job</h4>
							</div>
						
							<ul class="social-share">
								<li><a href="#" class="fb-share"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="tw-share"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="gp-share"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="in-share"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="li-share"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="be-share"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
						
					</div>
					<!-- End Sidebar -->
					
				</div>
			</section>
			<!-- Job Detail End -->
			
			<script type="text/javascript">
			var myIndex = 0;
			carousel();

			function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 2000); // Change image every 2 seconds
			}
			</script>
						
            <?php include 'include/footer.php'; ?>