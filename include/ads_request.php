<?php

include('session.php');
include('../dbconfig.php');
if($pid)
    {
        

//$request_id=$_POST['request_id'];

$sql="SELECT * FROM `company_profile` where company_rpid='$pid'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
$username=$row['company_rpname'];
$phone=$row['company_phone'];
$company=$row['company_name'];
$email=$row['company_email'];
$address=$row['company_address'];



 $sql="INSERT INTO `ads_user` (`username`,`phone`,`address`,`company`,`email`,`created_date`) VALUES('$username','$phone','$address','$company','$email', NOW())";

if($conn->query($sql)===true){
    echo "&#10003";
}
}
    }
?>