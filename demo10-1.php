<?php
	//连接数据库
	$link=mysql_connect('localhost','root','12345678');
	if(!$link){
		die("连接失败：".mysql_error());
	}else{
		echo "successed！";
	}
?>