<?php 
       include('session.php');
        
  if(isset($pid) && $pid==true){

    

  
          include('../dbconfig.php');
          if(isset($_GET['jobp_id'])){
            echo  $cmpid=$_GET['jobp_id'];

            $sql="SELECT * FROM `job_post` WHERE jobp_id='$cmpid'";
            $res=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($res);

            $cid=$row['jobp_companyid'];
          }

          
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
           

            $jobp_id=$_GET['jobp_id'];
           
            $sql="SELECT presume FROM profile WHERE pid='$pid'";
            $result=mysqli_query($conn,$sql);
            
            // Associative array
            $row=mysqli_fetch_assoc($result);
            if(empty($row['presume'])){

                $_SESSION['resume_msg'] = "Please Upload Resume First";
                $sql = "SELECT* FROM job_post where Jobp_id= $jobp_id"; 
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
                   
                
                header("location:../jobapply.php?keyword=$row[jobp_titlename]&location=$row[jobp_location]&years=$row[jobp_exprience]&jobp_id=$row[jobp_id]");
           }
        }
            }
            else{
                    
            
           
            $query=$conn->query("select * from profile where pid='$pid'");
		if($query->num_rows<0)
		{
			$_SESSION['pro_msg'] = "Please Signup First";
			header('location:../signup.php');
             }
             else
		{

            $sql = "INSERT INTO `job_apply`( `apply_rpid`, `company_id`, `jobp_id`, `status`, `apply_date`) 
           VALUES ('$pid',$cid,
            '$jobp_id', '1', NOW())"; 
           
              
        
                  if($conn->query($sql) === TRUE)
                   {

                        $_SESSION['apply_msg'] = "Application Has Been Submitted";
                        $sql = "SELECT* FROM job_post where Jobp_id= $jobp_id"; 
                        $result = $conn->query($sql);
        
                        if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                           
                        
                        header("location:../jobsearch.php?keyword=$row[jobp_titlename]&location=$row[jobp_location]&years=$row[jobp_exprience]&submit=submit");
                   }
                }
        }
                   else {
                      header('location:../index.php');
                   }
                  
                }
        }
}


}

}
else{
    $_SESSION['must']="Login First.";
    header('location:../login.php');
}
        



?>