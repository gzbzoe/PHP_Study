<?php
//控制标题 行 列
	function table($name,$row,$cor)
	{
		echo "<table align='center' width=600>";
		echo "<caption><h1>".$name."</h1></caption>";
		for($out=0;$out<$row;$out++)  //控制行
		{	
			$bgcolor = $out%2==0?"#FFFFF":"#DDDDD";
			echo "<tr bgcolor=".$bgcolor.">";
			for($in=0;$in<$cor;$in++) //控制列
			{
				echo "<td>".($out*10+$in)."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	$tablename="通过函数输出表格";
	$tablerow=10;
	$tablecol=10;
	table($tablename,$tablerow,$tablecol);
?>