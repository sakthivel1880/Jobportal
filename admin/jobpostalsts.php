<?php

include 'includes/connections.php';

if(isset($_GET['Disbale'])){
		 $id = $_GET['Disbale'];
		 $sql = "UPDATE `job_post` SET `active_status`='2' WHERE `jobp_id` = '$id'";
		 $result = mysqli_query($conn, $sql);
		 if($result == true){
		 	header('location:viewjobpost.php');
		 }else {
		 	echo "Not update";
		 }
}


if(isset($_GET['Enable'])){
		 $id = $_GET['Enable'];
		 $sql = "UPDATE `job_post` SET `active_status`='0' WHERE `jobp_id` = '$id'";
		 $result = mysqli_query($conn, $sql);
		 if($result == true){
		 	header('location:viewjobpost.php');
		 } else {
		 	echo "Not update";
		 }
}


?>