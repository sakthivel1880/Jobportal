<?php
include 'includes/connections.php';
include_once("inc/header.php");    
?>	




  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Social Media
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Social Media</li>
      </ol>
    </section>
    <p><a href="addsocialmedia.php" class="colour-1">Click to Add</a></p>
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header"> 
              <h3 class="box-title">Social Media</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="ViewList" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>FaceBook Link</th>
                  <th>Instagram Link</th>
                  <th>Twitter Link</th>
                  <th>YouTube Link</th>
                  <th>Other Link</th>
                  <th>Action</th>
                </tr>
                </thead>
				 <tbody>

				

<?php

$sql = "SELECT * FROM `socialmedia` ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
										<tr id="<?php echo $row["socialmedia_id"]; ?>">

							
                      <td><?php echo $row["fb"] ?></td>
                      <td><?php echo $row["Instagram"] ?></td>
                      <td><?php echo $row["tweet"] ?></td>
                      <td><?php echo $row["youtube"] ?></td>
										  <td><?php echo $row["link"] ?></td>
										
										  <td><a href="edit_socialmedia.php?socialmedia_id=<?php echo $row["socialmedia_id"] ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a> 
										 
										  <a href="delete.php?socialmedia_id=<?php echo $row["socialmedia_id"] ?>" type="button" onClick="" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> Delete</a>
										 
										  </td>
									   </tr>





                       <?php
                        }
} else {
    echo "0 results";
} 
                       ?>

                     




                      </tbody>
               </table>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
     </div>
	</section>
  </div>

  <!-- /.content-wrapper -->
  
<?php 


include_once("inc/footer.php") ?>