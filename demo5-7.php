<?php
	//对象的克隆
	class Person{

		private $name; 
		private $sex;
		private $age;
		function __construct($name='',$sex='男',$age=1){  
			$this->name=$name;
			$this->sex=$sex;
			$this->age=$age;
		}
		//__clone():当执行clone时，会自动调用类中的__clone()魔法函数
		function __clone()
		{
			$this->name="我是".$this->name."副本";
			$this->age=50;
		}
		function say(){
			echo "我叫".$this->name.",今年".$this->age."岁,性别为：".$this->sex;
		}
		function run(){
			echo "正在跑步";
		}
		
		
	}
	$per1=new Person("z",'男',20);
	$per1->say();
	$per2=clone $per1;
	$per2->say();
?>