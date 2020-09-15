<?php

include('session.php');
include('../dbconfig.php');
include('header.php');

move_uploaded_file($_FILES["file"]["tmp_name"],"../profileresume/".$pid. $_FILES["file"]["name"]);			
$presume=$pid.$_FILES["file"]["name"];

 $sql="UPDATE `profile` SET presume='$presume' where  pid=$pid";

if($conn->query($sql)===true){
  echo "&#10003";
}

?>