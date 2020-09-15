<?php

session_start();
include('../dbconfig.php');

//selected the person
$pid=$_POST['pid'];
$postid=$_POST['postid'];

echo $sql="UPDATE `job_post` SET active_status='1' where jobp_id='$postid' " ;



if($conn->query($sql)===true){
  echo "&#10003";
}
?>