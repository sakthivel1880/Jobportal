<?php

include('session.php');
include('../dbconfig.php');

//selected the person
$ed_pid=$_POST['pid'];
$company_name=$_POST['name'];
$company_email=$_POST['email'];
$company_phone=$_POST['phone'];
$company_country=$_POST['country'];
$company_state=$_POST['state'];
$company_city=$_POST['city'];
$company_address=$_POST['address'];
$company_pincode=$_POST['pincode'];

$sql="UPDATE `company_profile` SET company_name='$company_name',company_email='$company_email',company_phone='$company_phone',company_country='$company_country',company_state='$company_state',company_city='$company_city',company_address='$company_address',company_pincode='$company_pincode' where company_rpid='$ed_pid'";

if($conn->query($sql)===true){
  echo "&#10003";
}
?>