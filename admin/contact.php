<?php
include 'includes/connections.php';
include_once("inc/header.php");    
?>	




  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View contact
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View contact</li>
      </ol>
    </section>
    <p><a href="addcontact.php" class="colour-1">Click to Add</a></p>
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header"> 
              <h3 class="box-title">contact</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="ViewList" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                </thead>
				 <tbody>

				

<?php

$sql = "SELECT * FROM `contact` ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
										<tr id="<?php echo $row["contact_id"]; ?>">

							
                      <td><?php echo $row["email"] ?></td>
                      <td><?php echo $row["phone"] ?></td>
										  <td><?php echo $row["address"] ?></td>
										
										  <td><a href="edit_contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a> 
										 
										  <a href="delete.php?contact_id=<?php echo $row["contact_id"] ?>" type="button" onClick="" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> Delete</a>
										 
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