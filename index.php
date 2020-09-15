<?php include 'include/header.php';

 ?>

  <style>
      .advance-header-title{
      /* opacity: 0.8; */
      }
      .bt-form{
        margin-bottom: 4em;
      }
     .mrg-bot-5 , .clr{
        color: #3671ca;
     }
     .icon{
     margin-right: 10px;
     float:right;
     margin-top: 3px;
     }
     .recent:hover{
      text-decoration: underline;
     }
     .recent{
     color:#3671ca;
     }
     .search_recent{
      background-color:#f4f2f28a;padding: 10px;
     }
     .font1{
      font-size: 25px;
     }
     .btn-default{
      border-radius: 50px;
      padding: 3px 16px;
     }
  </style>      
       
        <!-- second job search box -->
 <div class="clearfix"></div>
			
			
			<section class=" no-br advance-header-title" style="background-color:#fff;">
				<div class="container" style="text-align: center;">
                    <h2 class="mrg-bot-5"><span>Work There.</span> <span >Find the dream job</span></h2>
                    <?php 
                    $sql="SELECT * FROM `job_post` WHERE posted_date>=DATE(NOW())-INTERVAL 7 DAY";
                    $result=mysqli_query($conn,$sql);
                    $rowcount=mysqli_num_rows($result);
                    ?>
					<p><span><b><?php echo $rowcount; ?></b></span> <span class="clr">new jobs in the last</span></span> <b>7</b></span><span class="clr"> days.</span></p>
				</div>
			</section>
			 <div class="clearfix"></div>
			
			
		
			<section class="bottom-search-form ">
				<div class="container">
					<form class="bt-form" method="GET" action="jobsearch.php">
						<div class="col-md-2 col-sm-6">
						</div>
						<div class="col-md-3 col-sm-6">
							<input type="text" class="form-control" name="keyword" id="keyword" autocomplete="off" placeholder="Job title, Designations, Keyword">
                        </div>
						<div class="col-md-3 col-sm-6">
                        
							<input type="text" class="form-control" name="location" id="location" autocomplete="off" placeholder="Search By City / District">
                        </div>
						
						<div class="col-md-2 col-sm-6">
							<button type="submit" name="submit" value="submit" class="btn btn-primary">Search Job</button>
                        </div>
                        
                 </form>
                </div>
                <?php 
                if(isset($_SESSION['keyword']) || isset($_SESSION['location'])){
                  ?>
                <div class="row search_recent" >
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-5">
                <span><b class="font1">Recent Searches</b></span>
                <!-- <a href="javascript:void(0);" class="btn btn-default edit" style="float:right;">Edit</a> -->
                <div style="background-color: white;margin-top: 10px;">
                <a href="jobtype_search.php?keyword=<?php if(isset($_SESSION['keyword'])) { echo $_SESSION['keyword'];  ?>"  class="recent"><?php if(isset($_SESSION['keyword'])) { echo $_SESSION['keyword']; } ?>
                <i  class="<?php if($_SESSION['keyword']!="") { ?>fa fa-angle-right icon <?php } ?>"></i><?php } ?></a>
                
              </div><br>
              <div style="background-color: white;">
              <a href="jobtype_search.php?location=<?php if(isset($_SESSION['location'])) { echo $_SESSION['location']; ?>" class="recent"><?php if(isset($_SESSION['location'])) { echo $_SESSION['location']; }?>
                <i class="<?php if($_SESSION['location']!="") { ?> fa fa-angle-right icon <?php  } ?>"></i><?php } ?></a>
              </div>
              </div>
              <div class="col-md-3">
            </div>
            </div>
                <?php } ?>
              </section>
   
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
   <!-- This is For Keyword Auto Search -->
   <!-- This is For Location Auto Search -->
   <!-- This is For College Auto Search -->
   <!-- This is For Skills Auto Search -->
    <!-- This is For dept Auto Search -->
 <SCRIPT LANGUAGE="JavaScript" src="js/keywordauto.js"></SCRIPT>

      <script type="text/javascript">
        $(".edit").click(function(){
          $(".icon").removeClass("fa-angle-right");
          $(".icon").addClass("fa-times");
        });
        // $(".icon").click(function(){
        //   $(this).parent("a.recent")hide();
        // });
                </script>



		<div class="clearfix"></div>
		<!-- Download app Section End -->
        <?php include 'include/footer.php'; ?>