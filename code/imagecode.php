<?php

	session_start();
	require_once("vcode.class.php");
	//调用构造方法 调用__toString() 同时
	echo new Vcode();
?>