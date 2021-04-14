
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//将html代码转化为html实体
	$str ="<b>webserver: </b>";
	$str2='<b>liunx&apache</b>';
	echo $str."<br>";
	//1.会将你的标签转换成字符的形式
	//2.只转换双引号 保留单引号
	echo htmlspecialchars($str,ENT_COMPAT)."<br>";
	//1.会将标签转换为字符
	//2.双引号的单引号都转换
	echo $str2."<br>";
	echo htmlspecialchars($str2,ENT_QUOTES)."<br>";
	//1.会将标签转换为字符
	//2.双引号的单引号都不转换
	echo htmlspecialchars($str,ENT_NOQUOTES)."<br>";
	$str3="<i>hello</i> hi";
	echo $str3."<br>";
	echo htmlentities($str3)."<br>";
	?>

</body>
</html>