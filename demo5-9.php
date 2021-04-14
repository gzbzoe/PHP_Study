<?php
	//_call()当对象调用类中没有定义的方法时，自动执行_call()魔法函数的内容
	class TestClass{
		function __call($functionName,$args){
			echo "此".$functionName."（参数：";
			print_r($args);
			echo "）函数不存在";
		}
	}
	$obj=new TestClass();
	$obj->myFun("one",2,"three");

?>