<?php
		$array=array(
			array(
				"市场部",
				array(1,"高某","市场部经理",5000),
				array(2,"洛某","职员",3000),
				array(3,"峰某","职员",2400),
			),
			array(
				"产品部",
				array(1,"李某","产品部经理",6000),
				array(2,"周某","职员",4000),
				array(3,"吴某","职员",3200),
			),
			array(
				"财务部",
				array(1,"郑某","财务部经理",4500),
				array(2,"王某","职员",2000),
				array(3,"冯某","职员",1500),
			),
		);
		for($row=0;$row<count($array);$row++)
		{
			echo '<table width=600 align="center" border="1">';
			echo"<caption><h1>".$array[$row][0]."10月份工资表</h1></caption>";
			echo '<tr bgcolor="#46A3FF" >';
			echo "<th>编号</th>
		 			<th>姓名</th>
		 			<th>职务</th>
		 			<th>工资</th>";
		 	for($col=1;$col<count($array[$row]);$col++)
			{	
				echo "</tr>";
				for($row2=0;$row2<count($array[$row][$col]);$row2++)
				{
					echo "<td align='center'>".$array[$row][$col][$row2]."</td>";
					
				}
				echo "</tr>";
			}
			
		}
?>