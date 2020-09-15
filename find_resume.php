<?php include 'include/header1.php'; ?>


			<div class="clearfix"></div>
			
			<div class="clearfix"></div>
			<!-- Title Header End -->
            
            
            
			<!-- Browse Resume List Start -->
			<section class="manage-company">
            <div class="row">
                    <div class="col-md-12">
                        <h2 style="color:#3671ca;text-align:center;">We found <span class="match"></span> matches candidates, you are watching <span class="hoverval"></span> to <span class="match"></span></h2></div>
                </div>

				<!--job search here -->

				<div class="container">
					<form class="bt-form" method="GET" action="find_resume.php">
						<div class="col-md-2 col-sm-6">
							
                        </div>
						<div class="col-md-3 col-sm-6">
                        
							<input type="text" class="form-control" name="location" id="location" autocomplete="off" placeholder="Searc By location">
                        </div>
						<div class="col-md-3 col-sm-6">
                        <input type="text" class="form-control" name="keyword" id="keyword" autocomplete="off" placeholder="Skills, Designations, Keyword">
						</div>
						<div class="col-md-2 col-sm-6">
							<button type="submit" name="submit" value="submit" class="btn btn-primary">Search Job</button>
						</div>
					</form>
				</div>

				<div class="container">
					
					
                <?php
                                    
                                    if(isset($_GET['submit']) && !empty($_GET['submit'])) 
                           {
                              $location=$_GET['location'];
                              $keyword=$_GET['keyword'];
                              

                              $sql2="SELECT * FROM city WHERE ctname='$location'";
                              $result2=mysqli_query($conn,$sql2);
                              $row2=mysqli_fetch_assoc($result2);

                               $pcity=$row2['ctid'];

                              $sql="SELECT profile.pid,profile.pfname,profile.plname,profile.pmobile,
                              profile.pemail,profile.pcity,profile.pcreate_date,profile_skills.skills,profile.pexprience
                               FROM `profile`,`profile_skills` WHERE (profile.pcity='$pcity' OR 
                               profile_skills.skills='$keyword') AND profile.pid=profile_skills.skills_rpid
                                GROUP BY profile_skills.skills_rpid ";
                               
                               $result=mysqli_query($conn,$sql);
                               $rowcount=mysqli_num_rows($result);
                               ?>
                               <span class="matchval" style="display:none;"><?php echo $rowcount; ?> </span>
                               <?php
                               for($i=0;$row=mysqli_fetch_assoc($result);$i++){
                                   $id=$row['pid'];
                                   $pcity=$row['pcity'];
                                   $plname=$row['plname'];
                                   $pfname=$row['pfname'];
                                   $pemail=$row['pemail'];
                                   $pmobile=$row['pmobile'];
                                   $date=$row['pcreate_date'];
                                   $pexprience=$row['pexprience'];
                                   $skills=$row['skills'];

                                   $sql1="SELECT * FROM `profile_educ` WHERE edu_rpid='$id' ";
                                   $result1=mysqli_query($conn,$sql1);
                                   $row1=mysqli_fetch_assoc($result1);

                                   $clg=$row1['edu_ins'];

                                   $sql3="SELECT * FROM city WHERE ctid='$pcity'";
                                   $result3=mysqli_query($conn,$sql3);
                                   $row3=mysqli_fetch_assoc($result3);

                                    $city=$row3['ctname'];

                                    $sql4="SELECT * FROM profile_exp WHERE exp_rpid='$id'";
                                   $result4=mysqli_query($conn,$sql4);
                                   $row4=mysqli_fetch_assoc($result4);
                                   
                                   if($pexprience == "fresher"){
                                    $years="fresher";
                                   } else {
                                    $years=$row4['exp_yrs'];
                                   }


                    ?>
					<a href="resumes_details.php?resume_id=<?php echo $id;?>" class="item-click">
						<article>
                            <span class="hover" style="display:none;"><?php echo $i+1; ?></span>
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
												<p><i class="fa fa-envelope"></i>&nbsp<?php echo $pemail; ?></p>
										    <p><i class="fa fa-phone"></i>&nbsp<?php echo $pmobile; ?></p></span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="brows-resume-location">
										     <p><i class="fa fa-book"></i>&nbsp&nbsp<?php echo $skills; ?></p>
											
										</div>
									</div>
									<div class="col-md-2 col-sm-2">
										<div class="browse-resume-rate">
                                        <p><i class="fa fa-map-marker"></i>&nbsp<?php echo $city; ?></p>
										</div>
									</div>
								</div>
								<div class="row extra-mrg row-skill">
									<div class="browse-resume-skills">
										<div class="col-md-9 col-sm-8">
											<div class="br-resume">
												<span><i class="fa fa-university ">&nbsp&nbsp</i><?php echo $clg; ?></span>
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
					 ?>
					
				
				</div>
			</section>
            <!-- Browse Resume List End -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
   <!-- This is For Keyword Auto Search -->
   <!-- This is For Location Auto Search -->
   <!-- This is For College Auto Search -->
   <!-- This is For Skills Auto Search -->
    <!-- This is For dept Auto Search -->
 <SCRIPT LANGUAGE="JavaScript" src="js/keywordauto.js"></SCRIPT>
            
            <script type="text/javascript">
 $(document).ready(function(){
var match=$(".matchval").text();
$(".match").text(match);

$("article").hover(function(){
	var hover=$(this).children(".hover").text();
	$(".hoverval").text(hover);
})
 });
 </script>
			
			<?php include 'include/footer.php'; ?>