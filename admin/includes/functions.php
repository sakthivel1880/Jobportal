<?php
include_once("connections.php");
include_once("classes/dynamic-table.php");

ob_start();


session_start();
global $QueryClass;
$QueryClass= new DynamicTables();

function getCountryList($ids=""){
	global $QueryClass;
	$CountryRows=$QueryClass->getCountry();
	//print_r($ids);
	if(count($CountryRows)>0)
	{
		 $cnt=0;
		foreach($CountryRows as $value)
		{
			
			if(!empty($value))
			{
				$selected="";
				if($ids!=""){
					if($value['CouId']==$ids){
						$selected="selected=selected";
					}
				}
				echo '<option '.$selected.' value="'.$value['CouId'].'">'.$value['CName'].'</option>';
			}
		}
	}
	
}
function getStateList($couid="",$ids=""){
	global $QueryClass;
	$StateRows=$QueryClass->getStateByCountry($couid,$ids);
	//print_r($ids);
	$options="";
	if(count($StateRows)>0)
	{
		 $cnt=0;
		foreach($StateRows as $value)
		{
			
			if(!empty($value))
			{
				$selected="";
				if($ids!=""){
					if($value['StId']==$ids){
						$selected="selected=selected";
					}
				}
				$options.='<option '.$selected.' value="'.$value['StId'].'">'.$value['StateName'].'</option>';
				
			}
		}
	}
	
	return $options;
	
}
function getCityList($stid="",$ids=""){
	global $QueryClass;
	$CityRows=$QueryClass->getCityByState($stid,$ids);
	//print_r($ids);
	$options="";
	if(count($CityRows)>0)
	{
		 $cnt=0;
		foreach($CityRows as $value)
		{
			
			if(!empty($value))
			{
				$selected="";
				if($ids!=""){
					if($value['CtId']==$ids){
						$selected="selected=selected";
					}
				}
				$options.='<option '.$selected.' value="'.$value['CtId'].'">'.$value['CityName'].'</option>';
				
			}
		}
	}
	
	return $options;
	
}

function getAttributeList($id=""){
	global $QueryClass;
	$AttributeRows=$QueryClass->getAttribute();
	
	if(count($AttributeRows)>0)
	{
		 $cnt=0;
		foreach($AttributeRows as $value)
		{
			
			if(!empty($value))
			{
				$selected="";
				if($id==$value['PCId']){
					$selected="selected=selected";
				}
				echo '<option '.$selected.' value="'.$value['ATId'].'">'.$value['AttrName'].'</option>';
			}
		}
	}
	
}
function getAttributeMultipleList($ids=""){
	global $QueryClass;
	$AttributeRows=$QueryClass->getAttribute();
	print_r($ids);
	if(count($AttributeRows)>0)
	{
		 $cnt=0;
		foreach($AttributeRows as $value)
		{
			
			if(!empty($value))
			{
				$selected="";
				if($ids!=""){
					if(in_array($value['ATId'],$ids)){
						$selected="selected=selected";
					}
				}
				echo '<option '.$selected.' value="'.$value['ATId'].'">'.$value['AttrName'].'</option>';
			}
		}
	}
	
}
function getAttributeListValues($PCId="",$AttrData){
	$sqlgrp="SELECT * FROM  product_category where PCId='".$PCId."'";
	$resgrp= mysqli_query($mysql,$sqlgrp);
	$numgrp=$resgrp->num_rows;
	$rowb=mysqli_fetch_array($resgrp);
	if($rowb['AttrIds']!=""){
		$AttrIds=unserialize($rowb['AttrIds']);
		foreach($AttrIds as $AttrId){
			$sqlattr="SELECT * FROM  product_attribute where ATId='".$AttrId."'";
			$resattr= mysqli_query($mysql,$sqlattr);
			$numattr=$resattr->num_rows;
			if($numattr>0){
				while($rowb=mysqli_fetch_array($resattr)){
					$content.='<div class="PrdAttrFields"><div class="form-group">';
					switch($rowb['AttrType']){
						case 'text':
							$content.='<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">'.$rowb['AttrName'].'</label><div class="col-md-6 col-sm-6 col-xs-12"><input type="text" id="'.$rowb['AttrFieldName'].'" title="'.$rowb['AttrName'].'" name="'.$rowb['AttrFieldName'].'" placeholder="'.$rowb['AttrName'].'"  class="form-control col-md-7 col-xs-12"></div>';
							break;
						case 'textarea':
							$content.='<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">'.$rowb['AttrName'].' <span
							class="required">*</span></label><div class="col-md-6 col-sm-6 col-xs-12"><textarea id="'.$rowb['AttrFieldName'].'" title="'.$rowb['AttrName'].'" name="'.$rowb['AttrFieldName'].'" placeholder="'.$rowb['AttrName'].'"  class="form-control col-md-7 col-xs-12"></textarea></div>';
							break;
						case 'checkboxvalue':
							$content.='<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">'.$rowb['AttrName'].' <span
							class="required">*</span></label><div class="col-md-6 col-sm-6 col-xs-12">';
							$values=explode(',',$rowb['AttrLabels']);
								foreach($values as $value){
									$content.='<input type="checkbox" id="'.$rowb['AttrName'].'" title="'.$rowb['AttrName'].'" name="'.$value.'"   class="form-control col-md-2 col-xs-2"> '.$value;
								}
								
							$content.='</div>';
							break;
						case 'radiovalue':
							$content.='<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">'.$rowb['AttrName'].' <span
							class="required">*</span></label><div class="col-md-6 col-sm-6 col-xs-12">';
							$values=explode(',',$rowb['AttrLabels']);
								foreach($values as $value){
									$content.='<input type="checkbox" id="'.$rowb['AttrName'].'" title="'.$value.'" name="'.$value.'"   class="form-control col-md-6 col-xs-6"> '.$value;
								}
								
							$content.='</div>';
							break;
						case 'selectvalue':
							$content.='<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">'.$rowb['AttrName'].' <span
							class="required">*</span></label><div class="col-md-6 col-sm-6 col-xs-12"><select id="heard" class="form-control" name="'.$rowb['AttrFieldName'].'" title=""'.$rowb['AttrName'].'"> <option value="">Choose..</option>';
							$values=explode(',',$rowb['AttrLabels']);
								foreach($values as $value){
									$content.='<option value="'.$value.'">'.$value.'</option>';
								}
								
							$content.='</select></div>';
							break;
						default:
							$content.='<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">'.$rowb['AttrName'].' <span
							class="required">*</span></label><div class="col-md-6 col-sm-6 col-xs-12"><input type="text" id="'.$rowb['AttrName'].'" title="'.$rowb['AttrName'].'" name="'.$rowb['AttrName'].'e" placeholder="'.$rowb['AttrName'].'"  class="form-control col-md-7 col-xs-12"></div>';
							break;
							
					}
					$content.='</div></div>';
				}
			}
			
		}
	}

}


function getCategoriesList($id=""){
	global $QueryClass;
	$ParentCategoryRows=$QueryClass->getCategory();
	
	if(count($ParentCategoryRows)>0)
	{
		 $cnt=0;
		foreach($ParentCategoryRows as $value)
		{
			
			if(!empty($value))
			{
				$selected="";
				if($id==$value['PCId']){
					$selected="selected=selected";
				}
				echo '<option '.$selected.' value="'.$value['PCId'].'">'.$value['Name'].'</option>';
			}
		}
	}
	
}
function getParentCategoriesList($id=''){
	global $QueryClass;
	$ChildCategoriesRows=$QueryClass->getParentCategory();
	if(count($ChildCategoriesRows)>0)
	{
		 $cnt=0;
		foreach($ChildCategoriesRows as $value)
		{

			if(!empty($value))
			{
				
				echo '<option value="'.$value['PCId'].'"> -'.$value['Name'].'</option>';
				getChildCategoriesList($value['PCId']);
				
			}
		}
	}
	
}
function getChildCategoriesList($id){
	global $QueryClass;
	$ChildCategoriesRows=$QueryClass->getChildCategories($id);
	if(count($ChildCategoriesRows)>0)
	{
		 $cnt=0;
		foreach($ChildCategoriesRows as $value)
		{

			if(!empty($value))
			{
				
				echo '<option value="'.$value['PCId'].'"> -'.$value['Name'].'</option>';
				
			}
		}
	}
	
}
/*----------General Functions ---------*/
function isAdmin()
{
   
	if($_SESSION['_adminid']==""){
		header("Location:login.php");
		die();
	}
}
function isUserType($arg="")
{
   
	if($_SESSION['_usertype']!=$arg){
		header("Location:index.php");
		die();
	}
}
function GeneratePassword()
{
	$alpha = "abcdefghijklmnopqrstuvwxyz";
	$alpha_upper = strtoupper($alpha);
	$numeric = "0123456789";
	$special = ".-+=_,!@$#*%<>[]{}";
	$chars = "";
	 $chars = $alpha . $alpha_upper . $numeric;
    $length = 9;
	$len = strlen($chars);
	$pw = '';
	 
	for ($i=0;$i<$length;$i++)
			$pw .= substr($chars, rand(0, $len-1), 1);
	 
	// the finished password
	$pw = str_shuffle($pw);
	
	return $pw;
}

function fnResize($filePath,$file,$filename,$width,$height)
{
	$resizeObj = new resize($filePath.$file);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage($width, $height, 'crop');

	// *** 3) Save image
	$newfilename=makeUrl($filename).".jpg";
	$save=$filePath.$newfilename;
	$resizeObj -> saveImage($save, 100);
	del_img($filePath,$file);
	return $newfilename;
}
function ordinal($number) {
    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
    if ((($number % 100) >= 11) && (($number%100) <= 13))
        return $number. 'th';
    else
        return $number. $ends[$number % 10];
}

function limited_string($content,$length){
  $content=strip_tags($content);
  if(strlen($content)<=$length)
  {
    echo $content;
  }
  else
  {
    $content=substr($content,0,$length) . '...';
    echo $content;
  }
}

function post_img($fileName,$tempFile,$targetFolder,$renameFile="")
{	
 	if ($fileName!="")
	{
		if(!(is_dir($targetFolder)))
			mkdir($targetFolder);
		$counter=0;
		$NewFileName=$fileName;
		if($renameFile!="")
		{
			$ext=explode(".",$NewFileName);
			$NewFileName=$renameFile.".".$ext[1];
		}
		$NewFileName=str_replace(",","-",$NewFileName);
		$NewFileName=str_replace(" ","-",$NewFileName);	
		if(file_exists($targetFolder."/".$NewFileName))
		{
			do
			{ 
				$counter=$counter+1;
				$NewFileName=$counter."".$NewFileName;
			}
			while(file_exists($targetFolder."/".$NewFileName));
		}
		copy($tempFile, $targetFolder."/".$NewFileName);
		
		return $NewFileName;
	}
}
function del_img($targetfolder,$filname)
{
	if (file_exists($targetfolder.$filname))
	{
		unlink($targetfolder.$filname);
	}
}	 

function makeUrl($value)
{
	$url=strtolower($value);
	$url=preg_replace("/[^a-z0-9]+/i", "-", $url);
	
	$len=strlen($url);
	if(substr($url,($len-1),$len)=="-")
		$url=substr($url,0,($len-1));	
	if($len>64)
		$url=substr($url,0,64);	
	
	return $url;
}

?>