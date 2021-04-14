<?php
	$arr = array(
     
    array('11','22','33'),
    array('44','55','66'),
    array('77','88','99')
    
);
	for($i=0;$i<count($arr);$i++)
	{
		for($j=0;$j<count($arr[$i]);$j++){
			echo $arr[$i][$j].' ';
		}
		echo '<br>';
		
	}
?>