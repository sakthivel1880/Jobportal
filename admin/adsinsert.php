<?php
include 'includes/connections.php';

	$ads_user_id = $_POST['ads_user_id'];
	$ads_title = $_POST['ads_title'];
     $currsubperiod = $_POST['currsubperiod'];
     $subperiod = $_POST['subperiod'];
     $subdays = $_POST['subdays'];
     $amount = $_POST['amount'];
     $payed = $_POST['payed'];
     $balance = $_POST['balance'];
     //$ads_user_id = $_POST['ads_user_id'];
     $link = $_POST['link'];

     $banner=$_FILES['mpic_lans']['name'];
     $banner1 =$_FILES['mpic_port']['name'];
     $banner2 =$_FILES['wpic_lans']['name'];
     $banner3 =$_FILES['wpic_port']['name'];
     $banner4 =$_FILES['logo']['name'];



			$bannerpath="uploads/".$banner;
			$bannerpath1="uploads/".$banner1;
			$bannerpath2="uploads/".$banner2;
			$bannerpath3="uploads/".$banner3;
			$bannerpath4="uploads/".$banner4;

			move_uploaded_file($_FILES["mpic_lans"]["tmp_name"],$bannerpath);
			move_uploaded_file($_FILES["mpic_port"]["tmp_name"],$bannerpath1);
			move_uploaded_file($_FILES["wpic_lans"]["tmp_name"],$bannerpath2);
			move_uploaded_file($_FILES["wpic_port"]["tmp_name"],$bannerpath3);
			move_uploaded_file($_FILES["logo"]["tmp_name"],$bannerpath4);
			//echo "File uploaded successfully";
		
			 $sql = "INSERT INTO `ads`(`ads_title`,`ads_user_id`,`currsubperiod`, `subperiod`, `subdays`, `amount`, `payed`, `balance`, `mpic_lans`, `wpic_lans`, `mpic_port`, `wpic_port`, `link`, `logo`,`created_date`) VALUES('$ads_title','$ads_user_id','$currsubperiod','$subperiod','$subdays','$amount','$payed','$balance','$banner','$banner1','$banner2','$banner3','$link','$banner4',NOW())";

if (mysqli_query($conn, $sql)) {
  // echo json_encode($sql);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }

?>

