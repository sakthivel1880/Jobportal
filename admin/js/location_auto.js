
$(document).ready(function(){
	$(document).click(function(){
		$("#location_name").fadeOut('slow');
	});
	$("#location").focus();
	var offset = $("#location").offset();
	var width = $("#location").width()-2;
	$("#location_name").css("left",offset.left); 
	$("#location_name").css("width",width);
	$("#location").keyup(function(event){
		 //alert(event.keyCode);
		 var keyword = $("#location").val();
		 if(keyword.length)
		 {
			 if(event.keyCode != 40 && event.keyCode != 38 && event.keyCode != 13)
			 {
				 $("#loading").css("visibility","visible");
				 $.ajax({
				   type: "POST",
				   url: "location_auto.php",
				   data: "data="+keyword,
				   success: function(msg){	
					if(msg != 0)
					  $("#location_name").fadeIn("slow").html(msg);
					else
					{
					  $("#location_name").fadeIn("slow");	
					  $("#location_name").html('<div style="text-align:left;">No Matches Found</div>');
					}
					$("#loading").css("visibility","hidden");
				   }
				 });
			 }
			 else
			 {
				switch (event.keyCode)
				{
				 case 40:
				 {
					  found = 0;
					  $("li").each(function(){
						 if($(this).attr("class") == "selected")
							found = 1;
					  });
					  if(found == 1)
					  {
						var sel = $("li[class='selected']");
						sel.next().addClass("selected");
						sel.removeClass("selected");
					  }
					  else
						$("li:first").addClass("selected");
					 }
				 break;
				 case 38:
				 {
					  found = 0;
					  $("li").each(function(){
						 if($(this).attr("class") == "selected")
							found = 1;
					  });
					  if(found == 1)
					  {
						var sel = $("li[class='selected']");
						sel.prev().addClass("selected");
						sel.removeClass("selected");
					  }
					  else
						$("li:last").addClass("selected");
				 }
				 break;
				 case 13:
					$("#location_name").fadeOut("slow");
					$("#location").val($("li[class='selected'] a").text());
				 break;
				}
			 }
		 }
		 else
			$("#location_name").fadeOut("slow");
	});
	$("#location_name").mouseover(function(){
		$(this).find("li a:first-child").mouseover(function () {
			  $(this).addClass("selected");
		});
		$(this).find("li a:first-child").mouseout(function () {
			  $(this).removeClass("selected");
		});
		$(this).find("li a:first-child").click(function () {
			  $("#location").val($(this).text());
			  $("#location_name").fadeOut("slow");
		});
	});
});