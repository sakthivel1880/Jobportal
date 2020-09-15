<?php
include("inc/header.php");
include 'includes/connections.php';





if(isset($_GET['socialmedia_id']))
        {
          $getid=$_GET['socialmedia_id'];

if(isset($_POST['submit'])) 
{
 
  $fb= $_POST['fb'];
  $Instagram= $_POST['Instagram'];
  $tweet= $_POST['tweet'];
  $link= $_POST['link'];
  $youtube= $_POST['youtube'];

  $sql = "UPDATE `socialmedia` SET `fb`='$fb',`Instagram`='$Instagram',`tweet`='$tweet',`link`='$link',`youtube`= '$youtube' WHERE `socialmedia_id` ='$getid'";

 

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'socialmedia.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?> 



  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Edit social media
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit social media</li>
      </ol>
    </section>
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit social media</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="AddForm" role="form" action="" method="post" enctype="multipart/form-data">
					<div class="box-body col-md-6">
						
           


            <?php
$sql = "SELECT * FROM `socialmedia` WHERE `socialmedia_id`='$getid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
			




 <div class="">
            <div class="form-group">
              <label for="InputCountry">FaceBook link</label>
              <input type="text" name="fb" class="form-control reqd" placeholder="Add socialmedia" value="<?php echo $row['fb'];?>">
            </div>
             <div class="form-group">
              <label for="InputCountry">Instagram link</label>
              <input type="text" name="Instagram" class="form-control reqd" placeholder="Add title" value="<?php echo $row['Instagram'];?>">
            </div>
             <div class="form-group">
              <label for="InputCountry">Twitter Link</label>
              <input type="text" name="tweet" class="form-control reqd" placeholder="Add title" value="<?php echo $row['tweet'];?>">
            </div>
             <div class="form-group">
              <label for="InputCountry">YouTube Link</label>
              <input type="text" name="youtube" class="form-control reqd" placeholder="Add title" value="<?php echo $row['youtube'];?>">
            </div>
             <div class="form-group">
              <label for="InputCountry">Other Link</label>
              <input type="text" name="link" class="form-control reqd" placeholder="Add title" value="<?php echo $row['link'];?>">
            </div>
          </div>


					<?php
      
       }
} }

          ?>


					
					</div>
					 
					  <div class="clearfix"></div>
					<div class="box-footer">
						<input name="submit" type="submit" class="btn btn-primary">
					</div>
            </form>
          </div>
          


        </div>
     </div>
	</section>
  </div>
  
  
<?php 



include_once("inc/footer.php") ?>