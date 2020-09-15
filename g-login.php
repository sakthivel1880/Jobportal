<?php
include('dbconfig.php');
	require_once "config.php";

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: login.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
    $userData = $oAuth->userinfo_v2_me->get();

	$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$pcode=substr(str_shuffle($set), 0, 12);

    $id = $userData['id'];
    $pemail = $userData['email'];
    $pgender = $userData['gender'];
    $ppicture = $userData['picture'];
	$pusername_2 = $userData['familyName'];
	$pusername = $userData['givenName'];

	$query=mysqli_query($conn,"select * from profile where pemail='$pemail'");

	if(mysqli_num_rows($query)==0)
	{

	$sql = "INSERT INTO `profile` (`pcode`, `pusername`, `pemail`,`pmail_status`, `pcreate_date` )
	VALUES ('$pcode', '$pusername', '$pemail','1', NOW())";
	$result=mysqli_query($conn,$sql);
	if($result==TRUE){
		$last_id=$conn->insert_id;
		session_start();
                $_SESSION['pid']=$last_id;
                $_SESSION['pr']='profile';
                header('location:index.php');
	}

	} else {
		$row=mysqli_fetch_array($query);
		session_start();
                $_SESSION['pid']=$row['pid'];
                $_SESSION['pr']='profile';
                header('location:index.php');
	}
	

	//header('Location: index.php');
	exit();
?>