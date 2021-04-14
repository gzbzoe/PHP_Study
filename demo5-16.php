<?php
	interface USB{
		function run();

	}
	class UKey implements USB{
		function run(){
			echo "执行USB键盘";
		}
	}
	class UMouse implements USB{
		function run(){
			echo "执行USB鼠标";
		}
		
	}
	class UStore implements USB{
		function run(){
			echo "执行USB硬盘";
		}
	}
	class Computer{
		function UseUSB($usb){
			$usb->run();
		}
	}
	$computer=new Computer();
	$computer->UseUSB(new UMouse);
	$computer->UseUSB(new UStore);
	//描述同种类型事物实现不同的方法时，使用抽象类
	//描述不同类型事物实现不同方法时，使用接口
	
?>