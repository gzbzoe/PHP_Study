<?php
	$N=7;
	$arr=array();
	for($r=1;$r<=$N;$r++)  //行
	{
		for($j=0;$j<$r;$j++){   //列

			if($j==0||$j==($r-1))  //第一列与最后一列
			{
				$arr[$r][$j]=1;
			}
			else{
				
				$arr[$r][$j]=$arr[$r-1][$j-1]+$arr[$r-1][$j];
			
			}
			
			
		}
		
	}
	for($m=1;$m<=$N;$m++)  //打印
		{
			for($k=0;$k<$N-$m;$k++){
				echo '&nbsp;&nbsp;&nbsp;';
			}
			for($n=0;$n<$m;$n++)
			{
				echo $arr[$m][$n];
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
			}
			echo '<br>';
		}
?>