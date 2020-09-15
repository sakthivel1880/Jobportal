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
          

            $query=$conn->query("select * from profile where pid='$pid'");
            if($query->num_rows<0)
            {
                    $_SESSION['pro_msg'] = "Please Signup First";
                    header('location:../signup.php');
        }

            $skills=count($_POST['skills']);
            $skillexp=count($_POST['skillexp']);
           if($skills > 0)
           {
                for($i=0; $i<$skills; $i++)
                {
                if(trim($_POST["skills"][$i] != '') )
                {
                        if($skillexp > 0)
                        {
                                for($i=0; $i<$skillexp; $i++)
                                {
                                if(trim($_POST["skillexp"][$i] != '') )
                                {
          
            

         $sql = "INSERT INTO `profile_skills`(`skills_rpid`, `skills`,`skills_exp`, `posted_date`)
            VALUES ('$pid','".mysqli_real_escape_string($conn, $_POST["skills"][$i])."',
            '".mysqli_real_escape_string($conn, $_POST["skillexp"][$i])."',NOW())";
        
                  if($conn->query($sql) === TRUE)
                   {

                        $_SESSION['exp_msg'] = "Profile Exprience Has Been Added";
                           
                        
                        header('location:../index.php');
                   }
                   else {
                      header('location:../login.php');
                   }
                  
                }
        }
}
        }
}
           }
        }
}

?>