<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>请输入一个字符串：</h1>
	<form action="/study/demo6-77.php" method="post">
		
		<input type="text" with=600 height=200 name="str" value="<b>hee</b>">
		<input type="submit" name="sub" value="提交">

	</form>
	<?php
		$str=$_POST;

		echo "原型输出：".$str."<br>";
		echo "转换实例：".htmlspecialchars($str,ENT_COMPAT)."<br>";
		echo "删除斜线：";
		echo "删除斜线和转换实例：";

	?>
	
</body>
</html>