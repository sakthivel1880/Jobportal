
<?php


include 'includes/connections.php';

		if(isset($_POST['submit'])){

        $skills=count($_POST['skills']);
            $skillexp=count($_POST['skillexp']);
            $id=$_POST['id'];
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
            VALUES ('$id','".mysqli_real_escape_string($conn, $_POST["skills"][$i])."',
            '".mysqli_real_escape_string($conn, $_POST["skillexp"][$i])."',NOW())";
        
                  if($conn->query($sql) === TRUE)
                   {
                        header('location:index.php');
                   }
                   else {
                     $sql1 = "INSERT INTO `profile_skills`(`skills_rpid`, `skills`,`skills_exp`, `posted_date`)
                      VALUES ('','','',NOW())";
                       $res= $conn->query($sql1);
                      if($res == TRUE){
                        header('location:index.php');
                      }else{
                        echo "not INSERT";
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