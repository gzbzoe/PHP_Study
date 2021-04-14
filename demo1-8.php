<?php
	//数据类型的转换
	//数据范围小向数据范围大转化 否则数据溢出
	$a=true;
	$b=$a+1;
	echo "b = ".$b;
	echo "<br>";
	var_dump($b);
	$num1=1+'-1.5e2'; //-1.5*100
	echo "<br>num1 = ".$num1;
	echo "<br>";
    var_dump($num1);
    //如果一个数字和一个纯字符串相加，结果为数字本身
    $num2=1+'chased';
    echo "<br>num2 = ".$num2;
    //如果一个数字和一个代表数字的字符串相加，结果为数字和字符串前面数字之和
    $num3=1+'10chased';
    echo "<br>num3 = ".$num3;
    echo "<br>";
    var_dump($num3);

    //数据类型强制转换
    echo "<br>";
    $num4=0;
    $num5=(boolean)$num4;
    var_dump($num5);
    $num6='10abcd';
    $num7=(int)$num6;
    echo "<br>num7 = ".$num7;
    $num8=1234;
    $num9=(string)$num8;
    echo "<br>num9 = ".$num9;

?>