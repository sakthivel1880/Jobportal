<?php
//Include the database configuration file
include 'dbconfig.php';

if(!empty($_POST["cnid"])){
    //Fetch all state data
    $query = $conn->query("SELECT * FROM state WHERE cnid = ".$_POST['cnid']."  ORDER BY stname ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //State option list
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['stid'].'">'.$row['stname'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}elseif(!empty($_POST["stid"])){
    //Fetch all city data
    $query = $conn->query("SELECT * FROM city WHERE stid = ".$_POST['stid']."  ORDER BY ctname ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['ctid'].'">'.$row['ctname'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}

if(isset($_POST['code'])){
 
     $code=$_POST['code'];
     $data=array();

     $sql="SELECT * FROM `country` WHERE cnid='$code' ";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($result);

     $data[]=array(
         "pcode" => $row['phonecode'],
         "plength" => $row['phone_length'],
     );

     echo json_encode($data);
    }



     if(isset($_POST['one'])){
 
     $one=$_POST['one'];

     $sql="SELECT * FROM `country` WHERE phonecode='$one' ";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($result);

        echo $row['phone_length'];
     }
?>