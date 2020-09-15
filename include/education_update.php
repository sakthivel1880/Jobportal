<?php

session_start();
include('../dbconfig.php');

//selected the person
$pid=$_POST['pid'];
$edu_degree=$_POST['degree'];
$edu_dept=$_POST['dept'];
$edu_ins=$_POST['institude'];
$edu_pass=$_POST['pass'];

$sql="SELECT * FROM `profile_educ` where edu_rpid=$pid";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)=="") {
  $sql="INSERT INTO `profile_educ` (`edu_rpid`,`edu_degree`,`edu_dept`,`edu_ins`,`edu_pass`,`posted_date`) VALUES ('$pid','$edu_degree','$edu_dept','$edu_ins','$edu_pass',NOW()) ";
 
  if($conn->query($sql)===true){
   echo "&#10003";
 }

}
else {
 

$sql="UPDATE `profile_educ` SET edu_degree='$edu_degree',edu_dept='$edu_dept',edu_ins='$edu_ins',edu_pass='$edu_pass' where edu_rpid=$pid";

if($conn->query($sql)===true){
  echo "&#10003";
}
}
?>