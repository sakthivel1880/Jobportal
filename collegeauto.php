<?php
	require_once 'dbconfig.php';
	
	$search = $_GET['term'];
	
	$query = $conn->query("SELECT * FROM `job_post` WHERE `jobp_location` LIKE '".$search."%' ORDER BY `jobp_location` ASC") or die(mysqli_connect_errno());
	
	$list = array();
	$rows = $query->num_rows;
	
	if($rows > 0){
		while($fetch = $query->fetch_assoc()){
			$data['value'] = $fetch['jobp_location']; 
			array_push($list, $data);
		}
	}
	
	echo json_encode($list);
?>