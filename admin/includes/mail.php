<?php




function fnSendTeacherLoginMail($name,$email,$username="",$password="")
{
	
	
	$adminemail="livechecking@gmail.com"; 
   
	$companyname = "Vel International Public School";
	$companyurl = "http://velinternationalpublicschool.com/demo";
	
	
	
	

		if($email!="")
		{
				
			//////// ---------- WEBMASTER EMAIL ---------///////////
			
			
			///////////////// ------------------- Thanks Mail ---------- ///////////////

			$to = $email;
			$sub = $companyname.' - Login Details  ' ;
			$headers  = 'From: '.$companyname.' <'.$adminemail.'>' . "\r\n" .
						'Reply-To: '.$companyname.' <'.$adminemail.'>' . "\r\n" .
						'MIME-Version: 1.0' . "\r\n" .
						'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
			
			
			
			
			$tcode = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
										<html xmlns='http://www.w3.org/1999/xhtml'>
										<head>
										
										</head>
										<body style='background:#eee;'>
										
										<center>
										
										<br />
										<br />
										<br />
										<br />
										
										
										<div style='width:650px; height:330px; margin:30px auto 30px auto; background:#fff;
											box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.80);
											-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.80);
											-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.80);'>
										
										
										<a href='".$companyurl."' target='_blank' style='text-decoration:none;'>
										
											<img src='".$companyurl."/images/mail-top.png' />
										
										</a>
										
										
										<div style='margin:10px 0 0 5px; position:absolute; background:none; width:600px; height:270px; text-align:left; float:left;'>
											
											
										<h1 style='	font-family: Verdana, Nunito;
											font-size:14px;
											color:#3781b6;
											text-decoration:none;
											padding: 0 0 0 5px;
											line-height:1.8em;
											margin:0 0 0 15px;'>Dear ".$name.",</h1>
										<br />
										
																	
										<p style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											padding: 0 0 0 5px;
											line-height:1.5em;
											margin:0 0 0 15px;
											color:#222;'>Your account has been created in ".$companyname.". <br /> Login details given below. </p>
										
										
										<br />
										
										
										<table style='	padding: 0 0 0 5px;
											margin:0 0 0 40px; cellspacing:5px; cellpadding:5px;'>
										
										<tr>
										<td style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											color:#222;
											font-weight:bold;' width='150'><b>Username :</b></td>
											<td style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											color:#222;'> ".$username." </td>
										</tr>";
								
								$tcode.="<tr>
									<td style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											color:#222;
											font-weight:bold;' width='150'><b>Password :</b></td>
											<td style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											color:#222;'> ".$password." </td>
										</tr>
										</table>
										<br />
										
										
										
										
										<br />
										<p style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											padding: 0 0 0 5px;
											line-height:1.5em;
											margin:0 0 0 15px;
											color:#222;'>================================================================</p>
										
										<br />
										<p style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											padding: 0 0 0 5px;
											line-height:1.5em;
											margin:0 0 0 15px;
											color:#222;'>With Regards <br /> <a href='".$companyurl."' target='_blank'>".$companyname."</a></p>
										<br />
										
										</div>
										
										<a href='".$companyurl."' target='_blank' style='text-decoration:none;'>
										
											<img src='".$companyurl."/images/mail-bottom.png' />
										
										</a>
										
										
										</div>
										
										
										<br />
										<br />
										<br />
										<br />
										
										
										
										</center>
										
										</body>
										</html>";
				
				
			$mes =  $tcode;
			//echo $mes; die();
			 mail($to, $sub, $mes, $headers);
			  $alert='Yes';
			}
			else
			{
				$allert="No";
			}
			
	return $alert;
}
function fnSendStudentLoginMail($name,$email,$username="",$password="")
{
	
	
	$adminemail="livechecking@gmail.com"; 
   
	$companyname = "Vel International Public School";
	$companyurl = "http://velinternationalpublicschool.com/demo/";
	
	
	
	

		if($email!="")
		{
				
			//////// ---------- WEBMASTER EMAIL ---------///////////
			
			
			///////////////// ------------------- Thanks Mail ---------- ///////////////

			$to = $email;
			$sub = $companyname.' - Student Login Details  ' ;
			$headers  = 'From: '.$companyname.' <'.$adminemail.'>' . "\r\n" .
						'Reply-To: '.$companyname.' <'.$adminemail.'>' . "\r\n" .
						'MIME-Version: 1.0' . "\r\n" .
						'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
			
			
			
			
			$tcode = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
										<html xmlns='http://www.w3.org/1999/xhtml'>
										<head>
										
										</head>
										<body style='background:#eee;'>
										
										<center>
										
										<br />
										<br />
										<br />
										<br />
										
										
										<div style='width:650px; height:330px; margin:30px auto 30px auto; background:#fff;
											box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.80);
											-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.80);
											-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.80);'>
										
										
										<a href='".$companyurl."' target='_blank' style='text-decoration:none;'>
										
											<img src='".$companyurl."/images/mail-top.png' />
										
										</a>
										
										
										<div style='margin:10px 0 0 5px; position:absolute; background:none; width:600px; height:270px; text-align:left; float:left;'>
											
											
										<h1 style='	font-family: Verdana, Nunito;
											font-size:14px;
											color:#3781b6;
											text-decoration:none;
											padding: 0 0 0 5px;
											line-height:1.8em;
											margin:0 0 0 15px;'>Dear ".$name.",</h1>
										<br />
										
																	
										<p style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											padding: 0 0 0 5px;
											line-height:1.5em;
											margin:0 0 0 15px;
											color:#222;'>Your account has been created in ".$companyname.". <br /> Student login details given below. </p>
										
										
										<br />
										
										
										<table style='	padding: 0 0 0 5px;
											margin:0 0 0 40px; cellspacing:5px; cellpadding:5px;'>
										
										<tr>
										<td style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											color:#222;
											font-weight:bold;' width='150'><b>Username :</b></td>
											<td style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											color:#222;'> ".$username." </td>
										</tr>";
								
								$tcode.="<tr>
									<td style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											color:#222;
											font-weight:bold;' width='150'><b>Password :</b></td>
											<td style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											color:#222;'> ".$password." </td>
										</tr>
										</table>
										<br />
										
										
										
										
										<br />
										<p style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											padding: 0 0 0 5px;
											line-height:1.5em;
											margin:0 0 0 15px;
											color:#222;'>================================================================</p>
										
										<br />
										<p style='	font-family: Verdana, Nunito;
											font-size:12px;
											text-decoration:none;
											padding: 0 0 0 5px;
											line-height:1.5em;
											margin:0 0 0 15px;
											color:#222;'>With Regards <br /> <a href='".$companyurl."' target='_blank'>".$companyname."</a></p>
										<br />
										
										</div>
										
										<a href='".$companyurl."' target='_blank' style='text-decoration:none;'>
										
											<img src='".$companyurl."/images/mail-bottom.png' />
										
										</a>
										
										
										</div>
										
										
										<br />
										<br />
										<br />
										<br />
										
										
										
										</center>
										
										</body>
										</html>";
				
				
			$mes =  $tcode;
			//echo $mes; die();
			 mail($to, $sub, $mes, $headers);
			  $alert='Yes';
			}
			else
			{
				$allert="No";
			}
			
	return $alert;
}

?>

