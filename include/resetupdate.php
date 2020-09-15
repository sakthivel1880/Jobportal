<?php include("../dbconfig.php");

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	function check_input($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
    }
    $pemail=mysqli_real_escape_string($conn,check_input($_POST['email']));
    $ppassword=mysqli_real_escape_string($conn,md5(check_input($_POST['password'])));

    if (!filter_var($pemail, FILTER_VALIDATE_EMAIL))
	{
			$_SESSION['sign_msg'] = "Invalid email format";
			header('location:../signup.php');
    }
    else
	{
   $sql="UPDATE profile SET ppassword='$ppassword' where pemail='$pemail' and pmail_status=1";

        if ($conn->query($sql) === TRUE) {

            $_SESSION['res_msg'] = "Password Changed Successfully Please Login Here.";
            header('location:../login.php');
        }
        else {

          $_SESSION['res_msg'] = "User not found";
           header('location:../signup.php');
        }
    }
}
?>        