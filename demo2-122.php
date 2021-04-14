<?php
	//回调函数
	//过滤掉0-100中某些数 非3的倍数
	//过滤器
	//扩充两个条件
	function filter($fun) 
	{
		for($i=0;$i<=100;$i++)
		{
			if(call_user_func_array($fun, array($i)))continue;
			echo $i." ";
		}
	}
	function one($num){
		return $num%3==0;
	}
	//过滤0-100之间非回文的数 11 22 33...
	function two($num)
	{
		return $num==strrev($num);
	}
	//过滤0-100之间的非素数
	function three($num)
	{
		if($num==2)
		{
			return false;
		}
		for($i=2;$i<=sqrt($num);$i++)
		{
			if($num%$i==0){
				return false;
			}
		}
		return true;
	}
	//过滤0-100之间的     非5和3的倍数
	function four($num)
	{	
		return ($num%5==0 && $num%3==0);
		
	}
	filter('one');
	echo "-------------------------<br>";
	filter('two');
	echo "-------------------------<br>";
	filter('three');
	echo "-------------------------<br>";
	filter('four');
?>