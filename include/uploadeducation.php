<?php 
        include('session.php');
          include('../dbconfig.php');

          
          if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	function check_input($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
        }
      
        if($pid)
        {
           

            $edu_degree=mysqli_real_escape_string($conn,$_POST['degree']);
            $edu_dept=mysqli_real_escape_string($conn,$_POST['dept']);
            $edu_ins=mysqli_real_escape_string($conn,$_POST['institude']);
            $edu_pass=mysqli_real_escape_string($conn,$_POST['passedout']);
            $edu_course_type=mysqli_real_escape_string($conn,$_POST['type']);
            
           
            $query=$conn->query("select * from profile where pid='$pid'");
		if($query->num_rows<0)
		{
			$_SESSION['pro_msg'] = "Please Signup First";
			header('location:../signup.php');
             }
             else
		{

          $sql = "INSERT INTO `profile_educ`(`edu_rpid`, `edu_degree`, `edu_dept`, 
          `edu_ins`, `edu_pass`, `edu_course_type`, `posted_date`)
            VALUES ('$pid','$edu_degree','$edu_dept', '$edu_ins', '$edu_pass', 
            '$edu_course_type', NOW())";
        
                  if($conn->query($sql) === TRUE)
                   {

                        $_SESSION['exp_msg'] = "Profile Exprience Has Been Added";
                           
                        
                        header('location:../skills.php');
                   }
                   else {
                      header('location:../login.php');
                   }
                  
                }
        }
}

?>