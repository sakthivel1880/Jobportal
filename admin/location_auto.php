<?php
	
include 'includes/connections.php';
	//This For Skills 
	$keyword = $_POST['data'];	
	$sql = mysqli_query($conn,"SELECT * FROM city WHERE ctname like '".$keyword."%'");
	
	if(mysqli_num_rows($sql))
	{		
		echo '<ul class="list" >';
		while($row = mysqli_fetch_array($sql))
		{					
			$ctname = strtolower($row['ctname']);
			$start = strpos($ctname,$keyword); 
			$end   = similar_text($ctname,$keyword); 
			$last = substr($ctname,$end,strlen($ctname));
			$first = substr($ctname,$start,$end);
			
			$final = '<span class="bold">'.$first.'</span>'.$last;
		
			echo '<li><a href=\'javascript:void(0);\'>'.$final.'</a></li>';
		}
		echo "</ul>";
	}
	// else
	// 	echo "<br>not found";


?>	