<?php include 'include/header1.php'; ?>

<style>
	.mail{
	text-transform: lowercase;
	}
	</style>
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Browse Resume</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Browse Resume List Start -->
			<section class="manage-company">
				<div class="container">
					
					
					<?php
					

					 
					  $sql ="SELECT * FROM company_profile Where company_rpid=$pid ";
					  $result = mysqli_query($conn, $sql);
					 for($i=0; $row= mysqli_fetch_assoc($result); $i++) {
				       	$company_id=$row['company_id'];
					
					$sql ="SELECT * FROM `job_apply`,`profile` Where job_apply.company_id=$company_id AND profile.pid=job_apply.apply_rpid ";
					$result = mysqli_query($conn, $sql);
					$res_row=mysqli_num_rows($result);
					if($res_row > 0){
				   for($i=0; $row= mysqli_fetch_assoc($result); $i++) {
					 $apply_id=$row['apply_id'];
				     $apply_rpid=$row['apply_rpid'];
                     $pid=$row['pid'];
                     $jobp_id=$row['jobp_id'];
                     $pstate=$row['pstate'];
                     $pcity=$row['pcity'];
                     $pfname=$row['pfname'];
                     $plname=$row['plname'];
                     $paddress=$row['paddress'];
					 $pexprience=$row['pexprience'];  
					 $select_reject=$row['select_reject'];       
					 $pemail=$row['pemail'];  
					 $pmobile=$row['pmobile'];
					 $apply_date=date("d-m-Y", strtotime($row['apply_date'])); 
					  
					 $job_name=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_id='$jobp_id' ");
					 $job_res=mysqli_fetch_assoc($job_name);

					 $aply_job_name=$job_res['jobp_titlename'];
					
					 ?>
					<a href="candidate_details.php?apply_id=<?php echo $apply_id;?>" class="item-click">
						<article>
							<div class="brows-resume">
								<div class="row no-mrg">
									<div class="col-md-6 col-sm-6">
										<div class="item-fl-box">
											<!-- <div class="brows-resume-pic">
												<img src="assets/img/can-1.png" class="img-responsive" alt="" />
											</div> -->
											<div class="brows-resume-name">
												<h4><?php echo $pfname; ?>&nbsp<?php echo $plname; ?></h4>
												<span class=""> <!--brows-resume-designation class name for this-->
												<p class="mail"><i class="fa fa-envelope"></i>&nbsp<?php echo $pemail; ?></p>
										    <p><i class="fa fa-phone"></i>&nbsp<?php echo $pmobile; ?></p></span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="brows-resume-location">
										     <p><i class="fa fa-bookmark"></i>&nbsp<?php echo $aply_job_name; ?></p>
											
										</div>
									</div>
									<div class="col-md-2 col-sm-2">
										<div class="browse-resume-rate">
											<span><?php 
											if($select_reject==""){
												?>
											 <i class="ti-view-list"></i>UnReviewed
											<?php }
											else if($select_reject=="reviewed"){
												?>
												<i class="ti-star"></i><?php echo $select_reject; ?>
											<?php }
											      else if($select_reject=="hired"){
													?>
										             <i class="ti-thumb-up"></i><?php echo $select_reject; ?>
													 <?php }
											      else if($select_reject=="rejected"){
													?>
													 <i class="ti-thumb-down"></i><?php echo $select_reject; ?>
												  <?php } ?>
											</span>
										</div>
									</div>
								</div>
								<div class="row extra-mrg row-skill">
									<div class="browse-resume-skills">
										<div class="col-md-9 col-sm-8">
											<div class="br-resume">
												<span><i class="fa fa-calendar ">&nbsp</i><?php echo $apply_date; ?></span>
												<!-- <span>html</span><span>photoshop</span><span>wordpress</span>
												<span>css</span> -->
											</div>
										</div>
										<div class="col-md-3 col-sm-4">
											<div class="browse-resume-exp">
												<span class="resume-exp"><b>Exp:</b>&nbsp<?php echo $pexprience; ?></span>
											</div>
										</div>
									
									</div>
								</div>
							</div>
						</article>
					</a>
					 <?php 
					} }
					else {
						?>
						 <p><b>Search suggestions:</b></p>
								   <ul>
								       &nbsp&nbsp&nbsp<li>Make sure the city and state are spelled correctly.</li>
									   &nbsp&nbsp&nbsp<li>Replace abbreviations with the entire word.</li>
									   &nbsp&nbsp&nbsp<li>Use a Keyword,Skills instead of a city and state.</li>
									   <ul>
						<?php
					}
				 }
					 ?>
					
					
					<!-- <div class="row">
						<ul class="pagination">
							<li><a href="#"><i class="ti-arrow-left"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li> 
							<li><a href="#">4</a></li> 
							<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li> 
							<li><a href="#"><i class="ti-arrow-right"></i></a></li> 
						</ul>
					</div> -->
					
				</div>
			</section>
			<!-- Browse Resume List End -->
			
			<?php include 'include/footer.php'; ?>