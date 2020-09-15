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
            
            // $rpname=$_SESSION['pusername'];

            $company_name=mysqli_real_escape_string($conn,$_POST['name']);
            $company_email=mysqli_real_escape_string($conn,$_POST['email']);
            $company_phone=mysqli_real_escape_string($conn,$_POST['phone']);
            $phone_code=mysqli_real_escape_string($conn,$_POST['phone_code']);
            $company_country=mysqli_real_escape_string($conn,$_POST['country']);
            $company_state=mysqli_real_escape_string($conn,$_POST['state']);
            $company_city=mysqli_real_escape_string($conn,$_POST['city']);
            $company_address=mysqli_real_escape_string($conn,$_POST['address']);
            $company_pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
            $company_description=mysqli_real_escape_string($conn,$_POST['description']);
           
            $query=$conn->query("select * from profile where pid='$pid'");
		if($query->num_rows<0)
		{
			$_SESSION['pro_msg'] = "Please Signup First";
			header('location:../signup.php');
             }
             else
		{ 

            $sql = "INSERT INTO `company_profile` (`company_name`, `company_email`, `company_phone`, `company_country`, `company_state`, `company_city`, `company_address`,`company_pincode`,`company_description`,`company_rpname`,`company_rpid`,`status`, `create_date` )
            VALUES ('$company_name', '$company_email', '$phone_code"."$company_phone', '$company_country','$company_state', '$company_city', '$company_address', '$company_pincode','$company_description',(select pusername from `profile` where pid='$pid'), '$pid','1',  NOW())";
               
                  if($conn->query($sql) === TRUE)
                   {
                        $sql="UPDATE `profile` SET `company_status`='1' where pid=$pid ";
                        if($conn->query($sql) === TRUE)
                   {
                        $_SESSION['pro_msg'] = "Company Profile Has Been Created Sucessfully";
                           
                        $_SESSION['com']='company_profile';
                        $_SESSION['company_rpid']=$row['company_rpid'];
                        header('location:../jobpost.php');
                   } 
               }
                   else{
                        header('location:../login.php');
                   }
                }
        }
}
?>