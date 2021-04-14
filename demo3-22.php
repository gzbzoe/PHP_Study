<?php
	echo '<table width=600 align="center" border="1">';
	echo"<caption>联系人列表</caption>";
	echo '<tr bgcolor="red" >';
	echo "<th>编号</th>
		 <th>姓名</th>
		 <th>公司</th>
		 <th>地址</th>
		 <th>电话</th>
		 <th>邮箱</th>
		 ";
	echo"</tr>";
	$array=array(
		array(
			array(1,"张三","A公司","北京市"),
			array("138468848","123@qq.com"),
		),
		array(
			array(2,"李四","B公司","天津市"),
			array("125466666","123@qq.com"),
		),
		array(
			array(3,"王五","C公司","上海市"),
			array("123546589","123@qq.com"),
		),
	);
	for($row=0;$row<count($array);$row++)
	{
		echo "<tr>";
		for($col=0;$col<count($array[$row]);$col++)
		{	
			for($row2=0;$row2<count($array[$row][$col]);$row2++)
			{
				echo "<td>".$array[$row][$col][$row2]."</td>";
					
			}
			

		}
		
		echo "</tr>";
	}
	echo"</table>";
?>