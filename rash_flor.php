<?

if (empty($title)) {
$title = "Nexans - 'Тёплый пол' и не только... Продажа, монтаж, сервис в Днепропетровске";
}

if (empty($title2)) {
$title2 = "Теплый пол, системы отопления дома, система \"Теплый пол\" в Днепропетровске";
}


?>

<html>
	<head>
		<title><?echo "TeploPol.com.ua :: ".$title." / ".$title2;?></title>
		<meta http-equiv="Content-Type" content="charset=windows-1251">
		<META content="Nexans - 'Тёплый пол' и не только... Продажа, монтаж, сервис в Днепропетровске" name="Description">
<META content="Nexans теплый пол комфортный дополнительный обогрев электрообогрев полное дополнительное отопление электроотопление антиобледенение кровли крыши водосточных систем желобов труб снеготаяние лестниц пандусов грунта газонов спортплощадок трубопроводов резервуаров фундамента холодильных камер нагревательный расчет цена стоимость греющий электрический кабель одножильный TXLP FSLe кабельная сетка греющие маты Millimat саморегулирующийся терморегулятор термостат программатор датчик утеплитель ремонт монтаж продажа сервис установка Nexans Norway AS, Alcatel, OJ Elektronik" name="Keywords">
		<link rel="stylesheet" type="text/css" href="http://www.teplopol.com.ua/1.css">
<script type="text/javascript">

function closeOut(){//для окон, появляющихся в 3-м фрейме
	if (self.parent.length == 0){

		window.name = window.location.href + "|" + document.title;
		window.location.href = "../index.html";
//		document.write (window.name);
	}
	top.document.title = document.title;
}
function breakOut() { //для окон 0-го, 1-го и 2-го фрейма  
 				if (self.parent.length == 0)
				self.parent.location="../index.html";
}

function navi(){
	if ("Microsoft Internet Explorer" == navigator.appName){
		navName = "MSI";
	}
	else if ("Netscape" == navigator.appName){
			navName = "NE";
	}
	else {
		navName = "other";
	}
	return navName;
}

   TermoUSD = new Array(1400,1600,2200,1617,1665,1995,2346,3657);
     TXLP18 = new Array(300,400,500,600,700,850,1000,1250,1400,1750,2200,2600,3100);
  TXLP18USD = new Array(1887,1983,2085,2223,2619,2805,3225,3747,4293,5127,6117,7167,8505);
  TXLP18len = new Array(17.6,23.5,29.4,35.3,41.2,50.0,58.8,73.5,82.3,102.9,129.4,156.0,185.6);  

var textTermo;
var strTermoID;
var strProT;
var nameTermo;
var square;
var kabelUSD;
var kabelUSD2;
var kabellen;
var kabel;
var kabel2=0;
var powerAll;
var kol_vo;
var shtroba;
var puskatUSD;
var setka;
var lenta;
var str2Flag;
var	str3Flag;
var	str4Flag;
var	str5Flag;
var	str6Flag;
var	str7Flag;
var	str8Flag;

function inst(){//инициализация при загрузке страницы
	peresch();
	square = 1;
	sq = document.getElementById('sq');
	sq.value = 1;
	Termostat();
	chPower1();	
	sq.select();
}
function chSquare (){//ввод площади
	sq = document.getElementById('sq');
	square = sq.value;
	if ((square.search(/^\d+(\.\d+)?$/)) == -1) { //проверка на правильный ввод чисел	
	alert("Введите величину площади в цифрах! Например: 4.1");
	inst();
	}
}


function chPower1 (){//выбор мощности переключателем
	if (document.forms[0].radio1[0].checked == true){
		power = 140;
	}
	else if (document.forms[0].radio1[1].checked == true){
		power = 170;
	}
	else {
		power = 200;

	}
}
function Kabel(){//выбор мощности кабеля

	var i = 0;
	kabel2 ="";
	powerAll = power*square;
	kabelUSD = 0;
	kabelUSD2 = 0;
	puskatUSD = 0;
	if (navi()!= 'MSI'){
		div1 = document.getElementById('div1');
		div2 = document.getElementById('div2');
	}
	div1.className = "close";
	div2.className = "open";
	kol_vo = 1;//количество кабелей одной мощности, если их больше 1
    do{
         kabellen = TXLP18len[i]; 
         kabelUSD = TXLP18USD[i];    
         kabel = TXLP18[i];
         i++;
     }while ((TXLP18[i-1]<powerAll)&&(i<=13));
//выбор одного кабеля

   if (i>13){
		i = 0;

	    do{
	         kabellen = TXLP18len[i]; 
 	         kabelUSD = TXLP18USD[i];
			 kabel = TXLP18[i];
	         i++;
 	    }while (((TXLP18[i-1]) < powerAll/2) && (i<=13));
 		//выбор первого кабеля из двух    

		var i1 = i-1;
		i = 0;
	    do {
 	        kabellen = TXLP18len[i1] + TXLP18len[i]; 
 	        kabelUSD2 = TXLP18USD[i];
			kabel2 = TXLP18[i];
 	        i++;
	    }while (((TXLP18[i1] + TXLP18[i-1]) < powerAll) && (i<=13));
		//выбор второго кабеля из двух

		if (kabel != kabel2) str2Flag = true;
		else {
			kabellen = TXLP18len[i1] * 2;
		   	kol_vo = 2;
			kabelUSD = TXLP18USD[i1] * 2;
			kabelUSD2 = 0;
		}
		//если второй == первому, то кол-во = 2

		if ((TXLP18[12]*2) < powerAll){
			if (navi()!= 'MSI'){
				div1 = document.getElementById('div1');
				div2 = document.getElementById('div2');
				str2 = document.getElementById('str2');
			}
			div1.className = "open";
			div2.className = "close";
			str2.className = "close";
	
			kabel = "";
			kabel2 = ""; 

			alert("Вы очень серъезный клиент ! Для Вас предусмотрены специальные скидки ! \nОбратитесь в нашу фирму для полного расчета !");
 	     }
    }
//	if (((kabel + kabel2)>1800)&&(strTermoID == 0)){
//		puskatUSD = 20;
//		str7Flag = true;
//	}
//	if (((kabel + kabel2)>2600)&&(strTermoID == 1)){
//		puskatUSD = 20;
//		str7Flag = true;
//	}
	if ((kabel + kabel2) > 3000){
		puskatUSD = 810;
		str7Flag = true;
	}
//нужен пускатель или нет
}

function uteplUSD(){//стоимость утеплителя или штробы и крепления
	shtroba = 0;
	setka = 0;
	var price = 0;

		if (document.forms[0].radio3[0].checked == true){
			price = 40 * square;
			str3Flag = true;
			str4Flag = true;
			setka = 38 * square;
		}
		else if (document.forms[0].radio3[1].checked == true){
			price = (kabel + kabel2) * 1.2 * 30 / 100;
			str5Flag = true;
			lenta = (kabel + kabel2) * 1.2 / 100;
		}
		else if (document.forms[0].radio3[2].checked == true){
			shtroba = kabellen;
			str6Flag = true;
		}
		else {
			price = 90 * square;
			str8Flag = true;
			str4Flag = true;
			setka = 38 * square;
		}
	return price;
}
function Termostat(){
	if (navi()!="MSI"){
		termo = document.getElementById('termo');
		strTermoID = termo.value;
		ProTer(strTermoID);//выбор текста про терморегулятор
		textProTermo = document.getElementById('textProTermo');
		textProTermo.value = strProT;
		prTermo = document.getElementById('prTermo');
		prTermo.value = TermoUSD[strTermoID];//цена терморегулятора
	}
	else {
		strTermoID = form2.termo.value;
		ProTer(strTermoID);//выбор текста про терморегулятор
		form2.textProTermo.value = strProT;
		form2.prTermo.value = TermoUSD[strTermoID];//цена терморегулятора
	}
}
function ProTer(strTermoID){
		img_term0 = document.getElementById('img_term0');
		img_term1 = document.getElementById('img_term1');
		img_term2 = document.getElementById('img_term2');
		img_term3 = document.getElementById('img_term3');
		img_term4 = document.getElementById('img_term4');
		img_term5 = document.getElementById('img_term5');
		img_term6 = document.getElementById('img_term6');
		img_term7 = document.getElementById('img_term7');


	img_term0.className = "close";
	img_term1.className = "close";
	img_term2.className = "close";
	img_term3.className = "close";
	img_term4.className = "close";
	img_term5.className = "close";
	img_term6.className = "close";
	img_term7.className = "close";

	if (strTermoID == "0"){
		nameTermo = "EBERLE FRe 525";
		img_term0.className = "open";
		strProT = "Ток нагрузки - 16A(3600Вт). Выключатель. \nДиапазон регулирования температуры +10...+60 С\nМонтаж - настенный накладной."
	}
	if (strTermoID == "1"){
		nameTermo = "EBERLE F2A";
		img_term1.className = "open";
		strProT = "Ток нагрузки - 16A(3600Вт). Выключатель. \nДиапазон регулирования температуры +10...+50 С\nМонтаж - настенный внутренний."
	}
	if (strTermoID == "2"){
		nameTermo = "EBERLE Instat+";	
		img_term2.className = "open";
		strProT = "Программируемый таймер с дисплеем. Шесть суточных установок температуры для каждого дня недели. Имеет функции адаптации и определения расхода электроэнергии. Режим ограничения температуры. Ток нагрузки - 16A(3600Вт). Диапазон регулирования температуры +10...+50 С."
	}
	if (strTermoID == "3"){
		nameTermo = "OJ MTU2";
		img_term3.className = "open";
		strProT = "Ток нагрузки - 16A(3600Вт). \nДиапазон регулирования температуры +10...+40 С\nМонтаж - настенный накладной."
	}
	if (strTermoID == "4"){
		nameTermo = "OJ OTN";
		img_term4.className = "open";
		strProT = "Ток нагрузки - 16A(3600Вт). Выключатель. \nДиапазон регулирования температуры +10...+40 С\nМонтаж - настенный внутренний."
	}
	if (strTermoID == "5"){
		nameTermo = "OJ OTN2";	
		img_term5.className = "open";
		strProT = "Дисплей. Индикация температуры. Уменшенная толщина корпуса - удобство монтажа. Ток нагрузки - 16A(3600Вт). Диапазон регулирования температуры +5...+40 С."
	}

	if (strTermoID == "6"){
		nameTermo = "OJ OCC2";	
		img_term6.className = "open";
		strProT = "Программируемый таймер с дисплеем. Четыре суточные установки температуры для каждого дня недели. Имеет функции адаптации и определения расхода электроэнергии. Режим ограничения температуры. Ток нагрузки - 16A(3600Вт). Диапазон регулирования температуры +5...+40 С."
	}
	if (strTermoID == "7"){
		nameTermo = "OJ OCD5";	
		img_term7.className = "open";
		strProT = "Программируемый таймер с большим сенсорным дисплеем. Все функции OCC2 плюс совсем понятный и дружественный интерфейс на русском языке. Два датчика температуры."
	}


	return (strProT)
}

function culc(){
	Kabel();
	if (navi()!= 'MSI'){
		str2 = document.getElementById('str2');
		str3 = document.getElementById('str3');
		str4 = document.getElementById('str4');
		str5 = document.getElementById('str5');
		str6 = document.getElementById('str6');
		str7 = document.getElementById('str7');
		str8 = document.getElementById('str8');

		kabel1 = document.getElementById('kabel1');
		cena_kabel1 = document.getElementById('cena_kabel1');
		stoim_kabel1 = document.getElementById('stoim_kabel1');
		kol_vo_kabel = document.getElementById('kol_vo_kabel');
		termoreg = document.getElementById('termoreg');
		stoim_termo = document.getElementById('stoim_termo');
		cena_termo = document.getElementById('cena_termo');
		cena_termo = document.getElementById('cena_termo');
		kol_vo_utepl = document.getElementById('kol_vo_utepl');
		stoim_utepl = document.getElementById('stoim_utepl');
		kol_vo_roof = document.getElementById('kol_vo_roof');
		stoim_roof = document.getElementById('stoim_roof');
		kol_vo_setka = document.getElementById('kol_vo_setka');
		stoim_setka = document.getElementById('stoim_setka');
		kol_vo_lenta = document.getElementById('kol_vo_lenta');
		stoim_lenta = document.getElementById('stoim_lenta');

		sec_kabel = document.getElementById('sec_kabel');
		cena_kabel2 = document.getElementById('cena_kabel2');
		stoim_kabel2 = document.getElementById('stoim_kabel2');
		kol_vo_shtroba = document.getElementById('kol_vo_shtroba');
		stoim_shtroba = document.getElementById('stoim_shtroba');
		stoim_mater = document.getElementById('stoim_mater');
		stoim_work = document.getElementById('stoim_work');
		stoim_all = document.getElementById('stoim_all');
	}

	kabel1.innerHTML = "Кабель нагревательный TXLP1/" + kabel + " Вт";

	cena_kabel1.innerHTML = kabelUSD;
	stoim_kabel1.innerHTML = kabelUSD;
	kol_vo_kabel.innerHTML = kol_vo;

	sec_kabel.innerHTML = "Кабель нагревательный TXLP1/" + kabel2 + " Вт";
	cena_kabel2.innerHTML = kabelUSD2;
	stoim_kabel2.innerHTML = kabelUSD2;

	termoreg.innerHTML = "Терморегулятор " + nameTermo;
	stoim_termo.innerHTML = TermoUSD[strTermoID];
	cena_termo.innerHTML = TermoUSD[strTermoID];

	var uteplUSD1 = uteplUSD();	
	if (navi()!= 'MSI'){

		if(!str3Flag) str3.className = "hidden";
		else str3.className = "visible";	
		if(!str2Flag) str2.className = "hidden";
		else str2.className = "visible";
		if(!str4Flag) str4.className = "hidden";
		else str4.className = "visible";
		if(!str5Flag) str5.className = "hidden";
		else str5.className = "visible";
		if(!str6Flag) str6.className = "hidden";
		else str6.className = "visible";
		if(!str7Flag) str7.className = "hidden";
		else str7.className = "visible";
		if(!str8Flag) str8.className = "hidden";
		else str8.className = "visible";
	}
	else {
		if(!str3Flag) str3.className = "close";
		else str3.className = "open";	
		if(!str2Flag) str2.className = "close";
		else str2.className = "open";
		if(!str4Flag) str4.className = "close";
		else str4.className = "open";
		if(!str5Flag) str5.className = "close";
		else str5.className = "open";
		if(!str6Flag) str6.className = "close";
		else str6.className = "open";
		if(!str7Flag) str7.className = "close";
		else str7.className = "open";	
		if(!str8Flag) str8.className = "close";
		else str8.className = "open";	

	}

	var prMater = TermoUSD[strTermoID] + setka + uteplUSD1 + kabelUSD + kabelUSD2 + puskatUSD;

	stoim_mater.innerHTML = Math.round(prMater);
	stoim_work.innerHTML = Math.round(prMater * 0.3);
	stoim_all.innerHTML = Math.round(prMater * 1.3) + Math.round(shtroba * 25);

	kol_vo_shtroba.innerHTML = Math.round(shtroba);
	stoim_shtroba.innerHTML = 25 * Math.round(shtroba);


	kol_vo_utepl.innerHTML = square;
	stoim_utepl.innerHTML = uteplUSD1;

	kol_vo_roof.innerHTML = square;
	stoim_roof.innerHTML = uteplUSD1;

	kol_vo_setka.innerHTML = square;
	stoim_setka.innerHTML = 38 * square;

	kol_vo_lenta.innerHTML = lenta;
	stoim_lenta.innerHTML = uteplUSD1;

}
function peresch(){
	if (navi()!= 'MSI'){
		div1 = document.getElementById('div1');
		div2 = document.getElementById('div2');
	}

	div1.className = "open";
	div2.className = "close";
	str2Flag = false;
	str3Flag = false;
	str4Flag = false;
	str5Flag = false;
	str6Flag = false;
	str7Flag = false;
	str8Flag = false;

//закрытие форм и строк в таблице при пересчете

}
</script>
</head>

<BODY style="font-size:75%;" class="white" onload="inst()" onload='sel();' rightMargin=0 leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">




<table align="center" border="0"  cellpadding="0" cellspacing="3" width="100%" height="100%">

<tr height="25">

<td rowspan=3 width="192" bgcolor="b22222">

<a href="http://www.teplopol.com.ua/"><img src="http://www.teplopol.com.ua/pic/teplopol.jpg" border=0></a>

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
<img src="http://www.teplopol.com.ua/pic/3.gif" border=0>
</td>
<td width="270" bgcolor="b22222">
<img src="http://www.teplopol.com.ua/pic/22.jpg" border=0>


</td>
<td align="center" width="*">
<img src="http://www.teplopol.com.ua/pic/4.gif" border=0>
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
		hide('<?$blabla = getenv("REQUEST_URI");
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
				<li class="bottom"><a href="Nexans_OJ_Elektronik.xls">скачать&nbsp;прайс&nbsp;(Excel)</a></li>
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

<tr><td style="border-bottom:0px" class="menu_left"><b><font color=white></font></b></td></tr>

		</table>
		
	 	
<img src="http://www.teplopol.com.ua/pic/55.jpg" border=0 style='padding-top:5px;'>


</td>
<td width="*" bgcolor="ffffff">




<div class="glava">
<big><strong>Расчет системы комфортного отопления "Тёплый пол"</br></big></strong>
</div>
<div class="open" id="div1">
<form class="open" method="post" id="form2" name="form2">
<fieldset><legend>&nbsp;Площадь пола обогреваемого помещения&nbsp;</legend>
<div>
<INPUT type="text" name="sq" id="sq" onblur="chSquare()" size=3> м<SUP>2</SUP>
&nbsp;свободной от мебели, бытовых и сантехнических приборов
</div>
</fieldset>

<fieldset><legend>&nbsp;Вид устанавливаемой системы&nbsp;</legend>
<div>
<INPUT type="radio" onclick="chPower1()" checked value="0" name=radio1 id="radio1">комфортный подогрев пола<br>
<INPUT type="radio" onclick="chPower1()" name=radio1 id="radio1" value="1">дополнительный обогрев<br>
<INPUT type="radio" onclick="chPower1()" name=radio1 id="radio1" value="2">полный обогрев помещения
</div>
</fieldset>

<fieldset><legend>&nbsp;Модель терморегулятора&nbsp;</legend>
<div style="float: left;">
<SELECT name="termo"  id="termo" onchange="Termostat()">
<OPTION value="0">EBERLE FRe 525&nbsp;&nbsp;&nbsp;(базовый)</OPTION>
<OPTION value="1">EBERLE FRe F2A&nbsp;&nbsp;&nbsp;(улучшенный)</OPTION>
<OPTION value="2">EBERLE Instat+&nbsp;(программируемый)</OPTION>
<OPTION value="3">OJ MTU2-1991&nbsp;&nbsp;&nbsp;(базовый)</OPTION>
<OPTION value="4">OJ OTN-1991&nbsp;&nbsp;&nbsp;(улучшенный)</OPTION>
<OPTION value="5">OJ OTN2-1991&nbsp;&nbsp;&nbsp;(с дисплеем)</OPTION>
<OPTION value="6">OJ OCC2-1991&nbsp;(программируемый)</OPTION>
<OPTION value="7">OJ OCD5&nbsp;(сенсорный)</OPTION>
</SELECT>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type="text" name="prTermo" id="prTermo" readonly size=3 style="text-align: right">&nbsp;грн.<br>&nbsp;</br>

<TEXTAREA rows=4 cols=54 name="textProTermo" id="textProTermo" style="font-size:90%;font-family:Verdana, Arial, sans-serif;" readonly></TEXTAREA>
</div>
<div>
<img id="img_term0" hspace="20" src="../Image/fre525.jpg">
<img id="img_term1" hspace="20" src="../Image/fref2a.jpg">
<img id="img_term2" hspace="20" src="../Image/Instat+.jpg">
<img id="img_term3" hspace="20" src="../Image/mtu_f.jpg">
<img id="img_term4" hspace="20" src="../Image/otn_f.jpg">
<img id="img_term5" hspace="20" src="../Image/otn2.jpg">
<img id="img_term6" hspace="20" src="../Image/occ2_f.jpg">
<img id="img_term7" hspace="20" src="../Image/ocd5_b.jpg">

</div>

</fieldset>

<fieldset><legend>&nbsp;Вариант установки системы&nbsp;</legend>
<div>
<INPUT type="radio" checked name=radio3 id=radio3 value="0"> с утеплителем "Полиизол" (толщина чистовой стяжки не менее 30 мм)<br>
<INPUT type="radio" name=radio3 id=radio3 value="1"> без утеплителя (толщина чистовой стяжки менее 30 мм)<br>
<INPUT type="radio" name=radio3 id=radio3 value="2"> штробление (без чистовой стяжки)<br>
<INPUT type="radio" name=radio3 id=radio3 value="3"> с утеплителем "RoofMate" (толщина верхней стяжки не менее 50 мм)
</div>
</fieldset>
<div  style="padding:10px;text-align:center;">
<INPUT class="red" name=Rashet onclick="culc()" type=button value="Выполнить расчёт"></br>
</div>
<div  class="glava">
* Вы можете сохранить данную страницу у себя на компьютере и самостоятельно производить вычисления !</br></div>
 
</form>
</div>
<div class="close" id="div2">
<form id="form3" method="post">
&nbsp;</br>
<table class="rasch" border="1" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<th>Наименование</th>
		<th>Единицы<br>измерения</th>
		<th>Количество</th>
		<th>Цена<br>грн.</th>
		<th>Стоимость<br>грн.</th>
	</tr>
	<tr>
		<td id="kabel1" style="text-align:left;">&nbsp;</td>
		<td>шт.</td>
		<td id="kol_vo_kabel">&nbsp;</td>
		<td id="cena_kabel1">&nbsp;</td>
		<td id="stoim_kabel1">&nbsp;</td>
	</tr>
	<tr id="str2" >
		<td id="sec_kabel" style="text-align:left;">&nbsp;</td>
		<td>шт.</td>
		<td>1</td>
		<td id="cena_kabel2">&nbsp;</td>
		<td id="stoim_kabel2">&nbsp;</td>
	</tr>
	<tr>
		<td id="termoreg" style="text-align:left;">&nbsp;</td>
		<td>шт.</td>
		<td>1</td>
		<td id="cena_termo">&nbsp;</td>
		<td id="stoim_termo">&nbsp;</td>
	</tr>
	<tr id="str3">
		<td id="utepl" style="text-align:left;">Утеплитель "Полиизол"</td>
		<td>м<sup>2</sup></td>
		<td id="kol_vo_utepl">&nbsp;</td>
		<td>40</td>
		<td id="stoim_utepl">&nbsp;</td>
	</tr>	
	<tr id="str8">
		<td id="roof" style="text-align:left;">Утеплитель "RoofMate"</td>
		<td>м<sup>2</sup></td>
		<td id="kol_vo_roof">&nbsp;</td>
		<td>90</td>
		<td id="stoim_roof">&nbsp;</td>
	</tr>

	<tr id="str4">
		<td style="text-align:left;">Сетка металлическая</td>
		<td>м<sup>2</sup></td>
		<td id="kol_vo_setka">&nbsp;</td>
		<td>38</td>
		<td id="stoim_setka">&nbsp;</td>
	</tr>
	<tr id="str5">
		<td style="text-align:left;">Лента монтажная</td>
		<td>м.п.</td>
		<td id="kol_vo_lenta">&nbsp;</td>
		<td>38</td>
		<td id="stoim_lenta">&nbsp;</td>
	</tr>
<tr id="str7">
		<td id="puskat" style="text-align:left;">Пускатель</td>
		<td>шт.</td>
		<td>1</td>
		<td>810</td>
		<td>810</td>
	</tr>
	<tr>
		<td colspan="4" style="background-color:eeeeee;text-align:left;font-weight:bold;">Стоимость материалов</td>
		<td id="stoim_mater" style="background-color:eeeeee;font-weight:bold;">&nbsp;</td>
	</tr>

	<tr id="str6">
		<td style="text-align:left;">Штроборезные работы</td>
		<td>м.п.</td>
		<td id="kol_vo_shtroba">&nbsp;</td>
		<td>25</td>
		<td id="stoim_shtroba">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="4" style="text-align:left;">Стоимость монтажа</td>
		<td id="stoim_work">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="4" style="text-align:left;font-weight:bold;background-color:eeeeee;">Стоимость общая</td>
		<td id="stoim_all" style="font-weight:bold;background-color:eeeeee;">&nbsp;</td>
	</tr>

</table>
&nbsp;<br>

<div  style="padding:10px;text-align:center;">
<INPUT class="red" name="Pereschet" onclick="peresch()" type=button value="Пересчитать"></br>
</div>
&nbsp;<br>

<div  class="glava">
</div>


</form>
</div>
<?
include("end.php");
?>