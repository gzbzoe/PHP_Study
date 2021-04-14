<?php
	$link=mysql_connect('localhost','root','12345678');
	if(!$link){
		die("conneted failed:".mysql_error());
	}
	//连接
	mysql_select_db('info',$link) or die("不能连接到指定数据库:".mysql_error());
	//1.添加数据
	/*$insert="INSERT INTO stuinfo(id,name,age,profession,class,telephone)
		VALUES('1605117148','张三','20','新媒体','新媒体1班','18406570213'),
		('1605117147','张二','20','虚拟现实','虚拟现实1班','18406570211'),
		('1605117146','张四','21','新媒体','新媒体1班','18406570212'),
		('1605117145','张五','22','虚拟现实','虚拟现实2班','18406570214'),
		('1605117144','张六','23','新媒体','新媒体2班','18406570215')";
	$result=mysql_query($insert);
	if($result && mysql_affected_rows()>0){
		echo "SUCCEED!!,The last id：".mysql_insert_id();
		
	}
	else{
		echo "Failed! ERROR CODE:".mysql_errno()."Reason:".mysql_error();
	}
	//2.修改
	$update="UPDATE stuinfo SET age='30' WHERE name='张三'";
	$update1="UPDATE stuinfo SET age='37' WHERE name='张四'";

	$result1=mysql_query($update);
	$result2=mysql_query($update1);
	if($result1 && $result2 && mysql_affected_rows()>0){
		echo "数据库修改成功";
	}
	else{
		echo "修改失败 ERROR CODE:".mysql_errno()."Reason:".mysql_error();
	}
	//3.删除
	$result3=mysql_query("DELETE FROM stuinfo WHERE name='张六'");
	if($result3 && mysql_affected_rows()>0){
		echo "数据删除成功";
	}else{
		echo "数据删除失败错误为：".mysql_errno()."错误原因为：".mysql_error();
	}*/
	//4.查询
	$result4=mysql_query("SELECT * FROM stuinfo");//返回表格
	echo '<table align="center" width="80%" border="1">';
	echo '<caption><h1>学生信息列表</h1></caption>';
	echo '<th>学号</th><th>姓名</th><th>年龄</th><th>专业</th><th>班级</th><th>电话</th>';
	while ($row=mysql_fetch_row($result4)) {
		echo '<tr>';
			foreach ($row as $data) {
				echo '<td>'.$data.'</td>';
			}
		echo '</tr>';
	}
	echo "</table>";
	mysql_free_result($result4);
	mysql_close($link);

?>