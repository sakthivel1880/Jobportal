<?php
$banner=$_FILES['mpic_lans']['name'];	
 $name = $_POST['name'];
$banner1 =$_FILES['wpic_lans']['name'];

     $banner=$_FILES['mpic_lans']['name'];
     $banner1 =$_FILES['mpic_port']['name'];
     $banner2 =$_FILES['wpic_lans']['name'];
     $banner3 =$_FILES['wpic_port']['name'];
     $logo =$_FILES['logo']['name'];


		
			$bannerpath1="uploads/".$banner;
			$bannerpath1="uploads/".$banner1;

			move_uploaded_file($_FILES["mpic_lans"]["tmp_name"],$bannerpath1);
			move_uploaded_file($_FILES["wpic_lans"]["tmp_name"],$bannerpath1);
			//echo "File uploaded successfully";
			?>
			<img src="uploads/<?php echo $banner; ?>"/>
			<img src="uploads/<?php echo $banner1; ?>"/>
			<p><?php echo  $name ?></p>
?>