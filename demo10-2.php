<?php
	//通过php访问数据库
	//增删改查（效率低） 存储过程（极大提供数据访问效率）
	//php访问不同的数据库 连接MySQL
	//localhost  服务器地址（数据库的ip地址）
	$link=mysql_connect("localhost","root","12345678");
	if(!$link){
		die("连接失败：".mysql_error());
	}
	echo "连接成功"."<br>";
	//数据库的连接池
	//查看数据库相关信息
	echo mysql_get_client_info()."<br>";//客户端API函数库的版本信息
	echo mysql_get_host_info()."<br>";//与mysql服务器的连接类型
	//TCP/IP  可靠的网络协议 复杂 经过3次握手信号 费时
	//UDP 不可靠 尽最大努力 简单  无3次握手信号  被动连接 实时处理 视频传输
	echo mysql_get_proto_info()."<br>";//通讯协议（TCP/IP UDP）版本信息
	echo mysql_get_server_info()."<br>";//数据库服务版本信息
	mysql_client_encoding()."<br>";//使用的编码集
	mysql_stat()."<br>";//当前数据连接状态
	mysql_close($link);//断开数据库
	//SQL(结构化查询语言) strucutred quary language
	//非结构化查询语言 NOSQL
	//范式（4类）数据库满足第三范式
?>