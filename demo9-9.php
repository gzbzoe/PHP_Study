<!DOCTYPE html>
<html>
<head>
	<title>留言板</title>
</head>
<body >
	<h1 align="center">Message Board</h1>
	<?php
		
		error_reporting(0);
		date_default_timezone_set('PRC'); 
		$count=0;
		Session_start();//保存留言的个数
		//unset($_SESSION['sub']);
		//$_SESSION["sub"]=0;
		//unset($_SESSION['sub']);
		
		$filename="C:\\AppServ\\www\\study\\data.txt";
		//判断用户是否提交信息，如果提交，将留言内容保存到制定文件中
		if(isset($_POST["sub"])){
			//每个信息之间使用||分割，一条信息使用<|>分割
			
			$_SESSION["sub"]+=1; 
			//echo $_SESSION["sub"];
			//unset($_SESSION['sub']);
			$count=$_SESSION["sub"];
			$sign="s".$count."=1";
			//$time=date('Y-m-d h:i:s',time());
			$time=date("Y-m-d H:i:s");
			$message=$_POST["username"]."||".$_POST["title"]."||".$_POST["mess"]."||".$sign."||".$time."||".$count."<|>";
			//写文件自定义函数
			writeMessage($filename,$message);

		}else if(isset($_GET["del"])){ //点击删除键
			foreach ($_GET as $key => $value) {
				//echo "$key"."-------".$value."<br>";
			$numm=0;
			$buffer = file_get_contents($filename);
			//将文件按照条数存放到一个数组中<|>
			$data2=explode("<|>", $buffer);
			//将数组的每一个元素再进行分割
			for($j=0;$j<count($data2);$j++){
				//echo "1";
				//echo $data2[$j];
				list($username,$title,$message,$sign,$date,$count)=explode("||",$data2[$j]);
				if(substr($sign, -1, 1)=="1"){
					if(++$numm==$value){
						//$sign=0;
						//echo $numm."<br>";
						//echo "hahah"."<br>";
						$data2[$j]=str_replace("=1","=0",$data2[$j]);
						//echo $data2[$j];	
						break;
					}
				}
			}
			for($m=0;$m<count($data2)-1;$m++){
				$data2[$m].="<|>";
			}
			file_put_contents("C:\\AppServ\\www\\study\\data.txt",$data2);
			
			}
		}

		
		
		
		function writeMessage($filename,$message){
			//将留言板的内如写到文件中
			//每次写文件的时候，只能有一个用户来读或者写文件
			//文件锁-----保证同一时间只能有一个用户对文件进行读写操作
			$fp=fopen($filename,"a");//追加文件
			if(flock($fp, LOCK_EX)){
				//给文件上锁
				fwrite($fp, $message);
				//给文件解锁
				flock($fp,LOCK_UN);
			}else{
				echo "不能锁文件";
			}
			fclose($fp);
		}

		if(file_exists($filename)){
			//读文件
			readMessage($filename);
		}
		

		function readMessage($filename){
			//打开文件 并显示到页面
			$num=0;
			$fp=fopen($filename,"r");
			//同步概念
			flock($fp,LOCK_SH);
			$buffer="";
			while (!feof($fp)) {
				$buffer.=fread($fp, 1024);
			}
			//将文件按照条数存放到一个数组中<|>
			$data=explode("<|>", $buffer);
			//将数组的每一个元素再进行分割
			echo '<form action="" method="get" align="center"  >';
			foreach ($data as $line) {
				list($username,$title,$message,$sign,$date,$count)=explode("||",$line);

				if($username!=""&& $title!="" && $message!=""&& $sign=="s".$count."=1" ){
					$num++;
					//echo '<form action="" method="post" align="center" >';
					
					//echo '<form action="" method="get"  >';
					echo $username."说:";
					echo $title.",";
					echo $message;echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					
					echo $date;
					
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo '<input type="submit" width=600 name="del" value="'.$num.'">';
					echo "<hr>";
					
				}
			}
			echo "</form>";
			flock($fp,LOCK_UN);//解锁
			fclose($fp);
			
		}
		
		
	?>

	
	<form action="" method="post" align='center' >
		User：<input type="text" name="username" size="20" style="border-radius:5px;" ><br><br>
		Title：<input type="text" name="title" size="20" style="border-radius:5px;" ><br><br><br><br>
		<textarea name="mess" rows=20 cols=80 style=" border:solid 1px ; border-radius:20px; resize:none; box-shadow:5px 0px 30px 10px #D0D0D0  ;">  Please enter your message here!</textarea><br><br>
		<input type="submit" name="sub" value="submit" style=" border:solid 1px  ; border-radius:20px; box-shadow:20px 0px 30px 10px #abcdef  inset; resize:none;">
	</form>
</body>
</html>