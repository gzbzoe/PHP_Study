<?php
	//面向对象(封装，继承，多态)
	//类(模板，自定义的数据类型) 对象
	class Person{
		//属性，静态
		//姓名 性别 年龄
		private $name; //只能在类中访问，类外部不能直接访问
		private $sex;
		private $age;

		//构造方法：在类实例化对象时，系统会自动调用类中的方法
		//魔法函数(自动执行)
		function __construct($name='',$sex='男',$age=1){  //初始化属性
			$this->name=$name;
			$this->sex=$sex;
			$this->age=$age;
		}
		//析构函数:当对象消亡时，自动调用析构函数
		function __destruct(){
			echo "88".$this->name.'<br>';
		}


		//同过setter(给属性写值)和getter(得到属性的值)对属性的值进行封装
		public function setSex($sex){
			if($sex=='男'||$sex=='女'){
				$this->sex=$sex;
			}
			
		}
		public function setName($name){
			$this->name=$name;
		}
		public function setAge($age){
			if($age>0||$age<150){
				$this->age=$age;
			}
			
		}
		public function getSex(){
			return $this->sex;
		}
		public function getName(){
			return $this->name;
		}
		public function getAge(){
			return $this->age;
		}
		//方法，动态
		//this---->类中的属性
		function say(){
			echo "我叫".$this->name.",今年".$this->age."岁,性别为：".$this->sex;
		}
		function run(){
			echo "正在跑步";
		}
		
		
	}
	//实例化对象---->定义变量
	//$per1=new Person("张三",'男',20);
	//$per1=null;//对象销毁
	//$per2=new Person("李四",'女');
	//$per3=new Person("王五");
	//给属性赋值
	//$per1->name="张三";
	//$per1->sex="男";
	//$per1->age=23;
	//读取属性的值
	//echo "per1的姓名为：".$per1->name.'<br>';
	//$per1->say();
	//$per2->say();
	//$per3->say();
	$per1=new Person('王五');
	$per1->setSex('女');
	$per1->say();

?>