<?php


include 'includes/connections.php';
include_once("inc/header.php");

if(isset($_GET['Enable'])){
     echo  $ads_user_id = $_GET['Enable'];
     
     $sql = "UPDATE `ads_user` SET `active_status` = '1' WHERE `ads_user`.`ads_user_id` = '$ads_user_id'";

if (mysqli_query($conn, $sql)) {
   ?>
   <script>window.location = 'viewadsuser.php'</script>
   <?php
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
   }    



   if(isset($_GET['Disbale'])){
     echo  $ads_user_id = $_GET['Disbale'];
     
     $sql = "UPDATE `ads_user` SET `active_status` = '0' WHERE `ads_user`.`ads_user_id` = '$ads_user_id'";

if (mysqli_query($conn, $sql)) {
   ?>
<script>window.location = 'viewadsuser.php'</script>
   <?php
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
   }       
     
?> 