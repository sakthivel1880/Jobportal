<?php

include("inc/header.php");
include 'includes/connections.php';

if(isset($_GET['userid'])){
 $clg = $_GET['clg'];
  $userid = $_GET['userid'];
}


if(isset($_POST['submit']))
{
  $state= $_POST['state'];
  $colleage_name= $_POST['colleage_name'];
  $clgname = str_replace(' ', '', $colleage_name);
  // $clgname= upper($colleage_name);

   $sql = "INSERT INTO `colleages`(`state`, `colleage_name`, `clgname`) VALUES ('$state','$colleage_name','$clgname')";
 

if ($conn->query($sql) === TRUE) {
  ?>
  <script type="text/javascript">location.href = 'viewclg.php';</script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>  
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Add Collages
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add Collages</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="form-group">
              <label for="InputCountry">User Selected Collage Name</label>
              <input type="text" id="colleage_nameu" name="colleage_name" class="form-control reqd" placeholder="Collages Name" value="<?php echo $clg; ?>">
            </div>


            <button  class="btn btn-info" id="addnew" >ADD NEW</button>
         <!--   <a href="https://www.google.com/search/<?php echo $clg; ?>" target="_blank">SEARCH ONLINE</a>-->

            <form id="AddForm" method="post" action="" style="display: none;">
          <div class="box-body col-md-6">


            <div class="form-group">
               <label for="InputCountry">States</label>
             <select  name="state" class="form-control reqd" autocomplete="off" required>
               <option value="">--SELECT STATES--</option>
          <?php
            $sql1="SELECT * FROM `state` ";
            $res1=mysqli_query($conn,$sql1);
            $options = "";

            while($row3 = mysqli_fetch_array($res1))
            {
            echo   "<option value=".$row3['stname'].">".$row3['stname']."</option>";

            }
            ?>
             </select>
            </div>


            <div class="form-group">
              <label for="InputCountry">Collages Name</label>
              <input type="text" name="colleage_name" id="colleage_name" class="form-control reqd" placeholder="Collages Name">
            </div>
            

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

  
<?php include_once("inc/footer.php") ?>
<script type="text/javascript">
  $("#addnew").click(function(){
   $('#AddForm').show(); 
   var clgnam=$("#colleage_nameu").val();
   $('#colleage_name').val(clgnam);
  });
  
</script>