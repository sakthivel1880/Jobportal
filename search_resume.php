<?php include 'include/header1.php'; ?>

  <style>
      .advance-header-title{
      opacity: 0.8;
      }
     #frm{
		margin-top: 3em;
	 }
  </style>      
       
        <!-- second job search box -->
 <div class="clearfix"></div>
			
			
			<section class="inner-header-title no-br advance-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h2 class="mrg-bot-5"><span>Work There.</span> <span class="cl-white">Find the Perfect Employee</span></h2>
					<p><span>560</span> new student in the last <span>7</span> days.</p>
				</div>
			</section>
			 <div class="clearfix"></div>
			
			
		
			<section class="bottom-search-form">
				<div class="container">
					<form class="bt-form" id="frm" method="GET" action="find_resume.php">
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
			</section>
   
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
   <!-- This is For Keyword Auto Search -->
   <!-- This is For Location Auto Search -->
   <!-- This is For College Auto Search -->
   <!-- This is For Skills Auto Search -->
    <!-- This is For dept Auto Search -->
 <SCRIPT LANGUAGE="JavaScript" src="js/keywordauto.js"></SCRIPT>

      



		<div class="clearfix"></div>
		<!-- Download app Section End -->
        <?php include 'include/footer.php'; ?>