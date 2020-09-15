<?php
	include("dbconfig.php");



	if(isset($_POST['search'])){
		$search = $_POST['search'];
	   
		$query = "SELECT * FROM colleages WHERE colleage_name like'".$search."%' ORDER BY colleage_name ASC LIMIT 10";
		$result = mysqli_query($conn,$query);
	   
		$response = array();
		while($row = mysqli_fetch_array($result) ){
			$clg=$row['colleage_name'];
			$str=explode('(',$clg);
			$new_clg=$str[0];
		  $response[] = array("label"=>$new_clg);
		}
	   
		echo json_encode($response);
	   }
	   
	   exit;
?>	

?>	