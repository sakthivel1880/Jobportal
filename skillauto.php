<?php

	include("dbconfig.php");



	if(isset($_POST['search'])){
		$search = $_POST['search'];
	   
		$query = "SELECT * FROM skills WHERE skill_name like'%".$search."%' ORDER BY skill_name ASC LIMIT 10";
		$result = mysqli_query($conn,$query);
	   
		$response = array();
		while($row = mysqli_fetch_array($result) ){
		  $response[] = array("label"=>$row['skill_name']);
		}
	   
		echo json_encode($response);
	   }
	   
	   exit;
?>	

?>	

?>	