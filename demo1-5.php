<?php
	$a="world";
	echo "hello,{ $a}";// 当花括号中有其他字符的时候，花括号当成纯文本信息
	echo "<br>hello,{$a}";//取变量值
	echo "<br>hello,${ a}";//取变量值
	echo "<br>hello,${a}";//取变量值
?>