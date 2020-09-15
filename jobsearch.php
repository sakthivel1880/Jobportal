<?php include 'include/header.php'; 
	   include('dbconfig.php');
	   

?>

<div class="clearfix"></div>

<style>
	.bdr{
	border-radius: 4px;
	}
	.vr {
		width: 1px;
		background-color: #ccc;
		position: absolute;
		top: 245px;
		bottom: 67px;
		left: 354px;
}


	</style>
 
 <section class="brows-job-category">
 
            <div class="container">
                <div class="row">
				<div class="col-md-1">
				</div>
                    <div class="col-md-9">
                        <h2 style="color:#3671ca;text-align:center;">We found <span class="match"></span> matches jobs, you are watching <span class="hoverval"></span> to <span class="match"></span></h2></div>
                </div>

				<!--job search here -->

				<div class="container">
					<form class="bt-form" method="GET" action="jobsearch.php">
						<div class="col-md-2 ">
						</div>
						<div class="col-md-3 ">
							<input type="text" class="form-control bdr" name="keyword" id="keyword" autocomplete="off" placeholder="Job title, Designations, Keyword">
						</div>
						<div class="col-md-3 ">
                        
							<input type="text" class="form-control bdr" name="location" id="location" autocomplete="off" placeholder="Search By City / District">
                         </div>
						
						<div class="col-md-2  mybtn">
							<button type="submit" name="submit" value="submit" class="btn btn-primary">Search Job</button>
						</div>
					</form>
				</div>
<hr>
				
                <div class="row">
						<div class="col-md-3 column-left">
						<div>
							<p><b>Job Type</b></p>
							<?php
							$sql=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_type='Full Time' AND active_status='0' ");
							$full_row=mysqli_num_rows($sql);
							?>
							<p><a href="jobtype_search.php?jobtype_fulltime">Full Time &nbsp (<?php echo $full_row; ?>)</a></p>
							<?php
							$sql1=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_type='Part Time'  AND active_status='0' ");
							$full_row1=mysqli_num_rows($sql1);
							?>
							<p><a href="jobtype_search.php?jobtype_parttime">Part Time &nbsp (<?php echo $full_row1; ?>)</a></p>
							<?php
							$sql2=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_type='Walk-in'  AND active_status='0' ");
							$full_row2=mysqli_num_rows($sql2);
							?>
							<p><a href="jobtype_search.php?walkin">Walk-in &nbsp (<?php echo $full_row2; ?>)</a></p>
							<?php
							$sql3=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_type='Freshers'  AND active_status='0' ");
							$full_row3=mysqli_num_rows($sql3);
							?>
							<p><a href="jobtype_search.php?freshers">Freshers &nbsp (<?php echo $full_row3; ?>)</a></p>
							<?php
							$sql4=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_type='Contract'  AND active_status='0' ");
							$full_row4=mysqli_num_rows($sql4);
							?>
							<p><a href="jobtype_search.php?contract">Contract &nbsp (<?php echo $full_row4; ?>)</a></p>
							<?php
							$sql5=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_type='Internship'  AND active_status='0' ");
							$full_row5=mysqli_num_rows($sql5);
							?>
							<p><a href="jobtype_search.php?internship">Internship &nbsp (<?php echo $full_row5; ?>)</a></p>
							<br>
							<br>
							 </div>
							
						 <div class="filter-left"> <!--class filter-left-sec add Future -->
							<p><b>Location</b></p>
							<?php
                                    
									if(isset($_GET['submit']) && !empty($_GET['submit'])) 
						   {
							   $keyword=$_GET['keyword'];
							   $location=$_GET['location'];
							   if($location==""){
							   ?>
							<p><a href="jobtype_search.php?Chennai">Chennai,Tamilnadu</a></p>
							<p><a href="jobtype_search.php?Bengaluru">Bengaluru,Karnataka</a></p>
							<p><a href="jobtype_search.php?Mumbai">Mumbai,Maharastra</a></p>
							<p><a href="jobtype_search.php?Pune">Pune,Maharastra</a></p>
							<p><a href="jobtype_search.php?Noida">Noida,Uttar Pradesh</a></p>
							   <?php } else if($keyword !="") { ?>
								<p><a href="jobtype_search.php?location=<?php echo $location; ?>"><?php echo $location; ?></a></p>
							<p><a href="jobtype_search.php?location=<?php echo $location; ?>"><?php echo $keyword; ?> &nbsp NationalWide</a></p>
						   <?php } else { ?>
								<p><a href="jobtype_search.php?location=<?php echo $location; ?>"><?php echo $location; ?></a></p>
						   <?php } } ?>
						
						</div>
						
					
						</div>
						<div class="vr">&nbsp;</div>		
						<div class="col-md-9 ">
							<!-- Single Job List -->


							<div class="item-click">
                        
                                <?php
                                    
									   if(isset($_GET['submit']) && !empty($_GET['submit'])) 
							  {
								  $keyword=$_GET['keyword'];
								  $location=$_GET['location'];

								  $_SESSION['keyword']=$_GET['keyword'];
								  $_SESSION['location']=$_GET['location'];
								


                  $sql = "SELECT * FROM `job_post` WHERE (jobp_titlename ='$keyword' OR jobp_location='$location'  OR jobp_companyname='$keyword') AND active_status='0' ";
				  $result = mysqli_query($conn, $sql);
				  $rowcount=mysqli_num_rows($result);
					   ?>
					   <!-- <span style="display:none;" class="matchval"><?php //echo $rowcount; ?></span> -->
					   <?php
						   // output data of each row
						   if($rowcount!=""){
                           for($i=0; $row= mysqli_fetch_assoc($result);$i++ ) {
							$id=$row['jobp_id'];
							//$i=$i;
                            
                               ?>
								<article>
									<span class="hover" style="display:none;" ><?php echo $i+1; ?></span>
									<div class="brows-job-list">
										<div class="col-md-6 col-sm-6">
											<div class="item-fl-box">
												<!-- <div class="brows-job-company-img">
													<a href="job-detail.html"><img src="assets/img/com-1.jpg" class="img-responsive" alt="" /></a>
												</div> -->
												<div class="brows-job-position">
													<h3 ><a href="jobapply.php?location=<?php echo $location ?>&jobp_id=<?php echo $id;?>"><?php echo $row['jobp_titlename']; ?></a></h3>
													<p>
														<span><?php echo $row['jobp_companyname']; ?></span><span class="brows-job-sallery"><?php echo $row['jobp_minsal']; ?> - <?php echo $row['jobp_maxsal']."&nbsp".$row['jobp_cur_code']; ?></span>
														<span class="job-type cl-success bg-trans-success"><?php echo $row['jobp_type']; ?></span>
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="brows-job-location">
												<p><i class="fa fa-map-marker"></i><?php echo $row['jobp_location']; ?></p>
											</div>
										</div>
										<div class="col-md-2 col-sm-2 aply-btn">
											<div class="brows-job-link">
												<?php
												 if(isset($pid))
    												{
												$query_apply=mysqli_query($conn,"SELECT * FROM `job_apply` WHERE `jobp_id`='$id' AND `apply_rpid`='$pid' ");
												$num_rows=mysqli_num_rows($query_apply);
												if($num_rows > 0){
												?>
												<a href="jobapply.php?location=<?php echo $location ?>&jobp_id=<?php echo $id;?>" class="btn btn-success">Applied</a>
												<?php } } else {
													?>
												<a href="jobapply.php?location=<?php echo $location ?>&jobp_id=<?php echo $id;?>" class="btn btn-default">Apply Now</a>
												<?php } ?>
											</div>
										</div>
									</div>
									<!-- <span class="tg-themetag tg-featuretag">Premium</span> -->
								</article>

						   <?php }
						   } else{
							$_SESSION['keyword']=$_GET['keyword'];
							$_SESSION['location']=$_GET['location'];
							   ?>
							   <h4>The <?php if(isset($keyword)){ echo $keyword; } else  if(isset($location)){ echo $location; } ?> could not be found.<h4>
								   <br>
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
							</div>
						
							
						
						</div>
					</div>
              
            </div>
        </section>
		<div class="clearfix"></div>
		
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
$(".match").text(<?php echo $rowcount; ?>);

$("article").hover(function(){
	var hover=$(this).children(".hover").text();
	$(".hoverval").text(hover);
});

 });
 </script>

 <script src="js/jquery.paginate.js"></script>

<script>
	//call paginate
$('.item-click').paginate({

// how many items per page
perPage:                20, 

// boolean: scroll to top of the container if a user clicks on a pagination link       
autoScroll:             false,     

// which elements to target
scope:                  '',      

// defines where the pagination will be displayed
paginatePosition:       ['bottom'],    

// Pagination selectors

containerTag:           'nav',
paginationTag:          'ul',
itemTag:                'li',
linkTag:                'a',

// Determines whether or not the plugin makes use of hash locations
useHashLocation:        true,   

// Triggered when a pagination link is clicked
onPageClick:            function() {}  


});
</script>
        <?php include 'include/footer.php'; ?>