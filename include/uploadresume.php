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
           

            move_uploaded_file($_FILES["resume"]["tmp_name"],"profileresume/".$pid. $_FILES["resume"]["name"]);			
            $presume=$pid.$_FILES["resume"]["name"];

            
            $query=$conn->query("select * from profile where pid='$pid'");
		if($query->num_rows<0)
		{
			$_SESSION['pro_msg'] = "Please Signup First";
			header('location:../signup.php');
             }
             else
		{

           $sql="UPDATE `profile` SET `presume`='".$presume."' where pid='$pid' ";

           
           if($conn->query($sql) === TRUE)
           {

                $_SESSION['res_msg'] = "Profile Successfully Created Get New Job Alert Every Day";
                   
                
                header('location:../index.php');
           }
           else {
              header('location:../login.php');
           }
        }
    }
}
?>