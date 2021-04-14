<?php
	//读取文件
	//1.
	$filename="C:\\AppServ\\www\\study\\file.txt";
	$handle=fopen($filename,"r") or die("文件打开失败！");
	$content=fread($handle, 100);
	fclose($handle);
	echo $content;
	//2.每个文件都是以EOF
	$filename="C:\\AppServ\\www\\study\\file.txt";
	$handle=fopen($filename,"r") or die("文件打开失败！");
	$content="";
	while (!feof($handle)) {
		$content.=fread($handle,1024);
	}
	fclose($handle);
	echo $content;
	//3.
	//$filename="C:\\AppServ\\www\\study\\file.txt";
	$handle=fopen($filename,"r") or die("文件打开失败！");
	$content=fread($handle, filesize($filename));
	fclose($handle);
	echo $content;
	//4.保证文件存在并可以读出
	echo file_get_contents($filename);
	//5.
	print_r(file($filename));
?>