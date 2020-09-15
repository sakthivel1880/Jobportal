<?php
require '../dbconfig.php';
require '../vendor/autoload.php';

   $frmail=$_POST['frmail'];
   $tomail=$_POST['tomail'];
   $name=$_POST['name'];
   $msg=$_POST['msg'];
   $mobile=$_POST['mobile'];
   $content="content";

    

     $mail = new PHPMailer;
     try {
     $mail->isSMTP();
     $mail->SMTPDebug = 0;
     $mail->Host='smtp.gmail.com';
     $mail->Port=587;
     $mail->SMTPAuth=true;
     $mail->SMTPSecure='tls';
     $mail->Username=$frmail;
    // $mail->Password='sakthivel@17';
     $mail->setFrom($frmail,'Interview');
     $mail->addAddress($tomail);
     $mail->addReplyTo($tomail);
     $mail->isHTML(true);
     $mail->Subject="For Interview";
     $mail->Body=" <html>
                    <head>
                        <title>Interview</title>
                    </head>
                    <body>
                    <h2>".$name."</h2>
                    <p>".$msg."</p>
                    <br><br>
                    <p>Contact Number:".$mobile."&nbsp&nbsp&nbsp".$frmail."</p>
                    </body>
					   </html> 
                    ";

     $mail->send();
             echo 'Message has been sent';
         } catch (Exception $e) {
             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         }

         $apiKey = urlencode('nzxHdDTE+u0-TCBME7iv9znoDdwlUHGshBi3EghEN6');
         $number = "91".$_POST['mobile'];
         $numbers = array($number);
         $sender = urlencode('TXTLCL');
         $mess = $msg;
         $message = rawurlencode($mess);
         
         $numbers = implode(',', $numbers);

         $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
    	$ch = curl_init('http://api.textlocal.in/send/?');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$result = curl_exec($ch); // This is the result from the API
    	curl_close($ch);
    
        //echo $result;
 
 

?>