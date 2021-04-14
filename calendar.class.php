<?php
	class Calendar{
		//属性
		private $year;
		private $month;
		private $start_weekday;//每个月的1号是星期几
		private $days;//一个月的天数

		function __construct(){
			//给属性赋值
			$this->year=isset($_GET["year"])?$_GET["year"]:date("Y");
			$this->month=isset($_GET["month"])?$_GET["month"]:date("m");
			$this->start_weekday=date("w",mktime(0,0,0,$this->month,1,$this->year));
			$this->days=date("t",mktime(0,0,0,$this->month,1,$this->year));
		}
		function __toString(){
			$out.='<table align="center">';
			$out.=$this->chageDate(); //上部分
			$out.=$this->weekList(); //中部分
			$out.=$this->dayList(); //下部分
			$out.='</table>';
			return $out;
		}
		private function weekList(){
			$week=array('日','一','二','三','四','五','六');
			$out.='<tr>';
			for($i=0;$i<count($week);$i++){
				$out.='<th class="fontb">'.$week[$i].'</th>';
			}
			$out.='</tr>';
			return $out;
		}
		private function dayList(){
			$out.='<tr>';
			//控制空格
			for($j=0;$j<$this->start_weekday;$j++){
				$out.='<td>&nbsp</td>';
			}
			for($k=1;$k<=$this->days;$k++){
				$j++;
				if($k==date('d')){
					$out.='<td class="fontb">'.$k.'</td>';
				}else{
					$out.='<td>'.$k.'</td>';
				}
				if($j%7==0){
					$out.='<tr></tr>';
				}
			}
			//后面空格
			while($j%7!=0){
				$out.='<td>&nbsp</td>';
				$j++;
			}
			$out.='</tr>';
			return $out;
		}

		//前推
		private function prevYear($year,$month){
			$year=$year-1;
			if($year<1970){
				$year=1970;
			}
			return "year={$year}&month={$month}";
		}
		private function prevMonth($year,$month){
			
			if($month==1){
				$year=$year-1;
				if($year<1970){
					$year=1970;
				}
				$month=12;
			}else{
				$month--;
			}
			
			return "year={$year}&month={$month}";
		}
		//后进
		private function nextYear($year,$month){
			$year=$year+1;
			if($year>2038){
				$year=2038;
			}
			return "year={$year}&month={$month}";
		}
		private function nextMonth($year,$month){
			
			if($month==12){
				$year=$year+1;
				if($year>2038){
					$year=2038;
				}
				$month=1;
			}else{
				$month++;
			}
			
			return "year={$year}&month={$month}";
		}

		private function chageDate($url="7.php"){
			$out .= '<tr>';
			$out .= '<td><a href="'.$url.'?'.$this->prevYear($this->year, $this->month).'">'.'<<'.'</a></td>';
			$out .= '<td><a href="'.$url.'?'.$this->prevMonth($this->year, $this->month)
								.'">'.'<'.'</a></td>';
			
			$out .= '<td colspan="3">';
			$out .= '<form>';
			$out .= '<select name="year" onchange="window.location=\''.$url.'?year=\'+this.options[selectedIndex].value+\'&month='
			.$this->month.'\'">';
			for($sy=1970; $sy <= 2038; $sy++){
				$selected = ($sy==$this->year) ? "selected" : "";
				$out .= '<option '.$selected.' value="'.$sy.'">'.$sy.'</option>';
			}
			$out .= '</select>';
			$out .= '<select name="month"  onchange="window.location=\''.$url.'?year='.$this->year
			.'&month=\'+this.options[selectedIndex].value">';
			for($sm=1; $sm<=12; $sm++){
				$selected1 = ($sm==$this->month) ? "selected" : "";
				$out .= '<option '.$selected1.' value="'.$sm.'">'.$sm.'</option>';
			}
			$out .= '</select>';
			$out .= '</form>';	
			$out .= '</td>';


			$out .= '<td><a href="'.$url.'?'
					.$this->nextMonth($this->year, $this->month).'">'.'>'.'</a></td>';
			
			$out .= '<td><a href="'.$url.'?'
					.$this->nextYear($this->year, $this->month).'">'.'>>'.'</a></td>';
			$out .= '</tr>';
			return $out;                              //返回调整日期的表单
		}
	}
?>