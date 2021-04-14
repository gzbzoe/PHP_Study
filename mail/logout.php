<?php
	session_start();
	$username=$_SESSION['username'];
	$_SESSION=array();
	seesion_destroy();
?>
<html>
<head>
	<title>退出系统</title>
</head>
<body>
	<p><?php echo $username;?>再见</p>
	<p><a href="login.php">重新登录页面</a></p>
</body>
</html>