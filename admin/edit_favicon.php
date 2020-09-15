<?php
include("inc/header.php");
include 'includes/connections.php';





if(isset($_GET['favicon_id']))
        {
          $getid=$_GET['favicon_id'];

if(isset($_POST['submit'])) 
{
  move_uploaded_file($_FILES["favicon"]["tmp_name"],'favicon/' . $_FILES["favicon"]["name"]);
 $logo=$_FILES["favicon"]["name"];
  $title= $_POST['title'];

  $sql = "UPDATE `favicon` SET `title`='$title',`favicon`= '$logo' WHERE `favicon_id` ='$getid'";

 

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'favicon.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?> 



  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Edit Favicon
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Favicon</li>
      </ol>
    </section>
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit favicon</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="AddForm" role="form" action="" method="post" enctype="multipart/form-data">
					<div class="box-body col-md-6">
						
           


            <?php
$sql = "SELECT * FROM `favicon` WHERE `favicon_id`='$getid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
			




      			 <div class="form-group">
              <label for="">Favicon</label>
              <input type="file" name="favicon" class="form-control reqd" value="">
              <img id="blah4" src="favicon/<?php echo  $row["favicon"]; ?>"  style="width: 100px;">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" class="form-control reqd" value="<?php echo $row['title'] ?>" id="" placeholder="" title="Job Title">
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