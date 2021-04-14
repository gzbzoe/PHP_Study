<?php
	//final关键字 
	
	 class MyClass 
	{
		final function fun(){ //函数重载

		}
		
	}
	
	class MyClass2 extends MyClass
	{
		function fun(){

		}
		
	}
	//如果一个类的前面存在final此类为终类，不能被其他类继承
	//如果父类的一个方法的前面存在final此方法不能被重载（override)
?>