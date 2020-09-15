<?php 
include 'includes/connections.php';
if(isset($_POST['submit'])){

        $company_name = $_POST["company_name"];
          $company_email = $_POST["company_email"];
         $company_phone = $_POST["company_phone"];
        $company_pincode = $_POST["company_pincode"];
        $company_address = $_POST["company_address"];
        $company_id = $_POST["company_id"];
 
       echo  $sql = "UPDATE `company_profile` SET `company_name`='$company_name',`company_email`='$company_email',`company_phone`='$company_phone',`company_pincode`='$company_pincode',`company_address`='$company_address' WHERE `company_id` = '$company_id'";
        if ($conn->query($sql) === TRUE) {
       header('location:viewcompanydetails.php');
    } else {
       echo "Error updating record: " . $conn->error;
    }

}


?>