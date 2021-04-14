<?php
	class MyClass{
		private $a;
		public function __construct($a){
			$this->a=$a;
		}
		//如果想直接使用对象，需要在类中定义魔法函数__toString()
		//当使用对象的时候会自动调用toString（）
		public function __toString(){
			return $this->a;
		}
	}
	$obj=new MyClass('Hello');
	echo $obj;
	echo $obj->__toString();
	//复习类的代码
	//矩形 三角形 圆形 周长和面积
?>