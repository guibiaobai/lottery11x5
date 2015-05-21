<?php

	$str=$_POST['touzhu'];
	getheader($str);
	function getheader($str)
	{
		$s=substr($str,0,3);
		$body=substr($str,3,strlen($str));
		$ll=preg_split("/#/",$body);
		$lastarray=array('1,2,3,4');
		foreach ($ll as $key=>$value)
		{
			if(isset($value)&&!empty($value)){
				$l2=preg_split("/-/",$value);
				$tstr="";
				foreach ($l2 as $k2=>$v2)
				{
					if(isset($v2)&&!empty($v2))
					{
						$tstr.=$v2;
						$tstr.=",";
					}
				}
				array_push($lastarray,"$tstr");
		}
		}
		print_r($lastarray);
		
	}
	
	



?>