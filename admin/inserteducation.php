  <?php 

include 'includes/connections.php';



if(isset($_POST['submit'])){


  echo $edu_dept = $_POST['edu_dept'];
 echo  $edu_degree = $_POST['edu_degree'];
  $edu_ins = $_POST['edu_ins'];
  $edu_pass = $_POST['edu_pass'];
  $edu_course_type = $_POST['edu_course_type'];
  $id = $_POST['id'];


 echo $sql = "INSERT INTO `profile_educ`(`edu_rpid`, `edu_degree`, `edu_dept`, 
          `edu_ins`, `edu_pass`, `edu_course_type`, `posted_date`)
            VALUES ('$id','$edu_degree','$edu_dept', '$edu_ins', '$edu_pass', 
            '$edu_course_type', NOW())";
if ($conn->query($sql) === TRUE) {
header('location:profileskills.php?id='.$id);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}


?>