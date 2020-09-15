<?php

  include('dbconfig.php');
  include('include/session.php');

    if(isset($pid))
    {
       
        $sql ="SELECT * FROM profile WHERE pid=$pid";
		$result = mysqli_query($conn, $sql);
		for($i=0; $row= mysqli_fetch_assoc($result);$i++ ) {
        
      if($row['company_status']==1) { 
      header('location:company_overview.php');
       } else {
        header('location:company.php');
     } 
        
    }
  }
    ?> 