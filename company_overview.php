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
					        <h3 style="text-align:center;">COMPANY OVERVIEW</h3>
                            <br><br>
                            <div id="tick"></div>
							<input type="button" style="float:right;"  class="request btn btn-info" value="Ads Request">
						<div class="row bottom-mrg">
                        
							<form class="add-feild">
                            
                            <div class="col-md-12 col-sm-6">
									<div class="input-group">
									<i class="ti-list"></i>&nbsp<span> <b>Candidate Waitting For Review</b> </span>
									</div>
                                </div><br>
                                <?php 
                                $sql="SELECT * FROM `job_post` WHERE jobp_rpid='$pid' AND active_status='0'";
                                $result=mysqli_query($conn,$sql);
                                for($i=0;$row=mysqli_fetch_assoc($result);$i++){
                                   $jobp_id=$row['jobp_id'];
                                    $job_name=$row['jobp_titlename'];
									$job_location=$row['jobp_location'];
									$jobp_companyid=$row['jobp_companyid'];

									//$sql="SELECT `job_name`,`job_titlename`,`count(jobp_id) as numbers`  FROM `job_post`,`job_apply` where job_posy.jobp_id='$' "
									
									 $sql1="SELECT * FROM `job_apply` WHERE jobp_id='$jobp_id' AND company_id ='$jobp_companyid'";
									 $result1=mysqli_query($conn,$sql1);
									 $rowcount=mysqli_num_rows($result1);
									 //$row1=mysqli_fetch_assoc($result1);
									
									?>
										<article>
									<div class="brows-job-list ">
                                <div class="col-md-12 col-sm-6">
									<div class="input-group">
                                    <span>&nbsp &nbsp &nbsp <?php echo $job_name; ?> - <?php echo $job_location; ?> </span><br>
									  <span>&nbsp &nbsp &nbsp <?php echo $rowcount ?> Candidate Are Waitting </span> 
                                   
									</div>
								</div>
								</div></article>
                                <?php   } ?>
								
							</form>
                            
						</div>
					
					
					</div>
				</div>
			</div>

			<script type="text/javascript" 
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<script type="text/javascript">
					$(".request").click(function() {
						var request_id="<?php echo $pid; ?>";
					    $.ajax({
							url:'include/ads_request.php',
							type:'post',
							data:{request_id:request_id},
							success:function(response){
								$("#tick").html(response);
							},
						});

					});
					</script> 
			
			

	            <!--footer-->
	       <?php include 'include/footer.php'; ?>