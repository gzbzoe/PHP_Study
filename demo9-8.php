<?php
	//文件指针------C语言  指针（地址）
	$fp=fopen("C:\\AppServ\\www\\study\\file.txt", "r") or die("文件打开失败！");
	//文件初始位置
	echo ftell($fp)."<br>";
	echo fread($fp, 10)."<br>";//0-9
	echo ftell($fp)."<br>";

	//移动文件指针,向后移动100个字符
	fseek($fp, 100,SEEK_CUR);
	echo fread($fp,10)."<br>";

	//将文件指针移动倒数第十个位置
	fseek($fp,-10,SEEK_END);
	echo fread($fp,10)."<br>";
	//将文件的指针移动到文件开始
	rewind($fp);
	echo ftell($fp)."<br>";
	fclose($fp);
?>