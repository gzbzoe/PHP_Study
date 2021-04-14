<?php
	//计算程序()的执行时间
	class Timer{
		private $startTime=0;
		private $endTime=0;
		function start(){
			$this->startTime=microtime(true);
		}
		function stop(){
			$this->endTime=microtime(true);
		}
		function spent(){
			return round($this->endTime-$this->startTime,4);
		}
	}
	$timer= new Timer();
	$timer->start();
	//程序
	usleep(100000);//毫秒
	$timer->stop();
	echo "程序的执行时间为：".$timer->spent();
?>