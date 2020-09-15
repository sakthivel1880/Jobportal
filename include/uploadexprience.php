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
           

            $exp_compname=mysqli_real_escape_string($conn,$_POST['companyname']);
            $exp_yrs=mysqli_real_escape_string($conn,$_POST['years']);
            $exp_months=mysqli_real_escape_string($conn,$_POST['months']);
            $exp_depart=mysqli_real_escape_string($conn,$_POST['department']);
            $exp_orgtype=mysqli_real_escape_string($conn,$_POST['organisation']);
            $exp_sal_lakhs=mysqli_real_escape_string($conn,$_POST['lakhs']);
            $exp_sal_thousands=mysqli_real_escape_string($conn,$_POST['thousands']);
           
            $query=$conn->query("select * from profile where pid='$pid'");
		if($query->num_rows<0)
		{
			$_SESSION['pro_msg'] = "Please Signup First";
			header('location:../signup.php');
             }
             else
		{

          $sql = "INSERT INTO `profile_exp`( `exp_rpid`, `exp_compname`, 
          `exp_yrs`, `exp_months`, `exp_depart`, `exp_orgtype`, `exp_sal_lakhs`, 
          `exp_sal_thousands`, `posted_date`)
            VALUES ('$pid','$exp_compname', '$exp_yrs', '$exp_months', 
            '$exp_depart','$exp_orgtype', '$exp_sal_lakhs', '$exp_sal_thousands', 
            NOW())";
        
                  if($conn->query($sql) === TRUE)
                   {

                        $_SESSION['exp_msg'] = "Profile Exprience Has Been Added";
                           
                        
                        header('location:../education.php');
                   }
                   else {
                      header('location:../index.php');
                   }
                  
                }
        }
}

?>