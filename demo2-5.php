<?php
	//参数值传递
	//数据类型：
	//         简单数据类型 （int float double...）
	//         引用数据类型(类类型)（对象）
	function demo($arg){
		$arg=200;
	}
	$var=100;
	demo($var);
	echo $var;

	function demo2(&$arg2){
		$arg2=200;
	}
	$var2=100;
	demo2($var2);
	echo $var2;
?>