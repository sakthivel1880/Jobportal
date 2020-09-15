<?php
		session_start();
	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '489389348306897',
		'app_secret' => 'f0cb6fa365aeb262d56bb027292e1a5e',
		'default_graph_version' => 'v4.0'
	]);

	$helper = $FB->getRedirectLoginHelper();

	$loginUrl = $helper->getLoginUrl('https://www.shanjos.com/lennim/fb-login.php');
   
?>