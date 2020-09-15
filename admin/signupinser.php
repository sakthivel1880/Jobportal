<?php 

include 'includes/connections.php';

 

if(isset($_POST['submit'])){


$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';            
 $pcode=substr(str_shuffle($set), 0, 12);

  $pfname = $_POST['pfname'];
  $plname = $_POST['plname'];
  $pgender = $_POST['pgender'];
  // $pusername = $_POST['pusername'];
  // $pemail = $_POST['pemail'];
  // $ppassword = $_POST['ppassword'];
  $pmobile = $_POST['pmobile'];
  $pcountry = $_POST['pcountry'];
  $pstate = $_POST['pstate'];
  $pcity = $_POST['pcity'];
  $pexprience = $_POST['pexprience']; 
  $paddress = $_POST['paddress'];
  $ppincode = $_POST['ppincode'];
  $pid = $_POST['pid'];
  $p_no="0000";



//  $banner=$_FILES['pimage']['name'];
// $pimage="../profileimage/".$banner;
// move_uploaded_file($_FILES["pimage"]["tmp_name"],$pimage);

move_uploaded_file($_FILES["pimage"]["tmp_name"],"../profileimage/". $_FILES["pimage"]["name"]);			
$banner=$_FILES["pimage"]["name"];

//  $banner=$_FILES['presume']['name'];
// $presume="../profileresume/".$banner;
// move_uploaded_file($_FILES["presume"]["tmp_name"],$presume);


move_uploaded_file($_FILES["presume"]["tmp_name"],"../profileresume/".$pid. $_FILES["presume"]["name"]);			
$resume=$pid.$_FILES["presume"]["name"];

$sql="UPDATE `profile` SET `pfname`='".$pfname."',`plname`='".$plname."',`pgender`='".$pgender."',`p_no`='".$p_no."',`pcode`='".$pcode."',`pmobile`='".$pmobile."',`paddress`='".$paddress."',`pcountry`='".$pcountry."',`pstate`='".$pstate."',`pcity`='".$pcity."',`pexprience`='".$pexprience."',`ppincode`='".$ppincode."',`pimage`='".$banner."',`presume`='".$resume."',`profile_status`='1',`pmail_status` ='1',`pmob_status`='1' WHERE `pid`='$pid'";



if ($conn->query($sql) === TRUE) {
header('location:educationqualification.php?pid='.$pid);
} else {
  header('location:sinupreg.php');

}

$conn->close();


}


?>