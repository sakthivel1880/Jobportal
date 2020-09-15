
function StatusAction(Id)
{
	 $('#'+Id+'btn').trigger('click');
	 if($('#'+Id).is(":checked"))
	 {
		 $('#'+Id+'label').text("Active");	 
	 }
	 else
	 {
		 $('#'+Id+'label').text("Inactive");
	 }
	 
}

function fnStatusNo(Id)
{
	 
	$('#'+Id).trigger('click'); 
	
}
function fnEmptyCheckEmail(CId,EId)
{
	 
	var name=($("#"+CId).attr("name"));
	var id=($("#"+EId).attr("id"));			
	var title=($("#"+EId).attr("title"));
	var type = ($("#"+CId).attr("type"));
	var display = ($("#"+EId).css('display'));
	var obj = ($("#"+EId).val());
	var ckobj = ($("#"+CId).val());

	if(ckobj=="1")
	{
		if(obj=="" || obj=="<br>"){
			
				
				$("#error_"+name).remove();
				$("#"+CId).parent('div.'+type).after('<span class="error" id="error_'+name+'"><label for="form1CardHolderName" class="error">Please fill Email Box.</label></span>');
								
				$("#"+CId).parent('div').addClass("has-error");
				$("#"+EId).addClass("reqd");
				
				return true;
			
		}
		else
		{
		
			var exp = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			if (!exp.test(obj)){
				//alert("Please enter a valid Email.");
				
				$("#error_"+name).remove();
				$("#"+CId).parent('div.'+type).after('<span class="error" id="error_'+name+'"><label for="form1CardHolderName" class="error">Please enter a valid Email.</label></span>');
				$("#"+EId).addClass("reqd");
				$("#"+CId).parent('div').addClass("has-error");
				return true;
			}
			else
			{
				$("#error_"+name).remove();
				$("#error"+name).remove();
									
				$("#"+CId).parent('div').removeClass("has-error");
				$("#"+EId).removeClass("reqd");
				
				return true;
			}
		}
	}
	else
	{
		$("#error_"+name).remove();
		$("#error"+name).remove();
							
		$("#"+CId).parent('div').removeClass("has-error");
		$("#"+EId).removeClass("reqd");
		
		return true;
	}
	
			
	
}


function searchTable(tabId,arg1,arg2)
{
	var inputVal=$('#'+arg1).val();
	var columVal=$('#'+arg2).val();
	var table = $('#'+tabId);
	var Colum="";
	if(columVal!="")
	{
		Colum=":eq("+columVal+")";
	}
	table.find('tr').each(function(index, row)
	{
		var allCells = $(row).find('td'+Colum);
		if(allCells.length > 0)
		{
			var found = false;
			allCells.each(function(index, td)
			{
				var regExp = new RegExp(inputVal, 'i');
				if(regExp.test($(td).text()))
				{
					found = true;
					return false;
				}
			});
			if(found == true)$(row).show();else $(row).hide();
		}
	});
}
/*function searchTable(tabId,arg1,arg2 ) {
	var inputVal=$('#'+arg1).val();
	var i=$('#'+arg2).val();
	var table = $('#'+tabId);
	$('#'+tabId).dataTable( {
	 "bServerSide": true,
  "searchCols": [
    null,
    { "search": "search" },
    null,
    { "search": "0", "escapeRegex": false }
  ],
   "bFilter": false,
  "bDestroy": true
});

}*/
function fnFieldValue(id, val) {
    document.getElementById(id).value = val;
}
function fileImageChange(FileId,TextId){
 document.getElementById(TextId).value = document.getElementById(FileId).value;
}
function fnShowTag(id) {
	
	if(id=="levday")
	{
		 $('#levdate').fadeOut();
		 $('#levday').addClass("reqd");
	}
	
	if(id=="levdate")
	{
		 $('#levday').fadeOut();
		 $('#levday').removeClass("reqd");
	}
    $('#'+id).fadeIn();
}
function PrintPopup(action)
{
	window.open('print.php?action='+action,'PrintWindow','width=770,height=600,scrollbars=yes');
}
function ExportPopup(action)
{
	window.open('export.php?action='+action,'ExportWindow','width=770,height=600');
}
function SearchPrintPopup(action,url)
{
	window.open('print.php?action='+action+url,'PrintWindow','width=770,height=600,scrollbars=yes');
}
function DynamicPrintPopup(img)
{
	VoucherPrint(img);
}

function DocumentPrintPopup(img)
{
	VoucherPrint(img);
}

function VoucherPrint(source) {

	var content="<html><head><script>function step1(){\n" +
			"setTimeout('step2()', 10);}\n" +
			"function step2(){window.print();window.close()}\n" +
			"</scri" + "pt></head><body onload='step1()'>\n" +
			"<img src='" + source + "' /></body></html>";
	Pagelink = "about:blank";
		var img = new Image();
	img.onload = function() {
		
		
		var prturl="width="+(this.width + 5)+",height="+(this.height + 5)+",scrollbars=yes"
		var pwa = window.open(Pagelink,'PrintWindow',prturl);
		pwa.document.open();
		pwa.document.write(content);
		pwa.document.close();
	}
	
	img.src = source;
	
	
}
function SearchExportPopup(action,url)
{
	window.open('export.php?action='+action+url,'ExportWindow','width=770,height=600');
}
function windowClose(){
	window.close();
}
//////////////GENRAL FUNCTION/////////////////////////////
function Trim(nStr){
	return nStr.replace(/(^\s*)|(\s*$)/g,"");
}



function checkEmail1(obj,name)
{
	var exp = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if (!exp.test(obj.value)){
		//alert("Please enter a valid Email.");
		obj.focus();
		$("#error_"+name).remove();
		$("#"+obj.id).after('<span class="error" id="error_'+name+'"><label for="form1CardHolderName" class="error">Please enter a valid Email.</label></span>');
		
		$("#"+obj.id).parent('div').addClass("has-error");
		result="Yes";
	}
	else
	{
		$("#error_"+name).remove();
		$("#error"+name).remove();
		
		$("#"+obj.id).parent('div').removeClass("has-error");
		
		result="No";		
	}
    return result;
}

function ComparePassword(obj,name) { 
	
	
	var password = name.slice(1);
	if(document.getElementById(password).value!=obj.value)
	{
		obj.focus();
		//$("#error_"+name).remove();
		$("#"+obj.id).after('<span class="error" id="error_'+name+'"><label for="form1CardHolderName" class="error">Your Password does not matched</label></span>');
		
		$("#"+obj.id).parent('div').addClass("has-error");
		result="Yes";
	}
	else
	{
		//checkEmailExists1(obj,name);
		$("#error_"+name).remove();
		$("#error"+name).remove();
		
		$("#"+obj.id).parent('div').removeClass("has-error");
		result="No";
		
	}
	return result; 

}
function isNull1(obj,msg,name)
{
	//alert(obj.type);
	obj1= Trim(obj.value);
	var result;
	if (obj1=="" || obj1=="<br>"){
		if(obj.type!="select-one" && obj.type!="file")
		{
			obj.focus();
			$("#error_"+name).remove();
			$("#"+obj.id).before('<i class="icon-exclamation"></i>');
			$("#"+obj.id).after('<span class="error" id="error_'+name+'"><label for="form1CardHolderName" class="error">Please enter '+msg+'.</label></span>');
			
			$("#"+obj.id).parent('div').addClass("has-error");
		}
		else
		{
			obj.focus();
			$("#error_"+name).remove();
			$("#"+obj.id).after('<span class="error" id="error_'+name+'"><label for="form1CardHolderName" class="error">Please select  '+msg+'.</label></span>');
			
			$("#"+obj.id).parent('div').addClass("has-error");
		}
		result="Yes";
	}
	else {
		
		
			
		if(msg=="Email" || msg=="Email Address" || msg=="E-Mail")
		{
			result=checkEmail1(obj,name);
		}
		else
		{
			$("#error_"+name).remove();
			
			$("#"+obj.id).parent('div').removeClass("has-error");
			result="No";
		}
		if(msg=="Amount" || msg=="Salary Amount" || msg.search("Amount") >= 0 || msg.search("Price") >= 0 || msg.search("Fee") >= 0)
		{
			result=PriceValidate(obj,msg,name);
		}
		else
		{
			$("#error_"+name).remove();
			
			$("#"+obj.id).parent('div').removeClass("has-error");
			result="No";
		}
		if(msg=="Confirm Password" || msg=="Retype Password")
		{
			result=ComparePassword(obj,name);
		}
		
		
		
	}

	return result;
}


function AllowNumeric(e)
{
	var iKeyCode = 0;
	if (window.event)
		iKeyCode = window.event.keyCode
	else if (e)
		iKeyCode = e.which;

	if (iKeyCode > 47 && iKeyCode < 58 || iKeyCode == 46 || iKeyCode == 0 || iKeyCode == 8)
	{
		return true
	}
	else
	{
		return false;
	}
} 

function PriceValidate(obj,msg,name)
{
	
		var regex = /^\d+\.\d{2}$/;
       
        if ((obj.value.match(regex))) {
			
			$("#error_"+name).remove();
			
			$("#"+obj.id).parent('div').removeClass("has-error");
			result="No";
          
        }
		else
		{
		obj.focus();
		$("#error_"+name).remove();
		$("#"+obj.id).after('<span class="error" id="error_'+name+'"><label for="form1CardHolderName" class="error">Please enter a valid '+msg+' (eg. XXXX.XX).</label></span>');
		
		$("#"+obj.id).parent('div').addClass("has-error");
		result="Yes";			
		}
	return result;
		
	
	 
} 
function AllowLimit(minm,maxm,id,formid)
{
	var val=$('#'+id).val();
	var msg=$('#'+id).attr( "title" );
	var name=$('#'+id).attr( "name" );
	if(val.length <= (minm-1))
	{
		
		$("#"+formid+" #error_"+name).css("display","block");
		$("#"+formid+" #error_"+name).html("Please provide valid 5 digit " +msg+".");
		$("#"+formid+" #error_"+name).parent('div').addClass('error');
		$('#'+id).addClass("error");
		result="Yes";
	}
	else
	{
		
		$("#"+formid+" #error_"+name).text("");
		$("#"+formid+" #error_"+name).addClass("hide");
		$("#"+formid+" #error_"+name).parent('div').removeClass('error');
		$('#'+id).removeClass("error");
		result="No";
	}
	return result;
}
function AllowPhoneNumber(e)
{
	var iKeyCode = 0;
	if (window.event)
		iKeyCode = window.event.keyCode
	else if (e)
		iKeyCode = e.which;

	if (iKeyCode > 47 && iKeyCode < 58 || iKeyCode == 45 || iKeyCode == 0 || iKeyCode == 8)
	{
		return true
	}
	else
	{
		return false;
	}
} 
function alerts () {
			$("#toggleCSS").attr("href", "alert-box/themes/alertify.default.css");
			alertify.set({
				labels : {
					ok     : "OK",
					cancel : "Cancel"
				},
				delay : 5000,
				buttonReverse : false,
				buttonFocus   : "ok"
			});
		}

/////////GENRAL FUNCTION END///////////////////////////////////////

function fnDelete(ResultId,RowId,action,id,lab)
{
	
$.confirm({
			'title' : 'Delete Confirmation',
			'content'	: lab,
			'buttons' : {
				deleteUser: {
					text: 'Yes',
					action: function () {
						$.ajax({
						   type : "POST",
						   url : "ajax.php?action="+action+"&DElId="+id,
						   contentType: "application/json; charset=utf-8",
						   dataType: 'json',
						   beforeSend : function(){
						   },
						   success: function(data) {
								$("#"+ResultId).show();						
								$.each(data, function(entryIndex, entry){
									$("#Message").remove();
									$("#"+ResultId).before(entry['Message']);
									  $( "tr#"+RowId).remove();
								});         
								$('html, body').animate({ scrollTop: $("#"+ResultId).offset().top }, 500)
								
								
								
						   },
						   
						   cache: false,
						   contentType: false,
						   processData: false
						});
					}
				},
				cancelAction: {
					text: 'Cancel',
					action: function () {
					}
				}
			}
			
			
		});
				   
}

function fnFormValidate(FormId,ResultId,action)
{
	valid="yes"
	var coun1=0;
	var coun=$('#'+FormId+' .reqd:visible:not(div.reqd)').length;
	
	
	
	$('#'+FormId+' .reqd:visible:not(div.reqd)').each(function(i,obj1)
	{
		
			if(coun1!=coun)
			{
				var name=($(this).attr("name"));
				var id=($(this).attr("id"));			
				var title=($(this).attr("title"));
				var type = ($(this).attr("type"));
				var display = ($(this).css('display'));
				
			
					//alert(type);
					if(type=="radio" || type=="checkbox"){
						//if(notChecked(document.adminForm.name,title)){ valid="no"; }
						var InptCou=$('#'+FormId+' input[name="'+name+'"]').length;
						//alert(InptCou);
						if(!($('#'+FormId+' input[name="'+name+'"]').is(":checked"))){
							
							
							
							$("#error_"+name).remove();
							$("#"+id).parent('div.'+type).after('<span class="error" id="error_'+name+'"><label for="form1CardHolderName" class="error">Please select '+title+'.</label></span>');
							
							$("#"+id).parent('div').addClass("has-error");
							coun1=coun1 - InptCou;
						}
						else
						{
							$("#error_"+name).remove();
							$("#error"+name).remove();
							
							$("#"+id).parent('div').removeClass("has-error");
							
							coun1=coun1 + InptCou;
						}
					
						
					}else{
						
						if(isNull1(obj1,title,name)=="Yes"){ coun1--; }else{coun1++;} 
					} 
				
			}
		
	});
	//alert(coun1+"="+coun);
	if(coun1==coun)
	{
		var formData = new FormData($('#'+FormId)[0]);
		$.ajax({
		   type : "POST",
		   url : "ajax.php?action="+action,
		   contentType: "application/json; charset=utf-8",
		   data : formData,
		   async: false,
		   dataType: 'json',
		   beforeSend : function(){
			   $("#"+FormId+" #btn_view").prepend('<img src="img/load.gif" id="loadgif"/>');
			   $("#"+FormId+" #btn_view button").hide();
		   },
		   success: function(data) {
			   	
				$("#"+FormId+" #btn_view #loadgif").hide();
			   $("#"+FormId+" #btn_view button").show();
			   
			  	var scr="On";
				
				$.each(data, function(entryIndex, entry){
						
					
	                   
					   if(entry['Message']!="")
					   {
						  	$("#Message").remove();
							$("#"+FormId).before(entry['Message']);
							if(entry['ResetData']=="Yes"){
								$("#"+FormId)[0].reset();
							}
							$("#Message").delay(3000).fadeOut(2500);
				       }
							  
							
					 
						
					   
	            });  
               if(scr=="On"){   $('html, body').animate({ scrollTop: 0 }, 500); }
				
				
				
		   },
		   
	 	   cache: false,
		   contentType: false,
		   processData: false
		});
	 return false;	  
	}
	else
	{
		return false;
	}
	
	
	
}
function fileUpload(UploadId,UploadFileId){
	
	document.getElementById(UploadFileId).value = document.getElementById(UploadId).value;
	
}
function number_format(number, decimals, decPoint, thousandsSep){
	decimals = decimals || 0;
	number = parseFloat(number);
 
	if(!decPoint || !thousandsSep){
		decPoint = '.';
		thousandsSep = ',';
	}
 
	var roundedNumber = Math.round( Math.abs( number ) * ('1e' + decimals) ) + '';
	var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
	var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
	var formattedNumber = "";
 
 
	return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
}
function onStateList(action,ValId,Result){
	var countryId=$('#'+ValId).val();
	$.ajax({
	   type : "POST",
	   url : "ajax.php?action="+action+"&CouId="+countryId,
	   contentType: "application/json; charset=utf-8",
	   async: true,
	   dataType: 'json',
	   success: function(data) {
			
			$.each(data, function(entryIndex, entry){
					
					$("#Message").remove();
					$("#"+Result).html(entry['Content']);
				   if(entry['Alert']!="Yes")
				   {
					   $("#"+Result).after(entry['Message']);
				   }
						  
						
				 
					
				   
			});  			
			
	   },
	   
	   cache: false,
	   contentType: false
	});
}
function onCityList(action,ValId,Result){
	var stateId=$('#'+ValId).val();
	$.ajax({
	   type : "POST",
	   url : "ajax.php?action="+action+"&StId="+stateId,
	   contentType: "application/json; charset=utf-8",
	   async: true,
	   dataType: 'json',
	   success: function(data) {
			
			$.each(data, function(entryIndex, entry){
					
					$("#Message").remove();
					$("#"+Result).html(entry['Content']);
				   if(entry['Alert']!="Yes")
				   {
					   $("#"+Result).after(entry['Message']);
				   }
						  
						
				 
					
				   
			});  			
			
	   },
	   
	   cache: false,
	   contentType: false
	});
}

	
