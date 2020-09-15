	<?php
include 'includes/connections.php';
if(isset($_POST['submit'])){

	$pusername = $_POST['pusername'];
  $pemail = $_POST['pemail'];
  $ppassword = md5($_POST['ppassword']);




$sql = "INSERT INTO `profile`(`pusername`, `pemail`, `ppassword`,`pcreate_date`,`entry_type`) VALUES ('$pusername','$pemail','$ppassword',NOW(),'1')";
if ($conn->query($sql) === TRUE) {
echo  $last_id = $conn->insert_id;
header("location:signup.php?pid=$last_id");
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
}
?>
