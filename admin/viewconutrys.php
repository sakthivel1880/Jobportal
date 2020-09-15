<?php


include 'includes/connections.php';
include_once("inc/header.php"); 

      
?>	
<!-- Content Wrapper. Contains page content -->

<!-- <button type="button" class="btn btn-primary">Primary</button> -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Countries
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Countries</li>
      </ol>
    </section>
    <p><a href="conutrys.php" class="colour-1">Click to Add Countries</a></p>
	<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Countries</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="ViewList" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Countries</th>
                  <th>Phone Code</th>
                  <th>Phone Number Lenth</th>
                  <th>Currency Symbols</th>
                  <th>Action</th>
                </tr>
                </thead>
				 <tbody>

				

<?php

$sql = "SELECT * FROM `country` ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
										<tr id="<?php echo $row["cnid"] ?>">

										 

                      <td><?php echo $row["cnname"] ?></td>
                      <td><?php echo $row["phonecode"] ?></td>
										  <td><?php echo $row["phone_length"] ?></td>
										<td><?php echo $row["country_currency"] ?></td>
										  <td><a href="editcountry.php?cnid=<?php echo $row["cnid"] ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a> 
										 
										  <a href="delete.php?cnid=<?php echo $row["cnid"] ?>" type="button" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> Delete</a>
										 
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