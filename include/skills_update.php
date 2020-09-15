<?php

session_start();
include('../dbconfig.php');

//selected the person
$pid=$_POST['pid'];
$skills_id=$_POST['skills_id'];
$skills=$_POST['skills'];
$skills_exp=$_POST['skills_exp'];

$sql="SELECT * FROM `profile_skills` where skills_rpid=$pid";
				   $result=mysqli_query($conn,$sql);
				   if (mysqli_num_rows($result)=="") {

          $sql="INSERT INTO `profile_skills` (`skills_rpid`,`skills`,`skills_exp`,`posted_date`) VALUES('$pid','$skills','$skills_exp',NOW()) ";
           
            if($conn->query($sql)===true){
              echo "&#10003";
            } 

           } else {

            $sql="UPDATE `profile_skills` SET skills='$skills',skills_exp='$skills_exp' where skills_id=$skills_id and skills_rpid=$pid";

            if($conn->query($sql)===true){
              echo "&#10003";
            } 

           }
?>