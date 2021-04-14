<?php
	try{
		$dbh= new PDO("mysql:dbname=bookstore;host=localhost",'root','12345678');
		echo "数据库连接成功！";
	}catch(Exception $e){
		echo "数据库连接失败".$e->getMessage();
	}
	$query="UPDATE book SET price =123 WHERE bookName='JSP'";
	$affected=$dbh->exec($query);//返回影响行数
	if($affected>0){
		echo "数据表book中受影响的行数为：".$affected;
	}else{
		print_r($dbh->errorInfo());
	}
?>