<?php
 include('dbconfig.php');
 require_once 'config.php';
 require_once 'facebook_config.php';

 if (isset($_SESSION['access_token'])) {
   header('Location: index.php');
   exit();
} else if(isset($_COOKIE['email']) and isset($_COOKIE['password'])){
   header('Location: index.php');
   exit();
}  else if(isset($_SESSION['pid'])){
   header('Location: index.php');
   exit();
}

$googleURL = $gClient->createAuthUrl();


$redirectURL = "http://localhost/jobportal/fb-login.php";
	$permissions = ['email'];
	$facebookURL = $helper->getLoginUrl($redirectURL, $permissions);
  ?>

<!doctype html>
<html lang="en">

<head>
	<!-- Basic Page Needs
	================================================== -->
	<?php 
    $sql="SELECT * FROM `favicon` order by favicon_id limit 1 ";
    $result=mysqli_query($conn,$sql);
    for($i=0;$row=mysqli_fetch_assoc($result);$i++){

	?>
	<link rel="icon" href="admin/favicon/<?php echo $row['favicon']?>" type="image/png" sizes="16*16">
    <title><?php echo $row['title']; ?> </title>
    <?php } ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="assets/plugins/css/plugins.css">
    
    <!-- Custom style -->
    <link href="assets/css/styles.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
	
	<style>
		.img-responsive{
			height: 200px;
			width: 200px;
		}
		.border{
			border-radius: 5px;
			border-color:#b0b2c4;
		}
		.google{
			border: 2px solid #3671ca;
			color:#3671ca;
			font-size: 16px;
			height: 45px;
			text-align: center;
			padding: 10px;
		}
		.facebook{
			border: 2px solid #3671ca;
			color:#3671ca;
			font-size: 16px;
			height: 45px;
			text-align: center;
			padding: 10px;
		}
		.linkedin{
			border: 2px solid #3671ca;
			color:#3671ca;
			font-size: 16px;
			height: 45px;
			text-align: center;
			padding: 10px;
		}
		.fa-google{
			float:right;
		}
		.fa-google path{
		
			fill:url(#grad1);
		}
		.fa-google + .fa-google path{
			fill:url(#grad2);
			}
			.icon {
			display:inline-block;
			position:relative;
			}
			.fa-google + .fa-google {
			position:absolute;
			float:right;
			clip-path: polygon(0% 0%,120% 0%,0% 75%);
			}
		.fa-facebook{
			float:right;
		}
		.fa-linkedin{
			float:right;
		}
		h4 {
			display: flex; 
            flex-direction: row; 
        } 
          
        h4:before, 
        h4:after { 
            content: ""; 
            flex: 1 1; 
            border-bottom: 2px solid #085ff7; 
            margin: auto; 
        } 
		#frm{
		background-color: #fff;
		padding: 1.5rem;
		margin-bottom: 1.5rem;
		}
		.signup-screen .google{
			border-radius: 50px;
		}
		.signup-screen .facebook{
			border-radius: 50px;
		}
		.signup-screen .linkedin{
			border-radius: 50px;
		}
		</style>
	</head>
	<body class="simple-bg-screen" style="background-image:url(assets/img/banner-10.jpg);">
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Title Header Start -->
			<section class="signup-screen-sec" >
				<div class="container">
					<div class="signup-screen">
					<?php 
                    $sql="SELECT * FROM `logo` order by logo_id limit 1 ";
                    $result=mysqli_query($conn,$sql);
                    for($i=0;$row=mysqli_fetch_assoc($result);$i++){
                        ?>
						<a href="index.php" id="mrg"><img src="admin/logo/<?php echo $row['logo']?>" class="img-responsive " alt=""></a>
						<?php } ?>
						<form action="include/uploadsignup.php" method="post" id="frm">
						<!-- <h3 style="">Create an Account (it's free)</h3> -->
						<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" ></script>
							<svg style="width:0;height:0;">
							<defs>
								<linearGradient id="grad1" x1="0%" y1="30%" x2="50%" y2="0%">
								<stop offset="50%" stop-color="#34a853" />
								<stop offset="50%" stop-color="#4285f4" />
								</linearGradient>
								<linearGradient id="grad2" x1="0%" y1="30%" x2="50%" y2="0%">
								<stop offset="50%" stop-color="#fbbc05" />
								<stop offset="50%" stop-color="#ea4335" />
								</linearGradient>
							</defs>
							</svg>
							<a href="javascript:void(0);" class="form-control google "  >Sign in With Google <i class="fab  fa-google"></i></a>
							<a href="javascript:void(0);" class="form-control facebook"  >Sign in With Facebook <i  class="fab  fa-facebook"></i></a>
							<a href="javascript:void(0);" class="form-control linkedin"  >Sign in With LinkedIn <i  class="fab  fa-linkedin"></i></a>
							<br><h4>or</h4>
							<input type="text" class="form-control border" name="username" id="username" placeholder="User Name" require>
							<div id='username_error'></div>
							<input type="email" class="form-control border" name="email" id="email" placeholder="Your Email" require>
							<div id='email_error'></div>
							<input type="password" class="form-control border" name="password" placeholder="Password" id="password" require>
							<div id='password_error'></div>
							<input type="password" class="form-control border" name="confirm_password" id="confirm_password" placeholder="Confirm Password" require>
							<div id='confirm_password_error'></div>
							<span id='message'></span>
							
						
							<?php
						 if(isset($_SESSION['sign_msg'])){
							?>
							<div class="alert alert-danger">
							  <span><center>
							  <?php echo $_SESSION['sign_msg'];
								unset($_SESSION['sign_msg']); 
							  ?>
							 <a href="javascript:void(0);" class="delete"><i style="float:right;" class="fa fa-times "></i></a>
							 </center></span>
							  </div> <br>
							<?php
						  }
						?>

                       <?php
						 if(isset($_SESSION['forg_pass'])){
							?>
							<div class="alert alert-danger">
							  <span><center>
							  <?php echo $_SESSION['forg_pass'];
								unset($_SESSION['forg_pass']); 
							  ?>
							  <a href="javascript:void(0)" class="delete"><i style="float:right;" class="fa fa-times "></i></a>
							</center></span>
							</div> <br>
							<?php
						  }
						?>

						<button class="form-control btn btn-login" type="submit" name="submit" >Sign Up</button>
						<hr>
							<p>By creating an account, you agree to Lennim's <u style="color:#3671ca;">Terms of Service, Cookie Policy</u> and <u style="color:#3671ca;">Privacy Policy</u>. You consent to receiving marketing messages from lennim and may opt out from receiving such messages by following the unsubscribe link in our messages, or as detailed in our terms.</p>
							</form>
							<span>Have You Account? <a href="login.php"> Login</a></span>
							<span><a href="lost-password.php"> Forget Password</a></span>
							<span><a href=""> Help Center</a></span>	
					
						
                        

					</div>
				</div>
			</section>
			<!-- <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button> -->
			<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
				<button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
				<ul id="styleOptions" title="switch styling">
					<li>
						<a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
					</li>
				</ul>
			</div>
			
			<!-- Scripts
			================================================== -->
			<script type="text/javascript" src="assets/plugins/js/jquery.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/viewportchecker.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootsnav.js"></script>
			<script type="text/javascript" src="assets/plugins/js/select2.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootstrap-wysihtml5.js"></script>
			<script type="text/javascript" src="assets/plugins/js/datedropper.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/dropzone.js"></script>
			<script type="text/javascript" src="assets/plugins/js/loader.js"></script>
			<script type="text/javascript" src="assets/plugins/js/owl.carousel.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/slick.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/gmap3.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
			
			<!-- Custom Js -->
			<script src="assets/js/custom.js"></script>
			<script src="assets/js/jQuery.style.switcher.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}

				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}

				</script>

				<!--Form Validation-->
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
	$("#username").focusout(function(){
		var username=$(this).val();
	if(username==""){ 
	  $("#username_error").html("Username is Required").css('color','red');
	} else {
		$("#username_error").html("");
	}
});

$("#email").focusout(function(){
		var email=$(this).val();
	if(email==""){ 
	  $("#email_error").html("Email is Required").css('color','red');
	} else {
		$("#email_error").html("");
	}
});

$("#password").focusout(function(){
		var password=$(this).val();
	if(password==""){ 
	  $("#password_error").html("Password is Required").css('color','red');
	} else {
		$("#password_error").html("");
	}
});

$("#confirm_password").focusout(function(){
		var confirm_password=$(this).val();
		var password = $("#password").val();
	if(confirm_password==""){ 
	  $("#confirm_password_error").html("Confirm Password is Required").css('color','red');
	} else {
		$("#confirm_password_error").html("");
	}
});


	$("#confirm_password").keyup(checkPasswordMatch);
   function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confirm_password").val();

    if (password != confirmPassword)
        $("#message").html("Passwords do not match!").css('color','red');
    else
        $("#message").html("Passwords match.").css('color','green');
}

					$(".google").click(function(){
						window.location.href='<?php echo $googleURL; ?>';
					});
					$(".facebook").click(function(){
						window.location.href='<?php echo $facebookURL; ?>';
					});

				$(".delete").click(function(){
					$(this).parent().parent().parent(".alert").hide();
				});

});
  </script>
		</div>
	</body>

</html>