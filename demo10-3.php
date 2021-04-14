<?php
	$link=mysql_connect('localhost','root','12345678');
	if(!$link){
		die("conneted failed:".mysql_error());
	}
	//连接指定数据库
	mysql_select_db('bookstore',$link) or die("不能连接到指定数据库:".mysql_error());
	//1.添加数据
	/*$insert="INSERT INTO book(author,bookName,detail,price,publisher)
		VALUES('张三','PHP','与PHP相关的数据','34.5','清华大学'),
		('张四','JSP','与JSP相关的数据','30.5','电子工业'),
		('张六','ASP','与ASP相关的数据','32.5','人民邮电')";
	//执行SQL语句
	$result=mysql_query($insert);
	if($result && mysql_affected_rows()>0){
		//返回对数据库的操作影响了多少行 >0
		echo "SUCCEED!!,The last id：".mysql_insert_id();
		
	}
	else{
		echo "Failed! ERROR CODE:".mysql_errno()."Reason:".mysql_error();
	}*/
	//2.修改
	/*$update="UPDATE book SET price='23.7' WHERE bookName='PHP'";
	$result1=mysql_query($update);
	if($result1 && mysql_affected_rows()>0){
		//返回对数据库的操作影响了多少行 >0
		echo "数据库修改成功";
		
	}
	else{
		echo "修改失败 ERROR CODE:".mysql_errno()."Reason:".mysql_error();
	}*/
	//3.删除
	$result2=mysql_query("DELETE FROM book WHERE bookName='PHP'");
	if($result2 && mysql_affected_rows()>0){
		echo "数据删除成功";
	}else{
		echo "数据删除失败错误为：".mysql_errno()."错误原因为：".mysql_error();
	}
	
?>