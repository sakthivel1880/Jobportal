<?php

session_start();
include('../dbconfig.php');

//selected the person
$pid=$_POST['pid'];
$skills=$_POST['skills_add'];
$skills_exp=$_POST['skills_add__exp'];

 $sql="INSERT INTO `profile_skills` (`skills_rpid`,`skills`,`skills_exp`,`posted_date`) VALUES ('$pid','$skills','$skills_exp',NOW())";

if($conn->query($sql)===true){
  echo "&#10003";
}
?>