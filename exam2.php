<!DOCTYPE html>
<html>
<head>
	<title>用户登录</title>
</head>
<body>
	<form method="post" action="exam2.php" name="form">
  		<fieldset>
    		<legend>用户登录</legend>
    		用户名：<input type="text" name="sname"><br>
    		密  码   ：<input type="password" name="code"><br>
    		<input type="radio" name="auto">7天自动登录<br>
    		<input type="submit" value="登录">
  		</fieldset>

</form>
<?php

	if($_POST["sname"]&$_POST["code"]){

		
		echo "你好！".$_POST["sname"].",欢迎来到个人中心";
	}



//自动登录
function encryption ($value, $type=0) {
	$key = md5('denglu');//里边的字符可以自己设置
	if (!$type) {
	return str_replace('=', '', base64_encode($value ^ $key));
	}

	$value = base64_decode($value);
	return $value ^ $key;
}

	session_start();
	
	

	if(isset($_POST['auto'])){
	//勾选
    if(!isset($_COOKIE['auto'])){
        setcookie('auto',encryption($_POST['sname']),7*24*3600+time());//设置cookie过期时间为一周后
    }
    $_SESSION['sname'] = $_POST['sname'];
    //header('location:success.php');
	}else{//没有勾选自动登陆一周
    	$_SESSION['sname'] = $_POST['sname'];
   // header('location:success.php');
}



/*if(isset($_SESSION['sname'])){
//echo '成功登陆session:用户名为'.$_SESSION['sname'];
echo "你好！".$_POST["sname"].",欢迎来到个人中心";
}
elseif(isset($_COOKIE['auto'])){
	echo "你好！".$_POST["sname"].",欢迎来到个人中心";
//echo '成功登陆cookie:用户名为'.encryption($_COOKIE['auto'],1);
}else{//什么都没有的跳转到登录表单
header('location:exam2.php');
}*/




?>
</body>
</html>