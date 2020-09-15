<?php

include('session.php');
include('../dbconfig.php');

//selected the person
$selid=$_POST['selid'];

$sql="UPDATE job_apply SET select_reject='hired' where apply_id=$selid";

if($conn->query($sql)===true){
  echo "&#10003";
}
?>