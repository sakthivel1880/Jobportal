  <?php 

include 'includes/connections.php';



if(isset($_POST['submit'])){

     $com_id = $_POST['company_name']."<br>"; 
     $jobid = $_POST['jobp_titlename']."<br>";
   

$sql ="SELECT * FROM `company_profile` WHERE `company_id` = '$com_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $jobp_companyname =  $row['company_name'];
        $jobp_companyid =  $row['company_id'];
        $jobp_rpid =  $row['company_rpid'];
        $jobp_rpname =  $row['company_rpname'];
    }
}

    $sql ="SELECT * FROM `job_title` WHERE `jt_id` = '$jobid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $jobp_titleid =  $row['jt_id'];
        $jobp_titlename =  $row['jt_name'];
    }
}




   $jobp_type = $_POST['jobp_type'];
   $jobp_duties = $_POST['jobp_duties'];
  $jobp_description = $_POST['jobp_description'];
  $jobp_responsibilities = $_POST['jobp_responsibilities'];
   
  $jobp_location = $_POST['jobp_location'];
  $jobp_skills = $_POST['jobp_skills'];
  $jobp_maxsal = $_POST['jobp_maxsal'];
  $jobp_minsal = $_POST['jobp_minsal'];
  $minsal_rs = $_POST['minsal_rs'];
  $jobp_hirepersons = $_POST['jobp_hirepersons'];
  $jobp_refmail = $_POST['jobp_refmail'];
  $jobp_exprience = $_POST['jobp_exprience'];
  $jobp_resume = $_POST['jobp_resume'];
  $jobp_link = $_POST['jobp_link'];
  
 


   echo $sql = "INSERT INTO `job_post`(`jobp_companyid`, `jobp_companyname`, `jobp_rpid`, `jobp_rpname`, `jobp_type`, `jobp_duties`, `jobp_description`, `jobp_responsibilities`, `jobp_titlename`, `jobp_titleid`, `jobp_location`, `jobp_skills`, `jobp_maxsal`, `jobp_minsal`,`jobp_cur_code`, `jobp_hirepersons`, `jobp_exprience`, `jobp_link`, `jobp_refmail`, `jobp_resume`, `active_status`, `posted_date`,`entry_type`) VALUES 

 ('$jobp_companyid','$jobp_companyname','$jobp_rpid','$jobp_rpname','$jobp_type','$jobp_duties','$jobp_description','$jobp_responsibilities','$jobp_titlename','$jobp_titleid','$jobp_location','$jobp_skills','$jobp_maxsal','$jobp_minsal','$minsal_rs','$jobp_hirepersons','$jobp_exprience','$jobp_link','$jobp_refmail','$jobp_resume','0',NOW(),'1')";


if ($conn->query($sql) == TRUE) {
header('location:viewjobpost.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}


?>