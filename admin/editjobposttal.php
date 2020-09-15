<?php 
include 'includes/connections.php';
if(isset($_POST['submit'])){

          $jobp_type = $_POST["jobp_type"];
         $jobp_duties = $_POST["jobp_duties"];
        $jobp_responsibilities = $_POST["jobp_responsibilities"];
         $jobp_location = $_POST["jobp_location"];
        $jobp_description = $_POST["jobp_description"];
        $jobp_skills = $_POST["jobp_skills"];
        $jobp_maxsal = $_POST["jobp_maxsal"];
        $jobp_minsal = $_POST["jobp_minsal"];
        $jobp_hirepersons = $_POST["jobp_hirepersons"];
        $jobp_link = $_POST["jobp_link"];
        $jobp_refmail = $_POST["jobp_refmail"];
        $jobp_id = $_POST["jobp_id"];
 
       

          $sql = "UPDATE `job_post` SET `jobp_type`='$jobp_type',`jobp_duties`='$jobp_duties',`jobp_description`='$jobp_description',`jobp_responsibilities`='$jobp_responsibilities',`jobp_location`='$jobp_location',`jobp_skills`='$jobp_skills',`jobp_maxsal`='$jobp_maxsal',`jobp_minsal`='$jobp_minsal',`jobp_hirepersons`='$jobp_hirepersons',`jobp_link`='$jobp_link',`jobp_refmail`='$jobp_refmail',`posted_date`= NOW() WHERE `jobp_id` = '$jobp_id'";

        if ($conn->query($sql) === TRUE) {
       header('location:viewjobpost.php');
    } else {
       echo "Error updating record: " . $conn->error;
    }

}


?>