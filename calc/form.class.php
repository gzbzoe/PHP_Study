<?php
class Form{
	private $action;
	//设置表单提交的位置
	private $shape;
	//选择形状的动作
	//构造函数 对用户的操作动作和表单的提交位置进行初始化
	function __construct($action=""){
		$this->action=$action; 
		$this->shape=isset($_GET["action"])?$_GET["action"]:"rect";

	}
	function __toString(){
		$form='<form action="'.$this->action.'?action='.$this->shape.'" method="post">';
		//根据用户的get请求组合成方法名称字符串 getRect() getCircle()
		$shape="get".ucfirst($this->shape);//首字母大写
		$form.=$this->$shape();
		//调取私有方法获取形状的输入表单
		$form.='<br><input type="submit" name="sub" value="计算"><br>';
		$form.='</form>';
		return $form;
		//返回用户需要的输入形状表单界面
	}
	// 获取矩形的表单输入
	private function getRect(){
		$input='<b>请输入 | 矩形 | 的宽度和高度：</b><p>';
		$input.='宽度：<input type="text" name="width" value="'.$_POST["width"].'"><br>';
		$input.='高度：<input type="text" name="height" value="'.$_POST["height"].'"><br>';
		return $input;

	}
	// 获取三角形的表单输入
	private function getTriangle(){
		$input='<b>请输入 | 三角形 | 的三条边：</b><p>';
		$input.='第一边：<input type="text" name="side1" value="'.$_POST["side1"].'"><br>';
		$input.='第二边：<input type="text" name="side2" value="'.$_POST["side2"].'"><br>';
		$input.='第三边：<input type="text" name="side3" value="'.$_POST["side3"].'"><br>';
		return $input;

	}
	// 获取圆的表单输入
	private function getCircle(){
		$input='<b>请输入 | 圆 | 的半径：</b><p>';
		$input.='半径：<input type="text" name="radius" value="'.$_POST["radius"].'"><br>';
		
		return $input;

	}
}

?>