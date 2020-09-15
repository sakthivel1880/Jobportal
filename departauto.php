<?php

	include("dbconfig.php");



	if(isset($_POST['search'])){
		$search = $_POST['search'];
	   
		$query = "SELECT * FROM department WHERE depart_name like'".$search."%' ORDER BY depart_name ASC LIMIT 10";
		$result = mysqli_query($conn,$query);
	   
		$response = array();
		while($row = mysqli_fetch_array($result) ){
		  $response[] = array("label"=>$row['depart_name']);
		}
	   
		echo json_encode($response);
	   }
	   
	   exit;
?>	

	

