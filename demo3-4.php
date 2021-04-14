<?php
	//each() 需要传递一个数组，返回数组中当前元素的键值对,并向后移动数组指针到下一个元素
	$array6 = array( 	'编号' =>1 ,
						'姓名'=>"张三" ,
						'公司'=>"A公司");
	$elem1=each($array6);
	echo $elem1[key]."<br>";
	echo $elem1[0];
	print_r($elem1);
	$elem2=each($array6);
	print_r($elem2);
	$elem3=each($array6);
	print_r($elem3);
	//list函数 可变参数函数 用一步操作给一组变量赋值
	$array=array("aaa","bbb","ccc");
	list($elem1,$elem2,$elem3)=$array;
	echo "elem1=".$elem1."elem2=".$elem2."elme3=".$elem3;
	list($elem1,,$elme3)=$array;
	echo "elem1=".$elem1."elme3=".$elem3;
	list(,,$elme3)=$array;
	echo "elme3=".$elem3;
?>