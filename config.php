<?php
	
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("918707700525-f4143eqblum5921k30k3lgqg32uoq2os.apps.googleusercontent.com");
	$gClient->setClientSecret("5IxWxjDiieSz2YY27rVX7W5z");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/jobportal/g-login.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
