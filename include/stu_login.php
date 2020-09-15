<?php
include('../dbconfig.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")  {

    function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
    }
    $cok_pass=$_POST['password'];
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
                if(!empty($_POST['remember'])){
                    setcookie("email", $_POST['email'], time() + (60*60*24*30), "/");
                    setcookie("password", $_POST['password'], time() + (60*60*24*30), "/");
                    setcookie("pid", $row['pid'], time() + (60*60*24*30), "/");
                    setcookie("profile","profile", time() + (60*60*24*30), "/");
                    session_start();
                    // $_SESSION['pid']=$row['pid'];
                    // $_SESSION['p_no']=$row['p_no'];
                    // $_SESSION['pr']='profile';
                    header('location:../index.php');
                 }  else{
                      
                session_start();
                $_SESSION['pid']=$row['pid'];
                $_SESSION['p_no']=$row['p_no'];
                $_SESSION['pr']='profile';
                header('location:../index.php');
                
            }
        }
    }
}
}
?>