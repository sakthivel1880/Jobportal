<?php
include 'includes/connections.php';


 $username= $_POST['username'];
 $password= $_POST['password'];


 $res="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password' "; 
 $result=mysqli_query($conn,$res);
	//$row=mysqli_fetch_array($res);

//  echo $_SESSION['username']	= $row['username'];

// echo  $_SESSION['password'] = $row['password'];

if($result == true){
	$_SESSION['log_sus']="success";
header('location:index.php'); 
}

else
{

 $_SESSION['log_msg']="username and password are incorrect.";
	header('location:login.php');	
	
	
} 
      
?>