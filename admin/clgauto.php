<?php
include 'includes/connections.php';

	$keyword = $_POST['data'];	
	$sql = mysqli_query($conn,"SELECT * FROM colleages WHERE colleage_name like '".$keyword."%'");
	
	if(mysqli_num_rows($sql))
	{		
		echo '<ul class="list" >';
		while($row = mysqli_fetch_array($sql))
		{					
			$colleage_name = strtolower($row['colleage_name']);
			$start = strpos($colleage_name,$keyword); 
			$end   = similar_text($colleage_name,$keyword); 
			$last = substr($colleage_name,$end,strlen($colleage_name));
			$first = substr($colleage_name,$start,$end);
			
			$final = '<span class="bold">'.$first.'</span>'.$last;
		
			echo '<li><a href=\'javascript:void(0);\'>'.$final.'</a></li>';
		}
		echo "</ul>";
	}
	// else
	// 	echo "<br>not found";

?>	