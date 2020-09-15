<!DOCTYPE html>
<html>
<head>
	<title>image ajax</title>
	
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

</head>
<body>
<div class="MainForm">
	<h1>Upload Image With Image Preview Using PHP</h1>
	<form method="post" enctype="multipart/form-data" id="Myform">
    	<label>Choose your file</label>
		<input type="file" id="img1" name="mpic_lans"><br>
		<input type="file" id="img1" name="wpic_lans"><br>
		<input type="name" id="name" name="name" class="name"><br>
		<input type="submit" id="mysubmit" name="submit" value="Upload Image" class="btn btn-primary"/>
	</form>	
	<div class="myimg"></div>
</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

$("#mysubmit").click( function() {
	var formData = new FormData($('#Myform')[0]);
	var name=$(".name").val();
	alert(name);
	$.ajax({
		   url: 'post.php',
		   data: formData,
		   async: false,
		   contentType: false,
		   processData: false,
		   cache: false,
		   type: 'POST',
		   success: function(data)
		   {
			   //alert(data);
			   $('.myimg').empty();
			   $('.myimg').append(data);
		   },
	});    
	return false;    
});
</script>