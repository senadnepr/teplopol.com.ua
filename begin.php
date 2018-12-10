<?

if (empty($title)) {
$title = "Nexans - 'Тёплый пол' и не только... Продажа, монтаж, сервис в Днепропетровске";
}

if (empty($title2)) {
$title2 = "Теплый пол, системы отопления дома, система теплого пола в Днепропетровске";
}


?>

<html>
	<head>
		<title><?echo $title." / ".$title2;?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<META content="Nexans - 'Тёплый пол' и не только... Продажа, монтаж, сервис в Днепре и Харькове" name="Description">
<META content="Nexans теплый пол комфортный дополнительный обогрев электрообогрев полное дополнительное отопление электроотопление антиобледенение кровли крыши водосточных систем желобов труб снеготаяние лестниц пандусов грунта газонов спортплощадок трубопроводов резервуаров фундамента холодильных камер нагревательный расчет цена стоимость греющий электрический кабель одножильный TXLP FSLe кабельная сетка греющие маты Millimat саморегулирующийся терморегулятор термостат программатор датчик утеплитель ремонт монтаж продажа сервис установка Nexans Norway AS, Alcatel, OJ Elektronik" name="Keywords">
		<link rel="stylesheet" type="text/css" href="http://teplopol.com.ua/1.css">
		
	</head>
	
<BODY onload='sel();' rightMargin=0 leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table align="center" border="0"  cellpadding="0" cellspacing="3" width="100%" height="100%">

<tr height="25">

<td rowspan=3 width="192" bgcolor="b22222">

<a href="http://teplopol.com.ua/"><img src="http://teplopol.com.ua/pic/teplopol.jpg" border=0></a>

</td>


<td width="*" bgcolor="b22222" align="left" class=tttt>

<?echo $title;?>

</td>

</tr>


<tr height="117">
<td>


<table align="center" border="0"  cellpadding="0" cellspacing="0" width="100%" height="100%">
<tr valign=top>
<td align="center" width="*">
<img src="http://teplopol.com.ua/pic/3.gif" border=0>
</td>
<td width="270" bgcolor="b22222">
<img src="http://teplopol.com.ua/pic/22.jpg" border=0>
<FORM METHOD=POST ACTION="/phprusearch/" style="margin-top:8px;margin-left:10px;margin-bottom:0px;"><input type="text" name="query" size="20" maxlength=255 value="" style="{border: inset 1px; background: #EEEEEE;font-size:75%;width:180}">&nbsp;<input type=submit class="red" style="font-size:75%" value="Поиск" style="cursor:pointer;" class=but>
</form>

</td>
<td align="center" width="*">
<img src="http://teplopol.com.ua/pic/4.gif" border=0>
</td>
</tr>

</table>

<tr height="30">

<td width="*" bgcolor="0e2a8b" align="left">
<h1><?echo $title2;?></h1>
</td>
</tr>


<tr hight="*" valign=top>
<td width="192" bgcolor="b22222">


<script type="text/javascript">
function inst2(){
	menu = new Array('flor', 'anti', 'grnt', 'prom', 'prch', 'ktlg', 'rash');
}
function hide(e){
	var w = document.getElementById(e);
	for (var i=0; i<7; i++){
		if (e != menu[i]){
			x = document.getElementById(menu[i]);
			x.className = "close";
		}
	}
	w.className = w.className == "close" ?        "open": "close";
}
function sel(){
		inst2();
		hide('<?
$blabla = getenv("REQUEST_URI");
if (substr($blabla,5,1) == "_") {echo substr($blabla,1,4);
}
else {echo "flor";
}
?>');

	
}
</script>

	<table class="menu_left" width="100%" height="*" cellspacing="0" style='padding-top:5px;'>

<tr><td class="menu_left">
		<a class="nadmenu" href="javascript:hide('flor')">ОТОПЛЕНИЕ</a>
			<div  class="close" id="flor">
				<li class="top"><a href="flor_tepl_pol.php">"тёплый"&nbsp;пол</a></li>
				<li><a href="flor_tepl_komfort.php">комфортный&nbsp;обогрев</a></li>
				<li class="bottom"><a href="flor_tepl_otopl.php">полное&nbsp;отопление</a></li>
			</div>
</td></tr><tr><td class="menu_left">

		<a class="nadmenu" href="javascript:hide('anti')">АНТИОБЛЕДЕНЕНИЕ</a>
			<div class="close" id="anti" >
				<li class="top"><a href="anti_obld_krovl.php">крыш&nbsp;и&nbsp;водостоков</a></li>
				<li><a href="anti_obld_pandus.php">лестниц&nbsp;и&nbsp;пандусов</a></li>
				<li class="bottom"><a href="anti_obld_upravl.php">управление&nbsp;системой</a></li>
			</div>
</td></tr><tr><td class="menu_left">

		<a class="nadmenu" href="javascript:hide('grnt')">ПОДОГРЕВ&nbsp;ГРУНТА</a>
			<div id="grnt" class="close">
				<li class="top"><a href="grnt_tepl_teplic.php">теплицы&nbsp;и&nbsp;газоны</a></li>
				<li class="bottom"><a href="grnt_tepl_sport.php">спортсооружения</a></li>
			</div>
</td></tr><tr><td class="menu_left">

		<a class="nadmenu" href="javascript:hide('prom')">ПРОМЫШЛЕННОСТЬ</a>
			<div id="prom" class="close">
				<li class="top"><a href="prom_obog_rezerv.php">обогрев&nbsp;резервуаров</a></li>
				<li class="bottom"><a href="prom_obog_truba.php">трубопроводов</a></li>
			</div>

</td></tr><tr><td class="menu_left">

		<a class="nadmenu" href="javascript:hide('prch')">ДРУГОЕ&nbsp;ПРИМЕНЕНИЕ</a>
			<div id="prch" class="close">
				<li class="top"><a href="prch_prim_holod.php">холодильные&nbsp;камеры</a></li>
				<li><a href="prch_prim_beton.php">бетонирование</a></li>
				<li><a href="prch_prim_kondensat.php">антиконденсат</a></li>
				<li class="bottom"><a href="prch_prim_voler.php">вольеры</a></li>
			</div>

</td></tr><tr><td class="menu_left">

		<a class="nadmenu" href="javascript:hide('ktlg')">КАТАЛОГ&nbsp;&nbsp;И&nbsp;&nbsp;ЦЕНЫ</a>
			<div id="ktlg" class="close">
				<li class="top"><a href="ktlg_prod_kabel.php">кабель</a></li>
				<li><a href="ktlg_prod_termoreg.php">терморегуляторы</a></li>
				<li><a href="ktlg_prod_mater.php">материалы</a></li>
				<li class="bottom"><a href="Nexans_Eberle_OJ.xls">скачать&nbsp;прайс&nbsp;(Excel)</a></li>
			</div>
</td></tr>
<tr><td class="menu_left">

		<a class="nadmenu" href="javascript:hide('rash')">РАСЧЕТ&nbsp;СИСТЕМ</a>
			<div id="rash" class="close">
				<li class="top"><a href="rash_flor.php">отопление</a></li>
				<li><a href="rash_anti.php">антиобледенение</a></li>
				<li class="bottom"><a href="rash_trub1.php">трубопровод</a></li>
								
			</div>
</td></tr>

<tr><td class="menu_left">
	<a class="nadmenu" href="slovar.php">Словарь</a>
</td></tr>

<tr><td class="menu_left">
	<a class="nadmenu" href="bon.php">Партнерам</a>
</td></tr>

<tr><td class="menu_left">
	<a class="nadmenu" href="contacts.php">Контакты</a>
</td></tr>

<tr><td class="menu_left">
	<a class="nadmenu" href="links.php">Ссылки</a>
</td></tr>



		</table>
		
	 	
<img src="http://teplopol.com.ua/pic/55.jpg" border=0 style='padding-top:5px;'>


</td>
<td width="*" bgcolor="ffffff">

