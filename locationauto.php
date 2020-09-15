<?php
	include("dbconfig.php");



	if(isset($_POST['search'])){
		$search = $_POST['search'];
	   
		$query = "SELECT * FROM city WHERE ctname like'".$search."%' ORDER BY ctname ASC LIMIT 10";
		$result = mysqli_query($conn,$query);
	   
		$response = array();
		while($row = mysqli_fetch_array($result) ){
		  $response[] = array("label"=>$row['ctname']);
		}
	   
		echo json_encode($response);
	   }
	   
	   exit;
?>	