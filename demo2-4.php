<?php
	//静态变量
	function demo(){
		 $a=0;  //共享一个变量
		echo "a=".$a."<br>";
		
		$a++;
	}
	demo();
	demo();
	demo();
	function demo1(){
		static $a=0;  //共享一个变量
		echo "a=".$a."<br>";
		
		$a++;
	}
	demo1();
	demo1();
	demo1();
?>