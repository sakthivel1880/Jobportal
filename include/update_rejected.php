<?php

include('session.php');
include('../dbconfig.php');

//rejected the person
$rejid=$_POST['rejid'];

$sql="UPDATE job_apply SET select_reject='rejected' where apply_id=$rejid";

if($conn->query($sql)===true){
  echo "&#10003";
}
?>