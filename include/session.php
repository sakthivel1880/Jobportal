<?php

session_start();
if(isset($_COOKIE['email']) and isset($_COOKIE['password'])){
    $email=$_COOKIE['email'];
     $password=$_COOKIE['password'];
     $pid=$_COOKIE['pid'];
     $profile=$_COOKIE['profile'];
     
 } else if(isset($_SESSION['pid'])){
    $pid=$_SESSION['pid'];
   // $profile=$_SESSION['pr'];
 } elseif (isset($_SESSION['access_token'])) {
  $pid=$_SESSION['pid'];
//  $profile= $_SESSION['pr'];
 } 

?>