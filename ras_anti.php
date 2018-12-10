<?

$title="Расчёт";
$title2="Расчет системы антиобледенения плоской кровли";
include("begin.php");

   $TermoUSD = array(350,140,40,130);
     $TXLP = array(300,400,500,600,700,850,1000,1200,1400,1600,1800,2000,2200,2400,2600,2800);
  $TXLPUSD = array(84,89,90,93,99,107,126,151,167,183,197,221,237,261,279,304);
  $TXLPlen = array(16.2, 21.6,27,32.3,37.7,45.9,53.9,65,75.4,86.5,95,109,117.3,129.9,141.9,152.2);  
	$summa = 0;
	$lenght = 0;
	$num_kabel = 0;	
	$power = 0;

function kabel(){//показ количества и мощности кабелей
	global $k, $l, $TXLP, $TXLPUSD, $TXLPlen;
	reset ($k);
	reset ($l);
	$i=0;
	while ($k[$i]!=0){
		$t=0;
		reset ($TXLPlen);
		reset ($TXLPUSD);
		reset ($TXLP);
		while(($t<count($TXLPlen))&&($TXLPlen[$t]<($l[$i]*2))) $t++;
		if ($t>=count($TXLPlen)){
			echo ("<h3>Для такого объекта потребуется нестандартное оборудование!<br>Обратитесь к нам по тел. (056)788-22-78</h3>");
			return false;
			break;
		}
		kabel_display($t,$k[$i]);
		$i+=4;
		if (!isset($k[$i])){
			break;
		}
	}
	$i=1;
	while ($k[$i]!=0){
		$t=0;
		reset ($TXLPlen);
		reset ($TXLPUSD);
		reset ($TXLP);
		while(($t<count($TXLPlen))&&($TXLPlen[$t]<($l[$i]*4))) $t++;
		if ($t>=count($TXLPlen)){
			echo ("<h3>Для такого объекта потребуется нестандартное оборудование!<br>Обратитесь к нам по тел. (056)788-22-78</h3>");
			return false;
			break;
		}
		kabel_display($t,$k[$i]);
		$i+=4;
		if (!isset($k[$i])){
			break;
		}
	}
	$i=2;
	while ($l[$i]!=0){
		$t=0;
		$n=1;
		reset ($TXLPlen);
		reset ($TXLPUSD);
		reset ($TXLP);
		while($TXLPlen[$t]<(($l[$i]*2)/$n)){
			$t++;
			if ($t>=count($TXLPlen)){
				$n++;
				$t=0;
			}
		}
		kabel_display($t,$n);
		$i+=4;
		if (!isset($k[$i])){
			break;
		}
	}
	$i=3;
	if (isset($k[3])){
		if (($k[3]!="")&&($k[3]!=0)){
			$t=0;
			$n=$k[3];
			reset ($TXLPlen);
			reset ($TXLPUSD);
			reset ($TXLP);
			kabel_display($t,$n);
		}
	}

	return true;
}

function kabel_display($t,$s){//вывод строки данного кабеля
	global $TXLP, $TXLPUSD, $TXLPlen, $summa,$lenght,$num_kabel,$power;
			$summa += $TXLPUSD[$t]*$s;
			$lenght += $TXLPlen[$t]*$s;
			$num_kabel += $s;
			$power += $TXLP[$t]*$s;

		echo "<tr><td style='text-align:left;'>Кабель нагревательный TXLP/1 ".$TXLP[$t]."Вт, длиной ".$TXLPlen[$t]." м</td><td>к-т</td><td>".$s."<td>".$TXLPUSD[$t]."</td><td>".$TXLPUSD[$t]*$s."</td></tr>";
}
function shitok(){//вывод строк коммутирующего оборудования  и коробочек
	global $summa,$lenght,$num_kabel,$power;

		echo "<tr><td style='text-align:left;'>Коробка распределительная</td><td>шт.</td><td>".$num_kabel."<td>2</td><td>".(2*$num_kabel)."</td></tr>";
			$summa += 2*$num_kabel;

		echo "<tr><td style='text-align:left;'>Крепление кабеля</td><td>п.м.</td><td>".(round($lenght/2))."<td>1</td><td>".(round($lenght/2))."</td></tr>";
			$summa += round($lenght/2);

		echo "<tr><td style='text-align:left;'>Автоматические выключатели АВВ</td><td>шт.</td><td>".($num_kabel+1)."<td>5</td><td>".(($num_kabel+1)*5)."</td></tr>";
			$summa += ($num_kabel+1)*5;

		if ($power>3000){
		echo "<tr><td style='text-align:left;'>Вводной автомат 3-хфазный АВВ</td><td>шт.</td><td>1<td>17</td><td>17</td></tr>";
		echo "<tr><td style='text-align:left;'>Дифреле 3-хфазное 30мА АВВ</td><td>шт.</td><td>1<td>45</td><td>45</td></tr>";
		echo "<tr><td style='text-align:left;'>Пускатель 3-хфазный АВВ</td><td>шт.</td><td>1<td>28</td><td>28</td></tr>";
			$summa += 90;
		}
		echo "<tr><td style='text-align:left;'>Шкаф управления</td><td>шт.</td><td>1<td>40</td><td>40</td></tr>";
			$summa += 40;

}

function termostat(){//определение терморегуляторов
		global $radio1, $TermoUSD, $summa;
		if ($radio1==0){
		$summa += $TermoUSD[0] + $TermoUSD[1] + $TermoUSD[2];
		echo "<tr><td style='text-align:left;'>Контроллер антиобледенения ETO-1550</td><td>шт.</td><td>1<td>".$TermoUSD[0]."</td><td>".$TermoUSD[0]."</td></tr><tr><td style='text-align:left;'>Датчик влажности ETOR-55</td><td>шт.</td><td>1<td>".$TermoUSD[1]."</td><td>".$TermoUSD[1]."</td></tr><tr><td style='text-align:left;'>Датчик температуры ETF-744/99</td><td>шт.</td><td>1<td>".$TermoUSD[2]."</td><td>".$TermoUSD[2]."</td></tr>";
		}
		else if ($radio1==1){
		$summa += $TermoUSD[3] + $TermoUSD[2];

		echo "<tr><td style='text-align:left;'>Термостат антиобледенения ETR/F-1447</td><td>шт.</td><td>1<td>".$TermoUSD[3]."</td><td>".$TermoUSD[3]."</td></tr><tr><td style='text-align:left;'>Датчик температуры ETF-744/99</td><td>шт.</td><td>1<td>".$TermoUSD[2]."</td><td>".$TermoUSD[2]."</td></tr>";
		}
}
function summa(){
		global $summa;
		$rab = round($summa*0.4);
		$all = round($summa*1.4);
		echo "<tr><td colspan='4' style='text-align:left;background-color:eeeeee;text-align:left;font-weight:bold;'>Стоимость материалов</td><td style='background-color:eeeeee;font-weight:bold;'>".$summa."</td></tr><tr><td colspan='4' style='text-align:left;'>Стоимость монтажных работ</td><td>".$rab."</td></tr><tr><td colspan='4' style='text-align:left;background-color:eeeeee;text-align:left;font-weight:bold;'>Стоимость общая</td><td style='background-color:eeeeee;font-weight:bold;'>".$all."</td></tr>";
}

if (($k[0]==0)&&($k[1]==0)) {
	echo $k[0];
	echo "&nbsp;<br>&nbsp;<br><center><h2>Вы неправильно сделали запрос!</h2></center>";
	}
else {	
?>

<table class="rasch" border="1" cellspacing="0" align="center">
	<tr><th>Наименование</th>
		<th>Единицы<br>измерения</th>
		<th>Количество</th>
		<th>Цена<br>у.е.</th>
		<th>Стоимость<br>у.е.</th>
	</tr>
<?
	if (kabel()==true){
	termostat();
	shitok();
	summa();
	}
?>
</table>
<?
}
?>
<p style="font-size:100%">
В таблицу не включена стоимость по устройству силовой проводки, т.к. она зависит от расстояния между шкафом управления и распределительными коробками кабелей. Ориентировочно эта стоимость составляет от 50 до 300 у.е. в зависимости от количества и мощности кабелей.
</p>

<div  style="padding:10px;text-align:center;">
<?
	$adres='"'.$adres.'"';
	echo ("<INPUT class='red' name='Pereschet' type='button' onclick='javascript:window.location.href=\"http://www.teplopol.com.ua/plosk.php\"' value='Пересчитать'></br>");
?>
</div>
&nbsp;<br>

<div  class="glava">Оплата производится в гривнах по курсу НБУ к USD
</div>

<?
include("end.php");
?>