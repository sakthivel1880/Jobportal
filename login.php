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
		.google{
			border: 2px solid #3671ca;
			color:#3671ca;
			font-size: 16px;
			text-align: center;
			padding: 10px;
		}
		.facebook{
			border: 2px solid #3671ca;
			color:#3671ca;
			font-size: 16px;
			text-align: center;
			padding: 10px;
		}
		.linkedin{
			border: 2px solid #3671ca;
			color:#3671ca;
			font-size: 16px;
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
		.login-screen .google{
			border-radius: 50px;
		}
		.login-screen .facebook{
			border-radius: 50px;
		}
		.login-screen .linkedin{
			border-radius: 50px;
		}
		</style>
		
	</head>
	<body class="simple-bg-screen" style="background-image:url(assets/img/banner-10.jpg);">
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Title Header Start -->
			<section class="login-screen-sec">
				<div class="container">
					<div class="login-screen">
					<?php 
                    $sql="SELECT * FROM `logo` order by logo_id limit 1 ";
                    $result=mysqli_query($conn,$sql);
                    for($i=0;$row=mysqli_fetch_assoc($result);$i++){
                        ?>
						<a href="index.php"><img src="admin/logo/<?php echo $row['logo']?>" class="img-responsive height" alt=""></a>
						<?php } ?>
					<form action="include/stu_login.php" method="post" id="frm">
						<h3 style="text-align:center;color:#3671ca">LOGIN </h3><br>
							<input type="email" class="form-control" placeholder="Enter Your Email" name="email" value="<?php if(isset($_COOKIE['email'])) { echo $_COOKIE['email']; } ?>" require>
							<input type="password" class="form-control password" placeholder="Password" name="password" psswd-shown="false" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" require>
							<a href="javascript:void(0);" class="pass_sh" style="float:right;color:#3671ca;"><u class="shown">Show Password</u></a><br>
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
							</div><br>
							
                        <?php
                        }else{}
                            if(isset($_SESSION['log_msg'])){
                              ?>
                              
                              <div class="alert alert-danger">
                                <span><center>
                                <?php echo $_SESSION['log_msg'];
                                  unset($_SESSION['log_msg']); 
								?>
								<a href="javascript:void(0);" class="delete"><i style="float:right;" class="fa fa-times "></i></a>
                                </center></span>
                              </div><br>
                             
						  <?php
						  }else{}
						 if(isset($_SESSION['forg_pass'])){
							?>
							<div class="alert alert-danger">
							  <span><center>
							  <?php echo $_SESSION['forg_pass'];
								unset($_SESSION['forg_pass']); 
							  ?>
							  <a href="javascript:void(0);" class="delete"><i style="float:right;" class="fa fa-times "></i></a>
							  </center></span>
							</div><br>
							
						 <?php
						  }else{}
						 if(isset($_SESSION['res_msg'])){
							?>
							<div class="alert alert-danger">
							  <span><center>
							  <?php echo $_SESSION['res_msg'];
								unset($_SESSION['res_msg']); 
							  ?>
							  <a href="javascript:void(0);" class="delete"><i style="float:right;" class="fa fa-times "></i></a>
							  </center></span>
							</div><br>
							<?php
						  } else{}
							if(isset($_SESSION['must'])){
						?>
							<div class="alert alert-danger">
							  <span><center>
							  <?php echo $_SESSION['must'];
								unset($_SESSION['must']); 
							  ?>
							  <a href="javascript:void(0);" class="delete"><i style="float:right;" class="fa fa-times "></i></a>
							  </center></span>
							</div><br>
							<?php
						  } ?>

						<input type="checkbox" name="remember" <?php if(isset($_COOKIE['password'])) { ?> checked <?php } ?>> &nbsp &nbsp &nbsp Keep me signed in on this device
							<br>
							<br>
							<button class="form-control btn btn-login" type="submit">Login</button>
							<br><h4>or</h4>
							
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
							<a href="javascript:void(0);" class="form-control google " >Sign in With Google <i class="fab  fa-google"></i></a>
							<a href="javascript:void(0);" class="form-control facebook"  >Sign in With Facebook <i  class="fab  fa-facebook"></i></a>
							<a href="javascript:void(0);" class="form-control linkedin"  >Sign in With LinkedIn <i  class="fab  fa-linkedin"></i></a>
							<hr>
							<p>By logging in to your account, you agree to Lennim's<u style="color:#3671ca;"> Terms of Service</u> and consent to our <u style="color:#3671ca;">Cookie Policy</u> and <u style="color:#3671ca;">Privacy Policy</u>.</p>
						</form>
						<span>You Have No Account? <a href="signup.php"> Create An Account</a></span>
							<span><a href="lost-password.php"> Forget Password</a></span>
					</div>
				</div>
			</section>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
			<script type="text/javascript">
				$(document).ready(function(){
					$(".google").click(function(){
						window.location.href='<?php echo $googleURL; ?>';
					});
					$(".facebook").click(function(){
						window.location.href='<?php echo $facebookURL; ?>';
					});
					$(".delete").click(function(){
					$(this).parent().parent().parent(".alert").hide();
				});

				$(".pass_sh").click(function(){
					if($('.password').attr('psswd-shown') === 'false'){
						$(".password").removeAttr('type');
						$(".password").attr('type','text');

						$(".password").removeAttr("psswd-shown");
						$(".password").attr('psswd-shown','true');

						$("u.shown").text("Hide Password");
						

					} else {
						$(".password").removeAttr('type');
						$(".password").attr('type','password');

						$(".password").removeAttr("psswd-shown");
						$(".password").attr('psswd-shown','false');

						$("u.shown").text("Show Password");
					}
				});
					});
					</script>
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
		</div>
	</body>

</html>