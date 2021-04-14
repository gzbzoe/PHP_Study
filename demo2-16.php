<?php
	//递归-----循环  数据结构 栈
	//1+2+3+....+n
	function sum($n)
	{
		if($n==1)
		{
			return 1;
		}
		$temp=sum($n-1);
		return $temp+$n;
	}
	echo "sum=".sum(100);
?>