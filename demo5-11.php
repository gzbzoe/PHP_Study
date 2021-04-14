<?php
	require "demo5-10.php";
	$per1=new Person("zz","女",30);
	//对象的序列化 将对象的信息保存到文件中
	//1.数据库中， 2.数据存储到文件中
	$per1_sting=serialize($per1);
	file_put_contents("file.txt", $per1_sting);
?>