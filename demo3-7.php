<?php
	//系统提供几个全局变量的数组
	//1.$_SERVER()  包含web服务器的信息
	foreach ($_SERVER as $key => $value) {
		echo '$_SERVER['.$key.']='.$value."<br>";
	}
	echo $_SERVER['HTTP_HOST'];
	
?>