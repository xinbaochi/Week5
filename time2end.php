<html>
<head>
<title>time2end</title>
</head>
<body> 
	<div class="head">
		time2end
	</div><br>

	<fieldset class="nowtime">
	<?php 
		echo date('Y年');

		switch(date('F'))
		{
			case 'January':
			echo "一月";
			break;

			case 'February':
			echo "二月";
			break;

			case 'March':
			echo "三月";
			break;

			case 'April':
			echo "四月";
			break;

			case 'May':
			echo "五月";
			break;

			case 'June':
			echo "六月";
			break;

			case 'July':
			echo "七月";
			break;

			case 'August':
			echo "八月";
			break;

			case 'September':
			echo "九月";
			break;

			case 'October':
			echo "十月";
			break;

			case 'November':
			echo "十一月";
			break;

			case 'December':
			echo "十二月";
			break;
		}
		echo date('d日');

		echo "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
		date_default_timezone_set('Asia/Taipei');
		echo date('H時i分s秒');
		echo "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
		switch(date('l'))
		{
			case 'Monday':
			echo "星期一";
			break;

			case 'Tuesday':
			echo "星期二";
			break;

			case 'Wednesday':
			echo "星期三";
			break;

			case 'Thursday':
			echo "星期四";
			break;

			case 'Friday':
			echo "星期五";
			break;

			case 'Saturday':
			echo "星期六";
			break;

			case 'Sunday':
			echo "星期日";
			break;
	}
	?>
	</fieldset><br>

	<fieldset class="end">
	<?php
	$end = mktime(0, 0, 0, 12, 31, date('Y',time())) - time();

	$day =(int)($end/(86400));
	$hours =(int)(($end%86400)/3600);
	$minutes =(int)(($end%3600)/60);
	$seconds =($end%60);

	echo"距離世界末日剩餘:".$day."日".$hours."時".$minutes."分".$seconds."秒";
	?>
	</fieldset><br>

	<fieldset class="picture-align">

	<div class="picture-head">
		每月風景回顧
	</div><br>

	<div class="whichmonth">
	<?php
	
	echo "<br>";

		if (date('n')==1) 
		{
			echo "一月";
		}
		else if (date('n')==2) 
		{
			echo "二月";
		}
		else if (date('n')==3) 
		{
			echo "三月";
		}
		else if (date('n')==4) 
		{
			echo "四月";
		}
		else if (date('n')==5) 
		{
			echo "五月";
		}
		else if (date('n')==6) 
		{
			echo "六月";
		}
		else if (date('n')==7)
		{
			echo "七月";
		}
		else if (date('n')==8)
		{
			echo "八月";
		}
		else if (date('n')==9)
		{
			echo "九月";
		}
		else if (date('n')==10)
		{
			echo "十月";
		}
		else if (date('n')==11)
		{
			echo "十一月";
		}
		else if (date('n')==12)
		{
			echo "十二月";
		}
		echo "<br>";
	?>
	</div>

	<div class="picture-size">
	<?php
		if (date('n')==1) 
		{
			echo '<img src="1.jpg" class="picture-internal-size">';
		}
		else if (date('n')==2) 
		{
			echo '<img src="2.jpg" class="picture-internal-size">';
		}
		else if (date('n')==3)
		{
			echo '<img src="4.jpg" class="picture-internal-size">';
		}
		else if (date('n')==4)
		{
			echo '<img src="3.jpg" class="picture-internal-size">';
		}
		else if ((date('n')+2)==5)
		{
			echo '<img src="5.jpg" class="picture-internal-size">';
		}
		else if (date('n')==6)
		{
			echo '<img src="6.jpg" class="picture-internal-size">';
		}
		else if (date('n')==7) 
		{
			echo '<img src="7.jpg" class="picture-internal-size">';
		}
		else if (date('n')==8)
		{
			echo '<img src="8.jpg" class="picture-internal-size">';
		}
		else if (date('n')==9)
		{
			echo '<img src="9.jpg" class="picture-internal-size">';
		}
		else if (date('n')==10) 
		{
			echo '<img src="10.jpg" class="picture-internal-size">';
		}
		else if (date('n')==11)
		{
			echo '<img src="11.jpg" class="picture-internal-size">';
		}
		else if (date('n')==12) 
		{
			echo '<img src="12.jpg" class="picture-internal-size">';
		}
	?>
	</div>
	</fieldset>
</body>
</html>
