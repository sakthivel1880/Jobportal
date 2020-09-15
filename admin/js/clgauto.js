
$(document).ready(function(){
	$(document).click(function(){
		$("#institude_name").fadeOut('slow');
	});
	$("#institude").focus();
	var offset = $("#institude").offset();
	var width = $("#institude").width()-2;
	$("#institude_name").css("left",offset.left); 
	$("#institude_name").css("width",width);
	$("#institude").keyup(function(event){
		 //alert(event.keyCode);
		 var keyword = $("#institude").val();
		 if(keyword.length)
		 {
			 if(event.keyCode != 40 && event.keyCode != 38 && event.keyCode != 13)
			 {
				 $("#loading").css("visibility","visible");
				 $.ajax({
				   type: "POST",
				   url: "clgauto.php",
				   data: "data="+keyword,
				   success: function(msg){	
					if(msg != 0)
					  $("#institude_name").fadeIn("slow").html(msg);
					else
					{
					  $("#institude_name").fadeIn("slow");	
					  $("#institude_name").html('<div style="text-align:left;">No Matches Found</div>');
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
					$("#institude_name").fadeOut("slow");
					$("#institude").val($("li[class='selected'] a").text());
				 break;
				}
			 }
		 }
		 else
			$("#institude_name").fadeOut("slow");
	});
	$("#institude_name").mouseover(function(){
		$(this).find("li a:first-child").mouseover(function () {
			  $(this).addClass("selected");
		});
		$(this).find("li a:first-child").mouseout(function () {
			  $(this).removeClass("selected");
		});
		$(this).find("li a:first-child").click(function () {
			  $("#institude").val($(this).text());
			  $("#institude_name").fadeOut("slow");
		});
	});
});