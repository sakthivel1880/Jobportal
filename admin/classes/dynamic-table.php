<?php
class DynamicTables
{
	public static function getTableColumns($TabName)
	{
		$sqlb = "SHOW COLUMNS FROM ".$TabName;
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysql_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
    }
	public static function getMyAccount($uid="")
	{
		$sqlb = "select * from admin";
		if($uid!="")
		{
		  $sqlb.=" where UId='".$Uid."'"; 
		} 
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata[]=array();
		if($numb>0)
		{	
			while($rowb=mysql_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
    }
	
	public static function getSettings($sid="")
	{
		 global $mysql;
		$sqlb = "select * from  5jc_settings";
		if($sid!="")
		{
		  $sqlb.=" where SId='".$sid."'"; 
		}
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
    }
	public static function getCountry($couid="")
	{
		 global $mysql;
		$sqlb = "select * from  5jc_country";
		if($couid!="")
		{
		  $sqlb.=" where CouId='".$couid."'"; 
		}
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
    }
	public static function getState($stid="")
	{
		 global $mysql;
		$sqlb = "select * from  5jc_state";
		if($stid!="")
		{
		  $sqlb.=" where StId='".$stid."'"; 
		}
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
    }
	public static function getStateByCountry($couid="",$stid="")
	{
		 global $mysql;
		$sqlb = "select * from  5jc_state where status='1'";
		if($stid!="")
		{
		  $sqlb.=" and StId='".$stid."'"; 
		}
		if($couid!="")
		{
		  $sqlb.=" and CouId='".$couid."'"; 
		}
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
    }
	public static function getCity($ctid="")
	{
		 global $mysql;
		$sqlb = "select * from  5jc_city";
		if($ctid!="")
		{
		  $sqlb.=" where CtId='".$ctid."'"; 
		}
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
    }
	public static function getCityByState($stid="",$ctid="")
	{
		 global $mysql;
		$sqlb = "select * from  5jc_city where status='1'";
		if($ctid!="")
		{
		  $sqlb.=" and CtId='".$ctid."'"; 
		}
		if($stid!="")
		{
		  $sqlb.=" and StId='".$stid."'"; 
		}
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
    }
	public static function getBdos($usid="")
	{
		 global $mysql;
		$sqlb = "select * from  5jc_bdos";
		if($usid!="")
		{
		  $sqlb.=" where UsId='".$usid."'"; 
		}
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
    }
	public static function getCategoryBySlug($pcid="")
	{
		global $mysql;
		$sqlb = "select * from product_category";
		if($pcid!="")
		{
		  $sqlb.=" where slug='".$pcid."'"; 
		}
		$sqlb.=" ORDER BY PCId DESC "; 
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
	}
	public static function getHomeCategory($pcid="")
	{
		global $mysql;
		$sqlb = "select * from product_category where DisplayHome='1'";
		if($pcid!="")
		{
		  $sqlb.=" and PCId='".$pcid."'"; 
		}
		$sqlb.=" ORDER BY PCId DESC "; 
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
	}
	public static function getParentCategory($pcid="")
	{
		global $mysql;
		$sqlb = "select * from product_category where ParentId='0'";
		$sqlb.=" ORDER BY PCId DESC "; 
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{
			
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
	}
	public static function getChildCategories($paid="")
	{
		global $mysql;
		$sqlb = "select * from product_category";
		if($paid!="")
		{
		  $sqlb.=" where ParentId='".$paid."'"; 
		}
		$sqlb.=" ORDER BY PCId DESC "; 
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
	}
	public static function getProductsByCategory($pcid="",$pid="")
	{
		global $mysql;
		$sqlb = "select * from products where PId!='0'";
		if($pcid!="")
		{
		  $sqlb.=" and PCId='".$pcid."'";
		}
		if($pid!="")
		{
		  $sqlb.=" and PId='".$pid."'";
		}
		$sqlb.=" ORDER BY PId DESC "; 
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
	}
	public static function getPage($pid="")
	{
		global $mysql;
		$sqlb = "select * from page where PGId!='0'";
		if($pid!="")
		{
		  $sqlb.=" and PGId='".$pid."'";
		}
		$sqlb.=" ORDER BY PGId DESC "; 
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
	}
	public static function getPageBySlug($pid="")
	{
		global $mysql;
		$sqlb = "select * from page where PGId!='0'";
		if($pid!="")
		{
		  $sqlb.=" and slug='".$pid."'";
		}
		$sqlb.=" ORDER BY PGId DESC "; 
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
	}
	public static function getProducts($pid="")
	{
		global $mysql;
		$sqlb = "select * from products";
		if($pid!="")
		{
		  $sqlb.=" where PId='".$pid."'"; 
		}
		$sqlb.=" ORDER BY PId DESC "; 
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
	}
	public static function getProductsBySlug($pid="")
	{
		global $mysql;
		$sqlb = "select * from products";
		if($pid!="")
		{
		  $sqlb.=" where slug='".$pid."'"; 
		}
		$sqlb.=" ORDER BY PId DESC "; 
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
	}
	public static function getAttribute($pcid="")
	{
		global $mysql;
		$sqlb = "select * from product_attribute";
		if($pcid!="")
		{
		  $sqlb.=" where ATId='".$pcid."'"; 
		}
		$sqlb.=" ORDER BY ATId DESC "; 
		$resb = mysqli_query($mysql,$sqlb);
		$numb = $resb->num_rows;
		
		$querydata=array();
		if($numb>0)
		{	
			while($rowb=mysqli_fetch_assoc($resb))
			{
				$querydata[]=$rowb;
			}
			
		}
		return $querydata;
	}
		
	
}
?>