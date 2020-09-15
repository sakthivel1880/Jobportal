<?php
	session_start();
	session_destroy();
	if(isset($_COOKIE['email']) and isset($_COOKIE['password'])){
	 $email=$_COOKIE['email'];
     $password=$_COOKIE['password'];
     $pid=$_COOKIE['pid'];
	 $profile=$_COOKIE['profile'];
	 setcookie("email",$email,time()-(3600), "/");
	 setcookie("password",$password,time()-(3600), "/");
	 setcookie("pid",$pid,time()-(3600), "/");
	 setcookie("profile",$profile,time()-(3600), "/");
	}
	header('location:../index.php');
?>