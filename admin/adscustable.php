<?php

include("inc/header.php");
include 'includes/connections.php';

?>  
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <style type="text/css">
      body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

     </style>
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Add Job Title
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Ads Customer Table</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        



<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Company Name</th>
                <th>Subscribtion Period Date</th>
                <th>Current Subscribtion Period Date</th>
                <th>Amount</th>
                <th>Website</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM `ads_maintainings` WHERE `active_status` = '1'";
       $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        

        ?>
        <tbody>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['sub_perides']; ?></td>
                <td><?php echo $row['currsub_perides']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td><?php echo $row['website']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><a href="editads.php?ads_id=<?php echo $row['ads_id']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>                    
                <a href="delete.php?ads_id=<?php echo $row['ads_id']; ?>" type="button" onClick="" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> Delete</a>                       
             </td>

            </tr>
             <?php
     }
} 
   ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Company Name</th>
                <th>Subscribtion Period Date</th>
                <th>Current Subscribtion Period Date</th>
                <th>Amount</th>
                <th>Website</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
           
        </tfoot>
    </table>

    </body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>
  



  
<?php include_once("inc/footer.php") ?>

