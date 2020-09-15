<?php 
include 'includes/connections.php';
if(isset($_POST['submit'])){

       echo  $pfname = $_POST["pfname"];
        echo  $plname = $_POST["plname"];
       echo  $pgender = $_POST["pgender"];
        $pusername = $_POST["pusername"];
         $ppassword = $_POST["ppassword"];
        $pemail = $_POST["pemail"];
        $pmobile = $_POST["pmobile"];
        $pexprience = $_POST["pexprience"];
        $paddress = $_POST["paddress"];
        $pid = $_POST["pid"];
 
       echo  $sql = "UPDATE `profile` SET `pfname`='$pfname',`plname`='$plname',`pgender`='$pgender',`pusername`='$pusername',`pemail`='$pemail',`ppassword`='$ppassword',`pmobile`='$pmobile',`pexprience`='$pexprience',`paddress`='$paddress',`pcreate_date`=NOW() WHERE `pid` = '$pid'";

        if ($conn->query($sql) === TRUE) {
       header('location:viewcandidate.php');
    } else {
       echo "Error updating record: " . $conn->error;
    }

}


?>