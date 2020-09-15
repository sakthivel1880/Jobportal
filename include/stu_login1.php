<?php
include('../dbconfig.php');

session_start();

function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
    }

if(isset($_GET["type"]) == "jobseekers")  {
    $name=$_GET['type'];

    

    $pemail=mysqli_real_escape_string($conn,check_input($_POST['email']));
    $ppassword=mysqli_real_escape_string($conn,md5(check_input($_POST['password'])));

        if (!filter_var($pemail, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['log_msg'] = "Invalid email format";
             header('location:../login.php');
      }
      else{
        $query=mysqli_query($conn,"select * from profile where pemail='$pemail' and ppassword='$ppassword'");

        if(mysqli_num_rows($query)==0)
        {
            $_SESSION['log_msg'] = "User not found";
               header('location:../login.php');
        }
        else{
            $row=mysqli_fetch_array($query);
            if($row['pmail_status']==0){
                $_SESSION['log_msg'] = "User not verified. Please activate account";
                   header('location:../login.php');
            }
            else{
                $_SESSION['pid']=$row['pid'];
                $_SESSION['p_no']=$row['p_no'];
                $_SESSION['pr']='profile';
                if($name == "jobseekers"){
                header('location:../index.php');
                }
                else if($name == "jobemployers"){
                    header('location:../company_overview.php');
                }
                
            
            }
        }
    }
}
// if(isset($_GET["type"]) == "jobemployers")  {

   

//     $pemail=mysqli_real_escape_string($conn,check_input($_POST['email']));
//     $ppassword=mysqli_real_escape_string($conn,md5(check_input($_POST['password'])));

//         if (!filter_var($pemail, FILTER_VALIDATE_EMAIL)) {
//             $_SESSION['log_msg'] = "Invalid email format";
//              header('location:../login.php');
//       }
//       else{
//         $query=mysqli_query($conn,"select * from profile where pemail='$pemail' and ppassword='$ppassword'");

//         if(mysqli_num_rows($query)==0)
//         {
//             $_SESSION['log_msg'] = "User not found";
//                header('location:../login.php');
//         }
//         else{
//             $row=mysqli_fetch_array($query);
//             if($row['pmail_status']==0){
//                 $_SESSION['log_msg'] = "User not verified. Please activate account";
//                    header('location:../login.php');
//             }
//             else{
//                 $_SESSION['pid']=$row['pid'];
//                 $_SESSION['p_no']=$row['p_no'];
//                 $_SESSION['pr']='profile';
//                 header('location:../company_overview.php');
                
            
//             }
//         }
//     }
// }
?>