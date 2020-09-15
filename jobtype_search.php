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
							$sql=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_type='Full Time'  AND active_status='0' ");
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
							<!-- <div class="filter-left">
							<p><b>Salary Estimate</b></p>
							<?php
							$query=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_maxsal BETWEEN '8000' and '14999' ");
							$amt_row=mysqli_num_rows($query);
							?>
							<p><a href="jobtype_search.php?maxsal_fst">&#8377;8,000+ &nbsp(<?php echo $amt_row; ?> )</a></p>
							<?php
							$query1=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_maxsal BETWEEN '15000' and '17999' ");
							$amt_row1=mysqli_num_rows($query1);
							?>
							<p><a href="jobtype_search.php?maxsal_sec">&#8377;15,000+ &nbsp(<?php echo $amt_row1; ?> )</a></p>
							<?php
							$query2=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_maxsal BETWEEN '18000' and '24999' ");
							$amt_row2=mysqli_num_rows($query2);
							?>
							<p><a href="jobtype_search.php?maxsal_thr">&#8377;18,000+ &nbsp(<?php echo $amt_row2; ?> )</a></p>
							<?php
							$query3=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_maxsal BETWEEN '25000' and '34999' ");
							$amt_row3=mysqli_num_rows($query3);
							?>
							<p><a href="jobtype_search.php?maxsal_for">&#8377;25,000+ &nbsp(<?php echo $amt_row3; ?> )</a></p>
							<?php
							$query4=mysqli_query($conn,"SELECT * FROM `job_post` WHERE jobp_maxsal BETWEEN '35000' and'1000000' ");
							$amt_row4=mysqli_num_rows($query4);
							?>
							<p><a href="jobtype_search.php?maxsal_fiv">&#8377;35,000+ &nbsp(<?php echo $amt_row4; ?> )</a></p>
						
						</div> -->
						<!-- <br>
							<br> -->
						<div class="filter-left">
						<p><b>Location</b></p>
                        <p><a href="jobtype_search.php?Chennai">Chennai,Tamilnadu</a></p>
							<p><a href="jobtype_search.php?Bengaluru">Bengaluru,Karnataka</a></p>
							<p><a href="jobtype_search.php?Mumbai">Mumbai,Maharastra</a></p>
							<p><a href="jobtype_search.php?Pune">Pune,Maharastra</a></p>
							<p><a href="jobtype_search.php?Noida">Noida,Uttar Pradesh</a></p>
							   
						
						</div>
						
					
						</div>
						<div class="vr">&nbsp;</div>		
						<div class="col-md-9 ">
							<!-- Single Job List -->


							<div class="item-click">
                        
                                <?php
                                    
                                    if(isset($_GET['jobtype_fulltime']) || isset($_GET['jobtype_parttime']) || isset($_GET['walkin'])
                                    || isset($_GET['freshers']) || isset($_GET['contract']) || isset($_GET['internship'])  
                                    || isset ($_GET['chennai']) || isset ($_GET['Bengaluru']) || isset ($_GET['Mumbai'])
                                    || isset ($_GET['Pune']) || isset ($_GET['Noida']) || isset ($_GET['location']) || isset($_GET['keyword'])) 
							  {
                                if(isset($_GET['jobtype_fulltime'])) {
                                    $type="Full Time";
                                } else
                                if(isset($_GET['jobtype_parttime'])) {
                                    $type="Part Time";
                                } else
                                if(isset($_GET['walkin'])) {
                                    $type="Walk-in";
                                } else
                                if(isset($_GET['freshers'])) {
                                    $type="Freshers";
                                } else
                                if(isset($_GET['contract'])) {
                                    $type="Contract";
                                } else 
								if(isset($_GET['internship'])) {
                                    $type="Internship";
                                } else {
                                    $type="";
                                }


                                // if(isset($_GET['maxsal_fst'])) {
                                //     $max="14999";
                                //     $min="8000";
                                // } else
                                // if(isset($_GET['maxsal_sec'])) {
                                //     $max="17999";
                                //     $min="15000";
                                // } else
                                // if(isset($_GET['maxsal_thr'])) {
                                //     $max="24999";
                                //     $min="18000";
                                // } else
                                // if(isset($_GET['maxsal_for'])) {
                                //     $max="34999";
                                //     $min="25000";
                                // } else
                                // if(isset($_GET['maxsal_fiv'])) {
                                //     $max="1000000";
                                //     $min="35000";
                                // } else {
                                //     $min="";
                                //     $max="";
                                // }
                                
                                
                                if(isset($_GET['Chennai'])) {
                                    $location="Chennai";
                                } else
                                if(isset($_GET['Bengaluru'])) {
                                    $location="Bengaluru";
                                } else
                                if(isset($_GET['Mumbai'])) {
                                    $location="Mumbai";
                                } else
                                if(isset($_GET['Pune'])) {
                                    $location="Pune";
                                } else
                                if(isset($_GET['Noida'])) {
                                    $location="Noida";
                                } else
                                if(isset($_GET['location'])) {
                                    $location=$_GET['location'];
                                } else 
                                {
                                    $location="";
								}
								
								if(isset($_GET['keyword'])){
									$key=$_GET['keyword'];
								}else {
									$key="";
								}
                                


                  $sql = "SELECT * FROM `job_post` WHERE (jobp_type ='$type'  OR jobp_location='$location' OR jobp_titlename='$key') AND active_status='0' ";
				  $result = mysqli_query($conn, $sql);
				  $rowcount=mysqli_num_rows($result);
				  if($rowcount!=""){
					   ?>
					   <!-- <span style="display:none"; class="matchval"><?php //echo $rowcount; ?></span> -->
					   <?php
                           // output data of each row
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
												<a href="jobapply.php?location=<?php echo $location ?>&jobp_id=<?php echo $id;?>" class="btn btn-default">Apply Now</a>
											</div>
										</div>
									</div>
									<!-- <span class="tg-themetag tg-featuretag">Premium</span> -->
								</article>

						   <?php }
				  } else{
					?>
					<h4>The Search could not be found.<h4>
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

// $(window).on('resize', function(){
//     var ws = $(window).width();
//     resdiv.html(ws);
//     if (ws <= 479) {
//         $(".horizontal").css('display','block');
//     }else{
//         $(".horizontal").css('display','none');
//     }
// });

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