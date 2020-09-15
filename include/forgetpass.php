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

    if (!filter_var($pemail, FILTER_VALIDATE_EMAIL))
	{
			$_SESSION['forg_pass'] = "Invalid email format";
			header('location:../signup.php');
    }
    else
	{
        
		$query=$conn->query("select * from profile where pemail='$pemail'");
		if($query->num_rows>0)
		{

require '../vendor/autoload.php';

$mail = new PHPMailer;
try {
$mail->isSMTP();
//$mail->SMTPDebug = 0;
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='youremail@gmail.com';
$mail->Password='yourpass';
$mail->setFrom('youremail@gmail.com','yourname');
$mail->addAddress($pemail);
$mail->addReplyTo($pemail);
$mail->isHTML(true);
$mail->Subject='Reset Your Password';
$mail->Body="
                <html>
                <head>
                    <title>Verification link</title>
                </head>
                <body>
                    <p>Change Your Password:</p>
                    <p>Email: ".$pemail."</p>
                    <p>Please click the link below to change your password.</p>
                   <a href='localhost/jobportal/activate.php?cid=1&pemail=$pemail'>Reset Your Password</a>
                   </body>
                </html>";

$mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


$_SESSION['forg_pass'] = "Check your mail and then change your password there.";
  
header('location:../login.php');
}
else
{
    $_SESSION['forg_pass'] = "Email Not Found";
    header('location:../signup.php');
}
    }
}
?>
