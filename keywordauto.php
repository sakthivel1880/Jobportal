<?php
	include("dbconfig.php");

	if(isset($_POST['search'])){
		$search = $_POST['search'];
	   
		$query = "SELECT jt_name FROM job_title WHERE jt_name like'".$search."%' 
		 UNION SELECT skill_name FROM skills WHERE  skill_name like '".$search."%' LIMIT 10" ;
		$result = mysqli_query($conn,$query);
	   
		$response = array();
		while($row = mysqli_fetch_array($result) ){
		  $response[] = array("label"=>$row['jt_name']);
		}
	   
		echo json_encode($response);
	   }
	   
	   exit;
?>	