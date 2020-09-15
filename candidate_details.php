<?php include 'include/header1.php'; ?>

<style>
.button5 {border-radius: 50%;
float:left;
}
</style>

			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">

				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Candidate Detail Start -->
            <?php
            if(isset($_GET['apply_id']) && !empty($_GET['apply_id'])){
                $apply_id=$_GET['apply_id'];

                $sql1="SELECT * from `job_apply`,`profile` where apply_id=$apply_id AND job_apply.apply_rpid=profile.pid ";
                $result1= mysqli_query($conn,$sql1);
                for($i=0; $row1=mysqli_fetch_assoc($result1); $i++){
                  $apply_id=$row1['apply_id'];
                  $pcity=$row1['pcity'];
                  $pstate=$row1['pstate'];
                  $pfname=$row1['pfname'];
                  $plname=$row1['plname'];
                  $paddress=$row1['paddress'];
                  $rpid=$row1['pid'];
                  $pgender=$row1['pgender'];
                  $pmobile=$row1['pmobile'];
                  $pemail=$row1['pemail'];
                  $presume=$row1['presume'];
                  $pexprience=$row1['pexprience'];
                  $apply_date=$row1['apply_date'];

                    $sql3="SELECT * from `city` where ctid=$pcity ";
                    $result3= mysqli_query($conn,$sql3);
                    for($i=0; $row3=mysqli_fetch_assoc($result3); $i++){

						 $ctname=$row3['ctname'];

                      


        
                   
              
            ?>
			<section class="detail-desc">
				<div class="container">
				
					<div class="ur-detail-wrap top-lay">
						
						<div class="ur-detail-box">
							
							<div class="ur-caption">
								<h4 class="ur-title"><?php echo $pfname; ?>&nbsp<?php echo $plname; ?></h4>
								<p class="ur-location"><i class="ti-location-pin mrg-r-5"></i><?php echo $paddress; ?>,<?php echo $ctname; ?></p>
								<span class="ur-designation"><i class="ti-mobile mrg-r-5"></i><?php echo $pmobile; ?></span><br><br>
								
                                <a href="include/downloadresume.php?presume=<?php echo $presume;?>" class="btn btn-info mrg-bot-10 full-width"><i class="ti-download mrg-r-5"></i>Download CV</a><br>
							</div>
							
						</div>
						
						<div class="ur-detail-btn">
						<!-- <div id="reviewed"></div> -->
                        <button class="btn btn-warning mrg-bot-10 full-width reviewed" ><i class="ti-star mrg-r-5"></i>Reviewed<span id="reviewed"></span> </button><br>
						<button  class="btn btn-success mrg-bot-10 full-width hired"><i class="ti-thumb-up mrg-r-5"></i>Hired<span id="hired"></span></button><br>
						<button  class="btn btn-danger mrg-bot-10 full-width rejected"><i class="ti-thumb-down mrg-r-5"></i>Rejected<span id="rejected"></span></a>
						</div>
					
					</div>
					
				</div>
			</section>
			<!-- Candidate Detail End -->
			
			<!-- Candidate full detail Start -->
			<section class="full-detail-description full-detail">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-8 col-md-8">

						<?php
						$sql4="SELECT * from `profile_educ` where edu_rpid=$rpid ";
                            $result4= mysqli_query($conn,$sql4);
                            for($i=0; $row4=mysqli_fetch_assoc($result4); $i++){

                                $edu_degree=$row4['edu_degree'];
                                $edu_ins=$row4['edu_ins'];
                                $edu_dept=$row4['edu_dept'];
                                $edu_pass=$row4['edu_pass'];
                                $edu_course_type=$row4['edu_course_type'];
                                

                                $sql5="SELECT * from `edu_quali` where qua_id=$edu_degree ";
                                $result5= mysqli_query($conn,$sql5);
                                for($i=0; $row5=mysqli_fetch_assoc($result5); $i++){
    
                                    $qua_name=$row5['qua_name'];

                                    $sql6="SELECT * from `edu_quali_dept` where edu_dep_id=$edu_dept ";
                                    $result6= mysqli_query($conn,$sql6);
                                    for($i=0; $row6=mysqli_fetch_assoc($result6); $i++){
        
										$dept_name=$row6['dept_name'];
										?>
                            <div class="row-bottom">
								<h2 class="detail-title">Education</h2>
								
										<div class="trim-edu">
											<h4 class="trim-edu-title">Education Qualification &nbsp&nbsp:&nbsp&nbsp<?php echo $qua_name; ?><span class="title-est"></span></h4>
											<strong>Department &nbsp&nbsp:&nbsp</strong>&nbsp<?php echo $dept_name; ?>
											<p><strong>Institute &nbsp&nbsp:&nbsp</strong>&nbsp<?php echo $edu_ins; ?></p>
                                            <p><strong>Year Of Passing &nbsp&nbsp:&nbsp</strong>&nbsp<?php echo $edu_pass; ?></p>
										    <p><strong>Course Type &nbsp&nbsp:&nbsp</strong>&nbsp<?php echo $edu_course_type; ?></p>
                                        </div>

                                        </div>
							<?php 
									}
								}
							}
                            
                         $sql2="SELECT * FROM `profile_exp` WHERE exp_rpid=$rpid ";
						 $result2=mysqli_query($conn,$sql2);
						 for($i=0;$row2=mysqli_fetch_assoc($result2); $i++){
 
							$exp_depart=$row2['exp_depart'];
							$exp_yrs=$row2['exp_yrs'];
							$exp_orgtype=$row2['exp_orgtype'];
							$exp_compname=$row2['exp_compname'];
							$exp_yrs=$row2['exp_yrs'];
							$exp_months=$row2['exp_months'];
							$exp_sal_lakhs=$row2['exp_sal_lakhs'];
							$exp_sal_thousands=$row2['exp_sal_thousands'];
                                ?>
							<div class="row-bottom">
								<h2 class="detail-title">Work & Experience</h2>
								
										<div class="trim-edu">
											<h4 class="trim-edu-title">Company Name &nbsp&nbsp:&nbsp&nbsp<?php echo $exp_compname; ?><span class="title-est"></span></h4>
											<strong>Designation &nbsp&nbsp:&nbsp</strong>&nbsp<?php echo $exp_depart; ?>
											<p><strong>Exprience &nbsp&nbsp:&nbsp</strong>&nbsp<?php echo $exp_yrs; ?></p>
                                            <p><strong>Salary &nbsp&nbsp:&nbsp</strong>&nbsp<?php echo $exp_sal_lakhs; ?>&nbsp/&nbsp Month</p>
										</div>
									
									
									
							</div>
                            <?php } ?>
							
                            <div class="row-bottom">
								<h2 class="detail-title">Skills</h2>
								<?php
							$sql="SELECT * from `profile_skills` where skills_rpid=$rpid ";
                        $result= mysqli_query($conn,$sql);
                        for($i=0; $row=mysqli_fetch_assoc($result); $i++){
                            
                            $skills=$row['skills'];
							$skills_exp=$row['skills_exp'];
							?>
										<div class="trim-edu">
											<h4 class="trim-edu-title">Skill Name &nbsp&nbsp:&nbsp&nbsp<?php echo $skills; ?><span class="title-est"></span></h4>
											<p><strong>Exprience &nbsp&nbsp:&nbsp</strong>&nbsp<?php echo $skills_exp; ?></p>
										</div>
						<?php } ?>
                                        </div>
							
						</div> 
						
						<div class="col-lg-4 col-md-4">
							<div class="full-sidebar-wrap">
								
								<!-- Candidate overview -->
								<div class="sidebar-widgets">
								
									<div class="ur-detail-wrap">
										<div class="ur-detail-wrap-header">
											<h4>Candidate Overview</h4>
										</div>
										<div class="ur-detail-wrap-body">
											<ul class="ove-detail-list">
											
												<li>
													<i class="ti-email"></i>
													<h5>Email</h5>
													<span><?php echo $pemail; ?></span>
												</li>
												
                                                <li>
													<i class="ti-mobile"></i>
													<h5>Phone</h5>
													<span><?php echo $pmobile; ?></span>
												</li>
												<li>
													<i class="ti-user"></i>
													<h5>Gender</h5>
													<span><?php echo $pgender; ?></span>
												</li>
												
												
												<li>
													<i class="ti-tag"></i>
													<h5>Year Of Passing</h5>
													<span><?php echo $edu_pass; ?></span>
												</li>
												<li>
													<i class="ti-shield"></i>
													<h5>Experience</h5>
													<span><?php echo $pexprience; ?></span>
												</li>
												
												<li>
													<i class="ti-book"></i>
													<h5>Qualification</h5>
													<span><?php echo $qua_name; ?></span>
												</li>
												
											</ul>
										</div>
									</div>
									
								</div>
								<!-- /Candidate overview -->
								
								<!-- Say Hello `For Future Use-->
								 <div class="sidebar-widgets">
								
									<div class="ur-detail-wrap">
										<div class="ur-detail-wrap-header">
											<h4>Get In Touch</h4>
										</div>
										
										<div class="ur-detail-wrap-body">
											<div>
												<!-- <div class="form-group">
													<label>Name</label>
													<input type="email" class="form-control">
												</div>
												<div class="form-group">
													<label>Email</label>
													<input type="email" class="form-control">
												</div> -->
												<div class="form-group">
													<label>Message</label>
													<textarea class="form-control msg"></textarea>
												</div>
												<div id="mail-status"></div>
												<button type="submit" class="btn btn-primary send"  >Send</button>
											</div>
										</div>
									</div>
									
								</div> 
								<!-- /Say Hello -->
							
							</div>
						</div>
					
					</div>
				</div>
			</section>
			<?php   } }

} 
?>
           
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	//reviewed the person
	$(".reviewed").click(function(){
		 var rewid="<?php echo $apply_id; ?>";
		  $.ajax({
                        url:'include/update_reviewed.php',
                        method:'POST',
                        data:{
                            rewid:rewid, 
                        },
                        success:function(response){
                            $("#reviewed").html(response);
                        }
                    });

	
 });

//select the person
 $(".hired").click(function(){
		 var selid="<?php echo $apply_id; ?>";
		  $.ajax({
                        url:'include/update_hired.php',
                        method:'POST',
                        data:{
                            selid:selid, 
                        },
                        success:function(response){
                            $("#hired").html(response);
                        }
                    });

	
 });

//reject the person
 $(".rejected").click(function(){
		 var rejid="<?php echo $apply_id; ?>";
		  $.ajax({
                        url:'include/update_rejected.php',
                        method:'POST',
                        data:{
                            rejid:rejid, 
                        },
                        success:function(response){
                            $("#rejected").html(response);
                        }
                    });

	
 });

});
</script>

<script>

$(".send").click(function(){
 var frmail="<?php echo $company_email ?>";
 var tomail="<?php echo $pemail ?>";
 var name="<?php echo $company_name ?>";
 var mobile="<?php echo $pmobile ?>";
 var msg=$(".msg").val();
  $.ajax({
      url:'include/contact_mail.php',
	  type:'POST',
	  data:{frmail:frmail,tomail:tomail,name:name,mobile:mobile,msg:msg },
	  success:function(response){
		$("#mail-status").html(response);
	  }
  });
});
//         jQuery.ajax({
//             url: "include/contact_mail.php",
//             data:{message:$('input.msg').val();},
//             type: "POST",
//             success:function(data){
//                 $("#mail-status").html(data);
//             },
//             error:function (){}
//         });
//     }
// }

</script>



			<!-- company full detail End -->
			
			<?php include 'include/footer.php'; ?>