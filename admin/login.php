<?php
session_start();
include 'includes/connections.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		span.error {
    color: red;
    text-align: center;
    margin-left: 175px;
    font-family: Poppins-Regular;
}
	</style>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

					<?php
                    if(isset($_SESSION["log_msg"])){
                        $log_msg = $_SESSION["log_msg"];
                        echo "<span class='error'>$log_msg</span>";
                        unset($_SESSION["log_msg"]);
                    }
                ?> 
				<form class="login100-form validate-form" action="" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>
				
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30" style="display: none;">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
                   
					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn login100" name="submit" value="submit" style="text-align: center;">
					</div>
				</form>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<?php

if(isset($_POST['submit'])){
echo  $username= $_POST['username'];
echo $password= $_POST['password'];


$res=mysqli_query($conn, "SELECT * FROM `admin`");
	$row=mysqli_fetch_array($res);

 echo $_SESSION['username']	= $row['username'];

echo  $_SESSION['password'] = $row['password'];

if($_SESSION['username'] == $username AND $_SESSION['password'] == $password){
	$_SESSION['log_sus']="success";
?>
 <script type="text/javascript"> window.location.href = "index.php";</script>
<?php	
}
else
{

	 $_SESSION['log_msg']="username and password are incorrect.";
	//header('location:index.php');	
}
}
      
?>
</body>
</html>