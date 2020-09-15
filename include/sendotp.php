<?php
 session_start();
if(isset($_POST) && isset($_POST['txt1']))
{
    
}

switch ($_POST["action"]) {
    case "send_otp":

       
        $generator = "8975642310";
    	
    	$result = ""; 
    	for ($i = 1; $i < 5; $i++) { 
    		$result = substr($generator, (rand()%(strlen($generator))), 1); 
    	} 
        $otp = rand(1000, 9999);
        $_SESSION['session_otp'] = $otp;
   /*     	// Authorisation details.
	$username = "shanjostech@gmail.com";
    	$hash = "38421c57de870d8e5bc330c9cd40c1b9f92424b800c56b92ef71ad194bc719a7";
    
    	// Config variables. Consult http://api.textlocal.in/docs for more info.
    	$test = "0";
    
    	// Data for text message. This is the text message data.
    	$sender = "TXTLCL"; // This is who the message appears to be from.
    	$number = "91".$_POST['txt1']; // A single number or a comma-seperated list of numbers
    	
    	// 612 chars or less
    	// A single number or a comma-seperated list of numbers
    	$message = urlencode($message);
    	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;*/
    		$apiKey = urlencode('nzxHdDTE+u0-TCBME7iv9znoDdwlUHGshBi3EghEN6');
	
	// Message details
	$number = "91".$_POST['txt1'];
	$numbers = array($number);
	$sender = urlencode('TXTLCL');
	$mess = "This is your otp.".$otp;
	$message = rawurlencode($mess);
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
    	$ch = curl_init('http://api.textlocal.in/send/?');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$result = curl_exec($ch); // This is the result from the API
    	curl_close($ch);
    
        echo $result;
        break;

    case "verify_otp":
                $otp = $_POST['txt1'];
                
                if ($otp == $_SESSION['session_otp']) {
                   echo "1";
                 
                     unset($_SESSION['session_otp']);
                } else {
                    echo "0";
                }
                break;
        }
 
?>