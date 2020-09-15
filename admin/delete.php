<?php
include 'includes/connections.php';
include_once("inc/header.php");  




if(isset($_GET['jt_id']))
        { 
      $getid=$_GET['jt_id'];

      $sql = "DELETE FROM job_title WHERE jt_id= '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'view_jobtitle.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
} 

} 

if(isset($_GET['jty_id'])) 
        {
      $getid=$_GET['jty_id'];

      $sql = "DELETE FROM job_type WHERE jty_id= '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'view_jobtype.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}


if(isset($_GET['qua_id']))
        {
      $getid=$_GET['qua_id'];

      $sql = "DELETE FROM edu_quali WHERE qua_id= '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'view_qulification.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}


if(isset($_GET['edu_dep_id']))
        {
      $getid=$_GET['edu_dep_id'];

      $sql = "DELETE FROM edu_quali_dept WHERE edu_dep_id= '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'view_category.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}



if(isset($_GET['can_skid']))
        {
      $getid=$_GET['can_skid'];

      $sql = "DELETE FROM skills WHERE can_skid= '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'view_skills.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}




if(isset($_GET['depart_id']))
        {
      $getid=$_GET['depart_id'];

      $sql = "DELETE FROM department WHERE depart_id= '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'view_dep.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}





if(isset($_GET['org_id']))
        {
      $getid=$_GET['org_id'];

      $sql = "DELETE FROM organisation WHERE org_id= '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'view_org.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}


if(isset($_GET['exp_id']))
        {
      $getid=$_GET['exp_id'];

      $sql = "DELETE FROM work_exp WHERE exp_id= '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'view_workexp.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}


if(isset($_GET['ads_id']))
        {
      $getid=$_GET['ads_id'];

      $sql = "UPDATE `ads_maintainings` SET `active_status` = '0' WHERE `ads_maintainings`.`ads_id` = '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'adscustable.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}




if(isset($_GET['ads_user_id']))
        {
      $getid=$_GET['ads_user_id'];

      $sql = "UPDATE `ads_user` SET `delete_sts` = '1' WHERE `ads_user`.`ads_user_id` ='$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'viewadsuser.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}




if(isset($_GET['favicon_id']))
        {
      $getid=$_GET['favicon_id'];

      $sql = "DELETE FROM `favicon` WHERE `favicon_id` ='$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'favicon.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}



if(isset($_GET['logo_id']))
        {
      $getid=$_GET['logo_id'];

      $sql = "DELETE FROM `logo` WHERE `logo_id` ='$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'logo.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}


if(isset($_GET['contact_id']))
        {
      $getid=$_GET['contact_id'];

      $sql = "DELETE FROM `contact` WHERE `contact_id` ='$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'contact.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}

if(isset($_GET['socialmedia_id']))
        {
      $getid=$_GET['socialmedia_id'];

      $sql = "DELETE FROM `socialmedia` WHERE `socialmedia_id` ='$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'socialmedia.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}



if(isset($_GET['pid']))
        {
      $getid=$_GET['pid'];

      $sql = "UPDATE `profile` SET `profile_status` = '0' WHERE `profile`.`pid` ='$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'viewcandidate.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}


if(isset($_GET['jobp_id']))
        {
      $getid=$_GET['jobp_id'];

      $sql = "UPDATE `job_post` SET `active_status` = '1' WHERE `job_post`.`jobp_id` ='$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'viewjobpost.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}






if(isset($_GET['company_id']))
        {
      $getid=$_GET['company_id'];

      $sql = "UPDATE `company_profile` SET `status` = '0' WHERE `company_profile`.`company_id` ='$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'viewcompanydetails.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}













if(isset($_GET['cnid']))
        {
      $getid=$_GET['cnid'];

      $sql = "DELETE FROM `country` WHERE cnid= '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'viewconutrys.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}



if(isset($_GET['stid']))
        {
      $getid=$_GET['stid'];

      $sql = "DELETE FROM `state` WHERE stid= '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'viewstates.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}




if(isset($_GET['ctid']))
        {
      $getid=$_GET['ctid'];

      $sql = "DELETE FROM `city` WHERE ctid = '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'viewcitys.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}





if(isset($_GET['colleage_id']))
        {
      $getid=$_GET['colleage_id'];

      $sql = "DELETE FROM `colleages` WHERE `colleage_id` = '$getid'";

if ($conn->query($sql) === TRUE) {
  ?>

    <script type="text/javascript">location.href = 'viewclg.php';</script>

    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

}












  
include("inc/footer.php") 
?>