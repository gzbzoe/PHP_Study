<!DOCTYPE html>
<html>
<head>
	<title>错误报告</title>
</head>
<h1>PHP中错误设置</h1>
<body>
<?php
	//php.ini ------配置错误开关和错误等级
	//ini_set()配置php.ini文件中的配置信息
	ini_set('display_errors',1);
	//设置错误等级
	error_reporting(E_ALL);//报所有等级的错误
	//$a=13;
	gettype($a); //notice
	getType(); //warning
	get_type();//fatal error
?>
</body>
</html>