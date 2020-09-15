<?php

include('session.php');
include('../dbconfig.php');

//reviewed the person
$rewid=$_POST['rewid'];

$sql="UPDATE job_apply SET select_reject='reviewed' where apply_id=$rewid";

if($conn->query($sql)===true){
  echo "&#10003";
}



?> 