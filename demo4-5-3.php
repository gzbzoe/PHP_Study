<?php
	
	


$arr=array($_SERVER['SERVER_NAME'],$_SERVER['SERVER_PORT'],$_SERVER['REQUEST_URI']);
	$i=0;
	echo 'http://';
while($i<count($arr))
{
	//echo '1';
	echo $arr[$i];
	$i++;
}

	
	

?>