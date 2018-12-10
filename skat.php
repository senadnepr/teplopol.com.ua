<?
$title="Расчёт";
$title2="Расчет системы антиобледенения скатной кровли";
include("begin.php");
?>

    <SCRIPT language=JavaScript><!--
var number1, number2, name1, name2, id3, i;
function inst(){
	number1 = 0;
	number2 = 0;
	name1 = 0;
	name2 = 0;
	id3 = 0;
	i = 0;
	document.getElementById("k[0]").blur();
	document.getElementById("k[0]").select();


}
function chSquare (num1){//изменение в текстовом поле
	number1 = document.getElementById(num1).value;
	if ((number1.search(/^\d+(\.\d+)?$/)) == -1) { //проверка на правильный ввод чисел
	alert("Введите значение в цифрах!");
	document.getElementById(num1).blur();
	document.getElementById(num1).select();
	return false;
	}
	else {	
		return true;
	}
}
function stroka(i,nam){
	i+=4;
	if (chSquare(nam)){ 
	name1 ="k["+i+"]";
	name2="l["+i+"]";
	id3="d"+i;
	document.getElementById("d"+i).className = "open";
	document.getElementById("d"+i).innerHTML="Количество труб&nbsp;<INPUT type='text' name="+name1+" id="+name1+" onchange='stroka("+i+", this.name)' size=3>&nbsp;, высотой <INPUT type='text' name="+name2+" id="+name2+" onblur='chSquare(this.name)' size=3> м&nbsp;&nbsp;каждая";
	document.getElementById(name1).value = 0;
	document.getElementById(name2).value = 0;

	}
}
function stroka_endova(i,nam){
	i+=4;
	if (chSquare(nam)){
	name1 ="k["+i+"]";
	name2="l["+i+"]";
	id3="d"+i;
	document.getElementById("d"+i).className = "open";
	document.getElementById("d"+i).innerHTML="Длина желобов и ендов, соединенных между собой&nbsp;<INPUT type='hidden' value='1' name="+name1+">&nbsp;<INPUT type='text' name="+name2+" id="+name2+" onblur='stroka_endova("+i+",this.name)' size=3> м";
	document.getElementById(name2).value = 0;
	}
};
// --></SCRIPT>
 
<form class="open" method="post" name="form1" action="ras_anti.php">
<fieldset><legend>&nbsp;Водосточные трубы диаметром 100 мм и менее&nbsp;</legend>

<div id="d0">Количество труб&nbsp;<INPUT type="text" value="0" name="k[0]" id="k[0]" onchange='stroka(0,this.name)' size=3>&nbsp;, высотой <INPUT type="text" name="l[0]" id="l[0]" onblur='chSquare(this.name)' size=3> м&nbsp;&nbsp;каждая</div>
<div id="d4" class="close">&nbsp;</div>
<div id="d8" class="close">&nbsp;</div>
<div id="d12" class="close">&nbsp;</div>
<div id="d16" class="close">&nbsp;</div>
<div id="d20" class="close">&nbsp;</div>
<div id="d24" class="close">&nbsp;</div>
<div id="d28" class="close">&nbsp;</div>
<div id="d32" class="close">&nbsp;</div>

</fieldset>
<fieldset><legend>&nbsp;Водосточные трубы диаметром более 100 мм&nbsp;</legend>

<div id="d1">Количество труб&nbsp;<INPUT type="text" value="0" name="k[1]" id="k[1]" onchange="stroka(1,this.name)" size=3>&nbsp;, высотой <INPUT type="text" name="l[1]" id="l[1]" onblur="chSquare(this.name)" size=3> м&nbsp;&nbsp;каждая</div>
<div id="d5" class="close">&nbsp;</div>
<div id="d9" class="close">&nbsp;</div>
<div id="d13" class="close">&nbsp;</div>
<div id="d17" class="close">&nbsp;</div>
<div id="d21" class="close">&nbsp;</div>
<div id="d25" class="close">&nbsp;</div>
<div id="d29" class="close">&nbsp;</div>
<div id="d33" class="close">&nbsp;</div>

</fieldset>
<fieldset><legend>&nbsp;Водосточные желоба и проблемные ендовы&nbsp;</legend>
<INPUT type="hidden" value="skat.htm" name="adres">
<div id="d2">Длина желобов и ендов, соединенных между собой&nbsp;<INPUT type="hidden" value="1" name="k[2]">&nbsp;<INPUT type="text" name="l[2]" id="l[2]" onchange="stroka_endova(2,this.name)" size=3> м</div>
<div id="d6" class="close">&nbsp;</div>
<div id="d10" class="close">&nbsp;</div>
<div id="d14" class="close">&nbsp;</div>
<div id="d18" class="close">&nbsp;</div>
<div id="d22" class="close">&nbsp;</div>
<div id="d26" class="close">&nbsp;</div>
<div id="d30" class="close">&nbsp;</div>
<div id="d34" class="close">&nbsp;</div>

</fieldset>

<fieldset><legend>&nbsp;Система&nbsp;управления&nbsp;</legend>
<div>
<INPUT type="radio" checked name=radio1 value="0"> автоматическая (по температуре воздуха и датчику осадков)<br>
<INPUT type="radio" name=radio1 value="1"> полуавтоматическая (только по температуре воздуха)<br>
<INPUT type="radio" name=radio1 value="2"> вручную <br>
</div>
</fieldset>

&nbsp;<br>

<center>
<input class="red" type="submit" value="Рассчитать">&nbsp;&nbsp;<input class="red" onclick="javascript:window.location.href='skat.php'" type="button" value="Очистить">
</center>

</form>

<?
include("end.php");
?>


