<?php
	session_start();
	require "connect.inc.php";
	//登录过程，对提交的表单进行验证
	if(isset($_POST["sub"])){
		$stmt=$pdo->prepare("select id,username from user where username=? and userpwd=?");
		$stmt->execute(array($_POST["username"],$_POST["password"]));
		if($stmt->rowCount()>0){
			//保存用户信息到session中
			$_SESSION=$stmt->fetch(PDO::FETCH_ASSOC);//将用户全部信息存储到Session中
			$_SESSION['isLogin']=1;
			header("Location:index.php");//登录成功页面
			
		}else{
			echo "用户名或密码错误";
		}
	}
?>
<html>
<head>
	<title>邮件系统登录</title>
</head>
<body>
	<p>欢迎光临，邮件系统,Session ID:<?php echo session_id();?></p>
	<form action="login.php" method="post">
		用户名：<input type="text" name="username"><br>
		密码：<input type="password" name="password"><br>
		<input type="submit" name="sub" value="登录">
	</form>
</body>
</html>