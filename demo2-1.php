<?php
	//自定义函数
	define('PI',3.1415);
	function getCircleArea($radius){
		$area =PI*$radius*$radius;
		return $area;
	}
	function sum($a,$b){
		return $a+$b;
	}
	$r=9;
	$s=getCircleArea($r);
	echo "圆的面积：".$s;
	echo "<br>";
	echo sum(10,20);
	$var=100;
	function test(){
		global $var;  //定义全局变量
		echo "var的值为：".$var;  //var不是全局变量 取不到
	}
	test();
?>