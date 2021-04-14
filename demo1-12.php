<?php
	//成绩判断
	$grade=100;
	if($grade>=80)
	{
		echo "优秀";
	}
	elseif($grade<80 and $grade>=70){
		echo "良好";
	}
	elseif($grade<60){
		echo "不及格";
	}
	else{
		echo "及格";
	}
?>