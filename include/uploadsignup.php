<?php

include('../dbconfig.php');

session_start();

//signup

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	function check_input($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
    }
    
    $pusername=mysqli_real_escape_string($conn,$_POST['username']);
	$pemail=mysqli_real_escape_string($conn,check_input($_POST['email']));
    $ppassword=mysqli_real_escape_string($conn,md5(check_input($_POST['password'])));
    
    if (!filter_var($pemail, FILTER_VALIDATE_EMAIL))
	{
			$_SESSION['sign_msg'] = "Invalid email format";
			header('location:../signup.php');
    }
    else
	{

		$query=$conn->query("select * from profile where pemail='$pemail'");
		if($query->num_rows>0)
		{
			$_SESSION['sign_msg'] = "Email already taken";
			header('location:../signup.php');
        }
        else
		{
			//depends on how you set your verification code
			$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $pcode=substr(str_shuffle($set), 0, 12);
            
           $sql = "INSERT INTO `profile` (`pcode`, `pusername`, `pemail`, `ppassword`, `pcreate_date` )
            VALUES ('$pcode', '$pusername', '$pemail', '$ppassword',  NOW())";
          
            if($conn->query($sql) === TRUE)
			{
				$uid= $conn->insert_id;
				$no = "P000".$uid;

				$sqll = "UPDATE `profile` SET `p_no`= '$no' WHERE `pid`='$uid'";
			   if($conn->query($sqll) === TRUE)
                {

                    require '../vendor/autoload.php';

                    $mail = new PHPMailer;
                    try {
                    $mail->isSMTP();
                    $mail->SMTPDebug = 0;
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
                    $mail->Username='sakthisakthi380@gmail.com';
                    $mail->Password='sakthivel@17';
                    $mail->setFrom('sakthisakthi380@gmail.com','sakthi');
                    $mail->addAddress($pemail);
                    $mail->addReplyTo($pemail);
                    $mail->isHTML(true);
                    $mail->Subject='Activate Your Account';
                    $mail->Body="
                                    <html>
									<head>
										<title>Verification link</title>
									</head>
									<body>
										<h2>Thank you for Registering.</h2>
										<p>Your Account:</p>
										<p>Email: ".$pemail."</p>
										<p>Password: ".$_POST['password']."</p>
										<p>Please click the link below to activate your account.</p>
                                       <a href='localhost/jobportal/activate.php?cid=1&uid=$uid&pcode=$pcode'>Activate My Account</a>
                                       </body>
								    </html>";

                    $mail->send();
                            echo 'Message has been sent';
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
 

					$_SESSION['sign_msg'] = "Create Customer Account Sucessfully And Send Verification Link Send Your Mail Go And Verify.";
			  		
                    header('location:../login.php');
                }
             }
         }
    }
}







?>