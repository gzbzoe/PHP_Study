<?php
	//trim()  去掉字符串多余的空格
	$str1="   LAMP  ";
	echo strlen($str1);
	//去掉左边空格
	echo strlen(ltrim($str1));
	echo strlen(rtrim($str1));
	echo strlen(trim($str1));
	$str2="123 This is a test.....";
	echo ltrim($str2,"0..9")."<br>";
	echo rtrim($str2,".")."<br>";
	echo trim($str2,"0..9 A..Z .")."<br>";
	//在字符串两边添加内容
	//默认-----空格 str_pad
	$str3="hello";
	echo str_pad($str3,10);//在字符串的右边添加空格
	echo str_pad($str3,10,"**",STR_PAD_LEFT);//左边添加
	echo str_pad($str3,10,"##",STR_PAD_BOTH);//先右后左
	

?>