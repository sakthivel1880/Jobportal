<?php
include('dbconfig.php');

session_start();
if(isset($_GET['cid']))
{
	$cid = $_GET['cid'];
	if($cid==1)
	{

	//activate account code	
		if(isset($_GET['pcode']))
		{
		$signup=$_GET['uid'];
		
			$pcode=$_GET['pcode'];

			$query=mysqli_query($conn,"select * from profile where pid='$signup'");
			$row=mysqli_fetch_array($query);

			if($row['code']==$code){
				//activate account
				mysqli_query($conn,"update profile set pmail_status='1' where pid='$signup'");
				header('location:login.php');
				?>
				<p>Account Verified!</p>
				<p><a href="login.php">Login Now</a></p>
				<?php
			}
			else{
				$_SESSION['sign_msg'] = "Something went wrong. Please sign up again.";
		  		header('location:signup.php');
			}
		}
		else{
			header('location:login.php');
		}
	 
		//change password code
		if(isset($_GET['pemail']))
		{
			$pemail=$_GET['pemail'];

			$query=mysqli_query($conn,"select * from profile where pemail='$pemail'");
			$row=mysqli_fetch_array($query);

			if($row['pemail']==$pemail){
				header('location:resetpass.php');
			}
				else{
					$_SESSION['forgt_pass'] = "Something went wrong. Please sign up again.";
					  header('location:signup.php');
				}
				
				
			}
		}

	}

?>