<?php

session_start();
include('../dbconfig.php');

//selected the person
$pid=$_POST['pid'];
$skills_id=$_POST['skills_id'];
$skills=$_POST['skills'];
$skills_exp=$_POST['skills_exp'];

 $sql="DELETE FROM `profile_skills` where skills_id=$skills_id and skills_rpid=$pid";

if($conn->query($sql)===true){
  echo "&#10003";
}
?>