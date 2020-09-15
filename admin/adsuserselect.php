

<?php

// if(isset($_POST['ads_user_id'])){

include 'includes/connections.php';
$arra = array();

$sql = "SELECT * FROM `ads` WHERE `ads_user_id` = 24 AND `active_status` = 1";
$result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
     	$array = array();

    while($row = mysqli_fetch_assoc($result)) {
    	
          $ads_title = $row["ads_title"];
         $ads_id = $row["ads_id"];

        $array["ads_title"] =$ads_title;
        array_push($arra, $array);
   }
   echo json_encode($arra);

  }
 // }
      ?> 
