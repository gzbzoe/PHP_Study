<?php
//函数的局部变量
	$one=100;//全局变量
	$two=200;
	function demo()
	{
		global $one,$two;  
		//$two=100;  //局部变量
		echo "运算结果为：".($one+$two)."<br>";
	}

	function demo2(){
		echo "运算结果为:".($GLOBALS['one']+$GLOBALS['two']);
	}
	demo();
	demo2();
	//echo "运算结果为：".($one+$two)."<br>";
?>