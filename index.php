<?php
	//登录成功页面
	//避免没有登录的用户直接访问网站主题界面
	if(!(isset($_COOKIE['isLogin'])&& $_COOKIE['isLogin']==1)){
		header("Location:L.login.php");
		exit;
	}
?>

<html>
<head>
	<title>网站 主页面</title>
</head>
<body>
	<?php
		echo "您好".$_COOKIE["username"];
	?>
	<a href="login.php?action=logout">注销</a>
	<p>dddd</p>
</body>
</html>