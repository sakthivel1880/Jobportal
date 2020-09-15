<?php

  include('dbconfig.php');
  include('session.php');
$page=basename($_SERVER['PHP_SELF']);
  
?>

<!doctype html>
<html lang="en">

 
<head>
    <!-- Basic Page Needs==================================================-->
    <?php 
    $sql="SELECT * FROM `favicon` order by favicon_id limit 1 ";
    $result=mysqli_query($conn,$sql);
    for($i=0;$row=mysqli_fetch_assoc($result);$i++){

    ?>
    <link rel="icon" href="admin/favicon/<?php echo $row['favicon']?>" type="image/png" sizes="16*16">
    <title><?php echo $row['title']; ?> </title>
    <?php } ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS==================================================-->
    <link rel="stylesheet" href="assets/plugins/css/plugins.css">
    <link href="assets/css/styles.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css"> 

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.paginate.css" />
	
   <style>
   .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

ul.social-column {
    columns: 2;
    -webkit-columns: 2;
    -moz-columns: 2;
}
.font{
    font-size: 13px;
}
li.active1{
    border-bottom: 2px solid #3671ca;
}
.low{
    text-transform: lowercase;
}

   </style>	   
</head>

<body>
    <div class="Loader"></div>
    <div class="wrapper">
        <nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
              
                <?php 
                    $sql="SELECT * FROM `logo` order by logo_id limit 1 ";
                    $result=mysqli_query($conn,$sql);
                    for($i=0;$row=mysqli_fetch_assoc($result);$i++){
                        ?>
                          <div class="navbar-header">
                 
                    <a class="navbar-brand " href="index.php"><img src="admin/logo/<?php echo $row['logo']?>" class="logo logo-scrolled" alt=""></a>
                   
                </div>  <?php } ?>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                        <!-- <li class="active">
                            <input type="text" class="form-control" placeholder="Find Freelancer">
						</li> -->
						<?php
    if(isset($pid))
    {
?>
						 <?php
    if($pid)
    {
       
        $sql ="SELECT * FROM profile WHERE pid=$pid";
		$result = mysqli_query($conn, $sql);
		for($i=0; $row= mysqli_fetch_assoc($result);$i++ ) {
        
            $pusername=$row['pusername'];
            $company_status=$row['company_status'];
            $pimage=$row['pimage'];
    ?> 
	<?php if($company_status == '1'){ ?>
        <li class="<?php if($page=='postjob.php') { echo "active1"; } ?>"><a href="postjob.php"><strong>POST JOB</strong></a></li>
    <?php } else { ?>
        <li class="<?php if($page=='company.php') { echo "active1"; } ?>"><a href="company.php"><strong>POST JOB</strong></a></li>
    <?php } ?>
	
						<li class="<?php if($page=='resume.php') { echo "active1"; } ?>"><a href="resume.php"><strong>UPLOAD RESUME</strong></a></li>
                       
                    </ul>
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
	
        
                        
                         
                        <li class="nav-item dropdown">
                        <?php if($pimage == ""){ ?>
                            <a href="#" class="nav-link dropdown-toggle low" data-toggle="dropdown"> <img src="images/avatar_profile.png" class="img-circle" alt="<?php echo strtoupper(substr($pusername,0,1)); ?>" width="30" height="30">&nbsp<?php echo  $row['pemail'];?></a> 
                <?php } else { ?>
                    <a href="#" class="nav-link dropdown-toggle low" data-toggle="dropdown"> <img src="profileimage/<?php echo $image; ?>" class="img-circle" alt="<?php echo strtoupper(substr($pusername,0,1)); ?>" width="30" height="30">&nbsp<?php echo   $row['pemail'];?></a>  
                <?php } ?>

            <div class="dropdown-menu">
            <?php if($row['profile_status']==1){
                             ?>
                <a href="profile_view.php" class="dropdown-item font">PROFILE</a>
                <?php } else { ?>
                <a href="profile.php" class="dropdown-item font">PROFILE</a>
                <?php } ?>
                <a href="include/logout.php" class="dropdown-item font">LOGOUT</a>
 
            </div>  </li>  </ul>
            <?php
      }
	}
	?>
       <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

						<?php
    }
    else
    {
?>
						<li><a href="login1.php?person=jobseekers"><strong>JOB SEEKERS</strong></a></li>
						<li><a href="login1.php?company=jobemployers"><strong>JOB EMPLOYER</strong></a></li>
                        <li><a href=""><strong>MORE</strong></a></li>
                        
	<?php } ?>
                        <!-- <li><a href="pricing.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Pricing</a></li>
                        <li class="left-br"><a href="javascript:void(0)" data-toggle="modal" data-target="#signup" class="signin">Sign In Now</a></li> -->
                    </ul>
                    <?php
      if(!isset($pid))
      { ?>
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="login.php"><strong>Sign in</strong></a></li>
                     </ul>
    <?php } ?>
                </div>
            </div>
        </nav>

