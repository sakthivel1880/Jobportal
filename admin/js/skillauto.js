
$(document).ready(function(){
	$(document).click(function(){
		$("#skill_name").fadeOut('slow');
	});
	$("#skills").focus();
	var offset = $("#skills").offset();
	var width = $("#skills").width()-2;
	$("#skill_name").css("left",offset.left); 
	$("#skill_name").css("width",width);
	$("#skills").keyup(function(event){
		 //alert(event.keyCode);
		 var keyword = $("#skills").val();
		 if(keyword.length)
		 {
			 if(event.keyCode != 40 && event.keyCode != 38 && event.keyCode != 13)
			 {
				 $("#loading").css("visibility","visible");
				 $.ajax({
				   type: "POST",
				   url: "skillauto.php",
				   data: "data="+keyword,
				   success: function(msg){	
					if(msg != 0)
					  $("#skill_name").fadeIn("slow").html(msg);
					else
					{
					  $("#skill_name").fadeIn("slow");	
					  $("#skill_name").html('<div style="text-align:left;">No Matches Found</div>');
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
					$("#skill_name").fadeOut("slow");
					$("#skills").val($("li[class='selected'] a").text());
				 break;
				}
			 }
		 }
		 else
			$("#skill_name").fadeOut("slow");
	});
	$("#skill_name").mouseover(function(){
		$(this).find("li a:first-child").mouseover(function () {
			  $(this).addClass("selected");
		});
		$(this).find("li a:first-child").mouseout(function () {
			  $(this).removeClass("selected");
		});
		$(this).find("li a:first-child").click(function () {
			  $("#skills").val($(this).text());
			  $("#skill_name").fadeOut("slow");
		});
	});
});