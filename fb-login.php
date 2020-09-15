<?php
include('dbconfig.php');

	require_once "facebook_config.php";

	try {
		$accessToken = $helper->getAccessToken();
	} catch (\Facebook\Exceptions\FacebookResponseException $e) {
		echo "Response Exception: " . $e->getMessage();
		exit();
	} catch (\Facebook\Exceptions\FacebookSDKException $e) {
		echo "SDK Exception: " . $e->getMessage();
		exit();
	}

	if (!$accessToken) {
		header('Location: login.php');
		exit();
	}

	$oAuth2Client = $FB->getOAuth2Client();
	if (!$accessToken->isLongLived())
		$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

	$response = $FB->get("/me?fields=id, first_name, last_name, email, picture.type(large)", $accessToken);
	$userData = $response->getGraphNode()->asArray();
	$_SESSION['userData'] = $userData;
    $_SESSION['access_token'] = (string) $accessToken;

    $ppicture=$_SESSION['userData']['picture']['url'];
    $id= $_SESSION['userData']['id'];
    $pusername= $_SESSION['userData']['first_name'];
    $plast=$_SESSION['userData']['last_name'];
    $pemail=$_SESSION['userData']['email'];

    $query=mysqli_query($conn,"select * from profile where pemail='$pemail'");

	if(mysqli_num_rows($query)==0)
	{

		$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
         $pcode=substr(str_shuffle($set), 0, 12);

	$sql = "INSERT INTO `profile` (`pcode`, `pusername`, `pemail`,`pmail_status`, `pcreate_date` )
	VALUES ('$pcode', '$pusername', '$pemail','1', NOW())";
	$result=mysqli_query($conn,$sql);
	if($result==TRUE){
		$last_id=$conn->insert_id;
		$no = "P000".$uid;

		$sqll = "UPDATE `profile` SET `p_no`= '$no' WHERE `pid`='$uid'";
		if($conn->query($sqll) === TRUE)
                {
		session_start();
                $_SESSION['pid']=$last_id;
                $_SESSION['pr']='profile';
                header('location:index.php');
	}
}

	} else {
		$row=mysqli_fetch_array($query);
		session_start();
                $_SESSION['pid']=$row['pid'];
                $_SESSION['pr']='profile';
                header('location:index.php');
    }
    
	// header('Location: index.php');
	exit();
?>