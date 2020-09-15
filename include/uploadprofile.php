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
           

            $pfname=mysqli_real_escape_string($conn,$_POST['fname']);
            $plname=mysqli_real_escape_string($conn,$_POST['lname']);
            $pgender=mysqli_real_escape_string($conn,$_POST['gender']);
            $pmobile=mysqli_real_escape_string($conn,$_POST['mobile']);
            $phone_code=mysqli_real_escape_string($conn,$_POST['phone_code']); 
            $pmob_status=mysqli_real_escape_string($conn,$_POST['otpcode']);
            $paddress=mysqli_real_escape_string($conn,$_POST['address']);
            $pcountry=mysqli_real_escape_string($conn,$_POST['country']);
            $pstate=mysqli_real_escape_string($conn,$_POST['state']);
            $pcity=mysqli_real_escape_string($conn,$_POST['city']);
            $pexprience=mysqli_real_escape_string($conn,$_POST['exprience']);
            $ppincode=mysqli_real_escape_string($conn,$_POST['pincode']);
            move_uploaded_file($_FILES["image"]["tmp_name"],"../profileimage/". $_FILES["image"]["name"]);			
            $pimage=$_FILES["image"]["name"];
           
            $query=$conn->query("select * from profile where pid='$pid'");
		if($query->num_rows<0)
		{
			$_SESSION['pro_msg'] = "Please Signup First";
			header('location:../signup.php');
             }
             else
		{

           $sql="UPDATE `profile` SET `pfname`='".$pfname."',`plname`='".$plname."',`pgender`='".$pgender."',`pmobile`='$phone_code"."$pmobile',`paddress`='".$paddress."',`pcountry`='".$pcountry."',`pstate`='".$pstate."',`pcity`='".$pcity."',`pexprience`='".$pexprience."',`ppincode`='".$ppincode."',`pimage`='".$pimage."',`profile_status`='1',`pmob_status`='1' WHERE `pid`='$pid'";
               
                  if($conn->query($sql) === TRUE)
                   {

                        $_SESSION['pro_msg'] = "Profile Successfully Created Get New Job Alert Every Day";
                           
                        if($pexprience=="fresher"){
                        header('location:../education.php');
                   }
                   else {
                      header('location:../exprience.php');
                   }
                  
                }
        }
}
}
?>