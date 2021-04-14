<?php
	//变量函数
	function one($a,$b){
		return $a+$b;
	}
	function two($a,$b){
		return $a*$a+$b*$b;
	}
	function three($a,$b){  //泰勒公式 
		return $a*$a*$a+$b*$b*$b;
	}
	$result="two";
	echo "运算结果为：".$result(10,20);
?>