<?php
	$path="C:\\AppServ\\www\\study\\demo9-1.php";
	$path_parts=pathinfo($path);//返回数组
	echo $path_parts["dirname"];//输出该文件的目录
	echo $path_parts["basename"];//文件名称
	echo $path_parts["extension"];//扩展名

?>