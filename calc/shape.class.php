<?php
 /*abstract class Shape{
	public $shapeName;  //形状名称
	abstract function area();
	abstract function perimeter();

	//mixed $value 接受表单输入的值，对该值进行验证
	//string $message 消息提示的前缀
	protected function validate($value,$message='输入的值')
	{
		if($value==""||!is_numeric($value)||$value<0)
		{
			$message=$this->shapeName.$message;
			echo '<font color="red">'.$message.
					'必须为非负值的数字，并且不能为空</font><br>';
			return false;
		}
		else{
			return true;
		}
	}
}*/

 abstract class Shape{
	public $shapeName;  //形状名称
	abstract function area();
	abstract function perimeter();

	//mixed $value 接受表单输入的值，对该值进行验证
	//string $message 消息提示的前缀
	protected function validate($value,$message='输入的值')
	{
		if($value==""||!is_numeric($value)||$value<0)
		{
			$message=$this->shapeName.$message;
			echo '<font color="red">'.$message.
					'必须为非负值的数字，并且不能为空</font><br>';
			return false;
		}
		else{
			return true;
		}
	}
}



?>