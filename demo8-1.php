<?php
	//时间的操作----php(32位数字) 按秒计算时间 
	//1970年1月1日0时0分0秒到设定时间的秒数
	//2038年12月
	error_reporting(0);//消除警告
	echo date("Y-m-d",mktime(0,0,0,2,1,2019))."<br>";
	echo date("Y:m:d",mktime(0,0,0,12,36,2018))."<br>";
	echo date("Y年m月d日",mktime(0,0,0,15,1,2008))."<br>";
	echo date("Y-m-d",mktime(0,0,0,1,1,99))."<br>";
	//通过英语的自然语言设定时间
	echo date("Y-m-d",strtotime("now"))."<br>";
	echo date("Y-m-d",strtotime("last monday"))."<br>";
	//周日 每一星期的开始  星期一---1  星期二---2
	echo date("Y-m-d",strtotime("+1 day"))."<br>";
	echo date("Y-m-d",strtotime("8 may 2019"))."<br>";
	
?>