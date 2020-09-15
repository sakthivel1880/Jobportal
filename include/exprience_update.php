<?php

session_start();
include('../dbconfig.php');

//selected the person
$pid=$_POST['pid'];
$exp_compname=$_POST['company'];
$exp_yrs =$_POST['years'];
$exp_months=$_POST['months'];
$exp_depart=$_POST['department'];
$exp_orgtype=$_POST['org'];
$exp_sal_lakhs=$_POST['lakhs'];
$exp_sal_thousands=$_POST['thousands'];

$sql="SELECT * FROM `profile_exp` where exp_rpid=$pid";
					$result=mysqli_query($conn,$sql);
					if (mysqli_num_rows($result)==""){

            $sql="INSERT INTO `profile_exp` (`exp_rpid`,`exp_compname`,`exp_yrs`,`exp_months`,`exp_depart`,`exp_orgtype`,`exp_sal_lakhs`,`exp_sal_thousands`,`posted_date`) VALUES('$pid','$exp_compname','$exp_yrs','$exp_months','$exp_depart','$exp_orgtype','$exp_sal_lakhs','$exp_sal_thousands',NOW()) ";
            
            if($conn->query($sql)===true){
              echo "&#10003";
            }
          }
else {
$sql="UPDATE `profile_exp` SET exp_compname='$exp_compname',exp_yrs ='$exp_yrs ',exp_months='$exp_months',exp_depart ='$exp_depart ',exp_orgtype='$exp_orgtype',exp_sal_lakhs='$exp_sal_lakhs',exp_sal_thousands='$exp_sal_thousands' where exp_rpid=$pid";

if($conn->query($sql)===true){
  echo "&#10003";
}
}
?>