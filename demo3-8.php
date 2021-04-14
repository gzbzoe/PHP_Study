<?php
	//$_GET 可以截获到通过get方式发送数据的值
	echo "参数action:".$_GET['action']."<br>";
	echo "参数user：".$_GET['user']."<br>";
	echo "参数tid：".$_GET['tid']."<br>";
	echo "参数page：".$_GET['page']."<br>";
	//http://localhost:81/study/demo3-8.php?action=18&user=zs&tid=12&page=3
?>