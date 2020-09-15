<?php
	
include 'includes/connections.php';
	//This For Skills 
	$keyword = $_POST['data'];	
	$sql = mysqli_query($conn,"SELECT * FROM skills WHERE skill_name like '".$keyword."%'");
	
	if(mysqli_num_rows($sql))
	{		
		echo '<ul class="list" >';
		while($row = mysqli_fetch_array($sql))
		{					
			$skill_name = strtolower($row['skill_name']);
			$start = strpos($skill_name,$keyword); 
			$end   = similar_text($skill_name,$keyword); 
			$last = substr($skill_name,$end,strlen($skill_name));
			$first = substr($skill_name,$start,$end);
			
			$final = '<span class="bold">'.$first.'</span>'.$last;
		
			echo '<li><a href=\'javascript:void(0);\'>'.$final.'</a></li>';
		}
		echo "</ul>";
	}
	// else
	// 	echo "<br>not found";


?>	