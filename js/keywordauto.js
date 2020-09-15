
$( "#keyword" ).autocomplete({
	source: function( request, response ) {
	 // Fetch data
	 $.ajax({
	  url: "keywordauto.php",
	  type: 'post',
	  dataType: "json",
	  data: {
	   search: request.term
	  },
	  success: function( data ) {
	   response(data);
	   console.log(data);
	  }
	 });
	},
	select: function (event, ui) {
	 // Set selection
	 $('#keyword').val(ui.item.label);
	 return false;
	}
   });

  
 $( "#location" ).autocomplete({
	source: function( request, response ) {
	 // Fetch data
	 $.ajax({
	  url: "locationauto.php",
	  type: 'post',
	  dataType: "json",
	  data: {
	   search: request.term
	  },
	  success: function( data ) {
	   response( data );
	  }
	 });
	},
	select: function (event, ui) {
	 // Set selection
	 $('#location').val(ui.item.label);
	 return false;
	}
   });

   $( "#institude" ).autocomplete({
	source: function( request, response ) {
	 // Fetch data
	 $.ajax({
	  url: "clgauto.php",
	  type: 'post',
	  dataType: "json",
	  data: {
	   search: request.term
	  },
	  success: function( data ) {
	   response( data );
	   console.log(data);
	  }
	 });
	},
	select: function (event, ui) {
	 // Set selection
	 $('#institude').val(ui.item.label);
	 return false;
	}
   });

   $( "#skills" ).autocomplete({
	source: function( request, response ) {
	 // Fetch data
	 $.ajax({
	  url: "skillauto.php",
	  type: 'post',
	  dataType: "json",
	  data: {
	   search: request.term
	  },
	  success: function( data ) {
	   response( data );
	   console.log(data);
	  }
	 });
	},
	select: function (event, ui) {
	 // Set selection
	 $('#skills').val(ui.item.label);
	 return false;
	}
   });

   $( "#department" ).autocomplete({
	source: function( request, response ) {
	 // Fetch data
	 $.ajax({
	  url: "departauto.php",
	  type: 'post',
	  dataType: "json",
	  data: {
	   search: request.term
	  },
	  success: function( data ) {
	   response( data );
	   console.log(data);
	  }
	 });
	},
	select: function (event, ui) {
	 // Set selection
	 $('#department').val(ui.item.label);
	 return false;
	}
   });

   $( "#org" ).autocomplete({
	source: function( request, response ) {
	 // Fetch data
	 $.ajax({
	  url: "orgauto.php",
	  type: 'post',
	  dataType: "json",
	  data: {
	   search: request.term
	  },
	  success: function( data ) {
	   response( data );
	   console.log(data);
	  }
	 });
	},
	select: function (event, ui) {
	 // Set selection
	 $('#org').val(ui.item.label);
	 return false;
	}
   });