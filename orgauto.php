<?php
	

	include("dbconfig.php");



	if(isset($_POST['search'])){
		$search = $_POST['search'];
	   
		$query = "SELECT * FROM organisation WHERE org_type like'%".$search."%' ORDER BY org_type ASC LIMIT 10";
		$result = mysqli_query($conn,$query);
	   
		$response = array();
		while($row = mysqli_fetch_array($result) ){
		  $response[] = array("label"=>$row['org_type']);
		}
	   
		echo json_encode($response);
	   }
	   
	   exit;
?>	

?>	

?>	
?>	