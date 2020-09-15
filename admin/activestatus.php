<?php
//include("inc/header.php");
include 'includes/connections.php';
$arra=array();
 $id = $_POST["deleteadsid"]; 
 $sql = "UPDATE `ads` SET `active_status`= 1 WHERE ads_id ='$id'"; 
 if(mysqli_query($conn, $sql)) 
 { 
 $arra["sts"]="1"; 
  echo json_encode($arra);

 } else{
$arra["sts"]="0" ;
 }
 


?>