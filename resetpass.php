<?php
  session_start();
  include('dbconfig.php');
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
    
	</head>
	<body class="simple-bg-screen" style="background-image:url(assets/img/banner-10.jpg);">
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Title Header Start -->
			<section class="lost-ps-screen-sec">
				<div class="container">
					<div class="lost-ps-screen">
					<?php 
                    $sql="SELECT * FROM `logo` order by logo_id limit 1 ";
                    $result=mysqli_query($conn,$sql);
                    for($i=0;$row=mysqli_fetch_assoc($result);$i++){
                        ?>
						<a href="index.php"><img src="admin/logo/<?php echo $row['logo']?>" class="img-responsive" alt=""></a>
						<?php } ?>
						<form action="include/resetupdate.php" method="post">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email" required>
							<div id='email_error'></div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your New Pasword" required>
							<div id='password_error'></div>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Your Pasword" required>
                            <div id='confirm_password_error'></div><span id='message'></span>
                            <button class="btn btn-login" type="submit" id="submit" name="submit">Submit</button>
                        </form>
                        
						
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
           
		  <!-- Form Validation--> 
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function () {
  $("#email").focusout(email);
  function email(){
	var email = $("#email").val();
	if(email=="")
		$("#email_error").html("Email is Required").css('color','red');
  }
  $("#password").focusout(password);
  function password(){
	var password = $("#password").val();
	if(password=="")
		$("#password_error").html("Password is Required").css('color','red');
  }
  $("#confirm_password").focusout(confirmpassword);
  function confirmpassword(){
	var confirm_password = $("#confirm_password").val();
	
	if(confirm_password=="")
		$("#confirm_password_error").html("ConfirmPassword is Required").css('color','red');
	
  }

   $("#confirm_password").keyup(checkPasswordMatch);
   function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confirm_password").val();

    if (password != confirmPassword)
        $("#message").html("Passwords do not match!").css('color','red');
    else
        $("#message").html("Passwords match.").css('color','green');
}
});
</script>
		</div>
	</body>

</html>