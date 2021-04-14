<?php
	require "DBSession.php";
	define("DSN","mysql:host=localhost;dbname=testmail");
	define("DBUSER","root");
	define("DBPASS","12345678");
	try{
		$pdo=new PDO(DSN,DBUSER,DBPASS);
	}catch(Exception $e){
		die("数据库连接失败:".$e->getMessage());
	}
	DBSession::start($pdo);
	$_SESSION['username']="zhangs";
	echo $_SESSION["username"];
?>