<?php 
        
          include('../dbconfig.php');
          include('session.php');

          
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
            
            // $rpname=$_SESSION['pusername'];

            $jobp_type=mysqli_real_escape_string($conn,$_POST['type']);
            $jobp_duties=mysqli_real_escape_string($conn,$_POST['duties']);
            $jobp_responsibilities=mysqli_real_escape_string($conn,$_POST['responsibilities']);
            $jobp_location=mysqli_real_escape_string($conn,$_POST['location']);
            $jobp_description=mysqli_real_escape_string($conn,$_POST['description']);
            $jobp_titlename=mysqli_real_escape_string($conn,$_POST['titlename']);
            $jobp_skills=mysqli_real_escape_string($conn,$_POST['skills']);
            $jobp_maxsal=mysqli_real_escape_string($conn,$_POST['maxsal']);
            $jobp_minsal_rs=mysqli_real_escape_string($conn,$_POST['minsal_rs']);
            $jobp_minsal=mysqli_real_escape_string($conn,$_POST['minsal']);
            $jobp_hirepersons=mysqli_real_escape_string($conn,$_POST['hirepersons']);
            $jobp_exprience=mysqli_real_escape_string($conn,$_POST['exprience']);
            $jobp_link=mysqli_real_escape_string($conn,$_POST['link']);
            $jobp_refmail=mysqli_real_escape_string($conn,$_POST['refmail']);
            $jobp_resume=mysqli_real_escape_string($conn,$_POST['resume']);
           
            $query=$conn->query("select * from profile where pid='$pid'");
		if($query->num_rows<0)
		{ 
			$_SESSION['jobp_msg'] = "Please Signup First";
			header('location:../signup.php');
             }
             else
		{ 

         
            $sql = "INSERT INTO `job_post` (`jobp_companyid`, `jobp_companyname`, `jobp_rpid`, 
            `jobp_rpname`, `jobp_type`, `jobp_duties`, `jobp_responsibilities`,`jobp_titlename`,
            `jobp_titleid`,`jobp_location`,`jobp_description`, `jobp_skills`, `jobp_maxsal`,`jobp_cur_code`, 
            `jobp_minsal`, `jobp_hirepersons`, `jobp_exprience`, `jobp_link`,`jobp_refmail`,`active_status`, 
            `jobp_resume`, `posted_date` )
            VALUES ((select company_id from `company_profile` where company_rpid='$pid'), 
            (select company_name from `company_profile` where company_rpid='$pid'), '$pid',
             (select pusername from `profile` where pid='$pid'),'$jobp_type', '$jobp_duties', 
             '$jobp_responsibilities', '$jobp_titlename',(select jt_id from `job_title` where jt_name='$jobp_titlename'), 
             '$jobp_location', '$jobp_description', '$jobp_skills', '$jobp_maxsal', '$jobp_minsal_rs','$jobp_minsal',
             '$jobp_hirepersons', '$jobp_exprience', '$jobp_link', '$jobp_refmail','2','$jobp_resume',NOW())";
          
                  if($conn->query($sql) === TRUE)
                   {
                        $_SESSION['jobp_msg'] = "Job Posted Successfully";
                           
                        $_SESSION['jobp']='job_post';
                        $_SESSION['jobp_id']=$row['jobp_id'];
                        header('location:../company_overview.php');
                   }
                   else{
                        header('location:../login.php');
                   }
                }
        }
}
?>