<?php

session_start();
include('../dbconfig.php');

//selected the person
$pid=$_POST['pid'];
$pfname=$_POST['fname'];
$plname=$_POST['lname'];
$pemail=$_POST['email'];
$pgender=$_POST['gender'];
$pmobile=$_POST['mobile'];
$paddress=$_POST['address'];

$sql="UPDATE `profile` SET pfname='$pfname',plname='$plname',pemail='$pemail',pgender='$pgender',pmobile='$pmobile',paddress='$paddress' where pid=$pid";

if($conn->query($sql)===true){
  echo "&#10003";
}
?>