 <?php
 //Include the database configuration file
 include 'dbconfig.php';
	

//department depent dropdown
if($_POST['id']){
$id=$_POST['id'];
if($id==0){
	echo "<option>Select depart</option>";
}else{
	$sql = mysqli_query($conn,"SELECT * FROM `edu_quali_dept` WHERE edu_id='$id'");
	while($row = mysqli_fetch_array($sql)){
		echo '<option value="'.$row['edu_dep_id'].'">'.$row['dept_name'].'</option>';
		}
	}
}

 ?>