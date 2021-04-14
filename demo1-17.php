<?php
	//continue
	$i=2;
	$sum=0;
	for(;$i<=100;$i++){
		if($i%2==1){
			
			continue;
		}
		$sum+=$i;
	}
	echo "sum=".$sum;
?>