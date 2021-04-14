<?php
	//echo $_SESSION['mailtitle'];
	session_start();
	if(isset($_SESSION['isLogin']) && $_SESSION['isLogin']==1){
		echo "<p>当前用户为：".$_SESSION['username'];
		echo "<a href='logout.php'>退出</a></p>";
	}else{
		header("Location:login.php");
		exit;
	}
?>

<html>
<head>
	<title>邮件系统</title>
</head>
<body>
	<?php
		require "connect.inc.php";
		//通过预处理sql语句代码
		$stmt=$pdo->prepare("select id,mailtitle,maildt from mail where uid=?");
		$stmt->execute(array($_SESSION['id']));//mail表的uid实际上就是user表的id
	?>
	<p>您的邮箱中有<?php echo $stmt->rowCount();?>封邮件</p>
	<table>
		<tr>
			<th>编号</th>
			<th>标题</th>
			<th>时间</th>
			<?php
				while (list($id,$mailtitle,$maildt)=$stmt->fetch(PDO::FETCH_NUM)) {
					echo "<tr>";
					echo "<td>".$id."</td>";
					echo "<td>".$mailtitle."</td>";
					echo "<td>".$maildt."</td>";
					echo "</tr>";
				}
			?>
		</tr>
	</table>
</body>
</html>