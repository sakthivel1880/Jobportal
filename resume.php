


<?php include ('include/header.php');

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
							<!-- <div class="detail-pic js">
								 <div class="box">
									<input type="file" name="image" id="upload-pic" class="inputfile" />
									<label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
								</div>
							</div> -->
						</div><br><br>
					        <h2 style="text-align:center;">Upload Resume</h2>
						<div class="row bottom-mrg">
						<form class="add-feild" action="include/uploadresume.php" method="post" enctype="multipart/form-data">
						
								 <div class="col-md-12 col-sm-6">
									<div class="input-group">
                                        <input type="file" class="form-control resume" name="resume" id="resume">
										<p id="error1" style="display:none; color:#FF0000;">Invalid Resume Format! Resume Format Must Be doc, docx, pdf or odt.</p>
									</div>
                                </div>

								<div class="input-group" style="text-align:center;">
								<input type="submit"  name="submit" class="btn btn-lg btn-success submitresume" value="Upload Resume" />
									</div>


						</div>
						</form>


					</div>
				</div>
			</div>

			<script type="text/javascript" 
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<script type="text/javascript">
					$(document).ready(function() {

			$('input.submitresume').prop("disabled", true);
					// 	$(".resume").bind('change',function(){
					// 		if ($('input.submitresume').attr('disabled',false)){
					// 		$('input.submitresume').attr('disabled',true);
					// 		}
					// 		var ext = $('.resume').val().split('.').pop().toLowerCase();
					// 		if ($.inArray(ext, ['doc','docx','pdf','odt']) == true){
					// 		$('input.submitresume').attr('disabled',false);
					// 		$('#error1').hide();
					// 		}
					// 		else{
								
					// 		$('#error1').slideDown("fast");
					// 		}
					// 	});

					// 	$('.resume').click(function( e ) {
					// 	e.preventDefault();
					// 	$('#resume').trigger('click');
					// });

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
					});
					</script>



	<!--footer-->
    <?php include 'include/footer.php'; ?>


