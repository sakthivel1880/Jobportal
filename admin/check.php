	<?php

include 'includes/connections.php';

if(isset($_POST['submit'])){
 $username= $_POST['username'];
$password= $_POST['password'];


$res=mysqli_query($conn, "SELECT * FROM `admin`");
	$row=mysqli_fetch_array($res);

  $_SESSION['username']	= $row['username'];

 $_SESSION['password'] = $row['password'];

if($_SESSION['username'] == $username && $_SESSION['password'] == $password){

	header('location:dashboard.php');
}
else{

	$_SESSION['log_msg']="username and password are incorrect.";
	header('location:index.php');
}
}
      
?>
</body>
</html>