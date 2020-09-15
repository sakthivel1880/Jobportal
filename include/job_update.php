<?php

session_start();
include('../dbconfig.php');

//selected the person
$pid=$_POST['pid'];
$postid=$_POST['postid'];
$jobp_titlename=$_POST['title'];
$jobp_type=$_POST['type'];
$jobp_duties=$_POST['duties'];
$jobp_description=$_POST['desc'];
$jobp_responsibilities=$_POST['res'];
$jobp_location=$_POST['location'];
$jobp_skills=$_POST['skills'];
$jobp_maxsal=$_POST['maxsal'];
$jobp_minsal_rs=$_POST['minsal_rs'];
$jobp_minsal=$_POST['minsal'];
$jobp_hirepersons=$_POST['hire'];
$jobp_exprience=$_POST['yrs'];
$jobp_link=$_POST['link'];
$jobp_refmail=$_POST['refmail'];

  $sql="UPDATE `job_post` SET jobp_titlename='$jobp_titlename',jobp_type='$jobp_type',
jobp_duties='$jobp_duties',jobp_description='$jobp_description',jobp_responsibilities='$jobp_responsibilities',
jobp_location='$jobp_location',jobp_skills='$jobp_skills',jobp_maxsal='$jobp_maxsal',jobp_cur_code='$jobp_minsal_rs',jobp_minsal='$jobp_minsal',
jobp_hirepersons='$jobp_hirepersons',jobp_exprience='$jobp_exprience',jobp_link='$jobp_link',jobp_refmail='$jobp_refmail' where jobp_id=$postid";

if($conn->query($sql)===true){
  echo "&#10003";
}
?>