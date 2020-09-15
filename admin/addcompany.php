<?php

include 'includes/connections.php';



if(isset($_POST['submit'])){


   $company_name = $_POST['company_name'];
  $company_email = $_POST['company_email'];
  $company_phone = $_POST['company_phone'];
  $company_country = $_POST['company_country'];
  $company_state = $_POST['company_state']; 
  $company_city = $_POST['company_city'];
  $company_address = $_POST['company_address'];
  $company_desc = $_POST['company_desc'];
  $company_pincode = $_POST['company_pincode'];
  $company_rpid = $_POST['company_rpid'];
 







$sql = "INSERT INTO `company_profile` ( `company_name`, `company_email`, `company_phone`, `company_country`, `company_state`, `company_city`, `company_description`,`company_address`, `company_pincode`, `company_rpname`, `company_rpid`, `cemail_status`, `cphone_status`, `status`, `create_date`,`entry_type`) VALUES 

( '$company_name', '$company_email', '$company_phone', '$company_country', '$company_state', '$company_city', '$company_desc','$company_address', '$company_pincode', (select pusername from `profile` where `pid` ='$company_rpid'), '$company_rpid', '1', '1', '1', NOW(),'1')";

if ($conn->query($sql) === TRUE) {
header('location:viewcompanydetails.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}



?>