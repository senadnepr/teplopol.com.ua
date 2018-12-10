<?

if ($trub==1){$trtr='трубопровода';} else
{$trtr='ёмкости';}

$title="Расчёт систем обогрева $trtr";

$title2="Опросный лист обогрева $trtr";
include("begin.php");
?>

<form name="trub" method="post" action="mailto.php">
<fieldset>
<table cellpadding="0" cellspacing="0" class="forma_r"><td>
&nbsp;&nbsp;Заказчик (организация)<input type="hidden" name="name[0]" value="Заказчик"></td><td>&nbsp;<input type="text" size="40" name="val[0]"></td></tr><tr><td>
&nbsp;&nbsp;Контактное лицо<input type="hidden" name="name[1]" value="Контактное лицо"></td><td>&nbsp;<input type="text" size="40" name="val[1]"></td></tr><tr><td>
&nbsp;&nbsp;e-mail<input type="hidden" name="name[2]" value="e-mail"></td><td>&nbsp;<input type="text" size="20" name="val[2]"></td></tr><tr><td>
&nbsp;&nbsp;Телефон<input type="hidden" name="name[3]" value="Телефон"></td><td>&nbsp;<input type="text" size="20" name="val[3]"></td></tr><tr><td>
&nbsp;&nbsp;Факс<input type="hidden" name="name[4]" value="Факс"></td><td>&nbsp;<input type="text" size="20" name="val[4]"></td></tr></table>
</fieldset>
<fieldset><legend>&nbsp;Общие данные по проекту&nbsp;</legend>
<table cellpadding="0" cellspacing="0" class="forma_r" border="0"><td>
&nbsp;&nbsp;Наименование<input type="hidden" name="name[5]" value="Наименование"></td><td>&nbsp;<input type="text" size="40" name="val[5]"></td></tr><tr><td>
&nbsp;&nbsp;Расположение<input type="hidden" name="name[6]" value="Расположение"></td><td>&nbsp;<input type="text" size="40" name="val[6]"></td></tr><tr><td>
&nbsp;&nbsp;Наличие конструкторской документации<input type="hidden" name="name[7]" value="Документация"></td><td>&nbsp;<input type="text" size="20" name="val[7]"></td></tr><tr><td>
&nbsp;&nbsp;Необходимость проектных работ<input type="hidden" name="name[8]" value="Проектные работы"></td><td>&nbsp;<input type="text" size="20" name="val[8]"></td></tr><tr><td>
&nbsp;&nbsp;Исполнитель монтажа<input type="hidden" name="name[9]" value="Исполнитель"></td><td>&nbsp;<input type="text" size="40" name="val[9]"></td></tr></table>
</fieldset>
<fieldset><legend>&nbsp;Проектные данные&nbsp;</legend>
<table cellpadding="0" cellspacing="0" class="forma_r"><tr><td>
&nbsp;&nbsp;Назначение<input type="hidden" name="name[10]" value="Назначение"></td><td>&nbsp;<input checked type="radio" name="val[10]" value="защита от замерзания">&nbsp;защита от замерзания</td></tr><tr><td>
&nbsp;</td><td>&nbsp;<input type="radio" name="val[10]" value="поддержание температуры">&nbsp;поддержание температуры</td></tr><tr><td>
&nbsp;</td><td>&nbsp;<input type="radio" name="val[10]" value="противоконденсационный нагрев">&nbsp;противоконденсационный нагрев</td></tr><tr><td>
&nbsp;</td><td>&nbsp;<input type="radio" name="val[10]" value="запуск системы с нуля">&nbsp;запуск системы с "нуля"</td></tr><tr><td>

&nbsp;&nbsp;Температура,<input type="hidden" name="name[11]" value="Температура:"><input type="hidden" name="val[11]" value="&nbsp;"> <sup>o</sup>C</td><input type="hidden" name="name[12]" value="-окружающей среды"><td>&nbsp;&nbsp;окружающей среды, min/max</td></td><td>&nbsp;<input type="text" size="10" name="val[12]"></td></tr><tr><td>
&nbsp;</td><td>&nbsp;&nbsp;нормальная технологическая *<input type="hidden" name="name[13]" value="-нормальная технологическая"></td><td>&nbsp;<input type="text" size="10" name="val[13]"></td></tr><tr><td>
&nbsp;</td><td>&nbsp;&nbsp;максимальная технологическая **<input type="hidden" name="name[14]" value="-максимальная технологическая"></td><td>&nbsp;<input type="text" size="10" name="val[14]"></td></tr><tr><td>
&nbsp;</td><td>&nbsp;&nbsp;максимальная допустимая<input type="hidden" name="name[15]" value="-максимально допустимая"></td><td>&nbsp;<input type="text" size="10" name="val[15]"></td></tr><tr><td>
&nbsp;</td><td>&nbsp;&nbsp;минимальная включения ***<input type="hidden" name="name[16]" value="-минимальная включения"></td><td>&nbsp;<input type="text" size="10" name="val[16]"></td></tr>
<tr><td>
&nbsp;&nbsp;Пропарка<input type="hidden" name="name[16]" value="Пропарка"></td><td>&nbsp;&nbsp;макс. температура пара<input type="hidden" name="name[17]" value="макс. температура пара"></td><td>&nbsp;<input type="text" size="10" name="val[17]"></td><td>&nbsp;<input checked type="radio" name="val[16]" value="да">&nbsp;да</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
<td>&nbsp;<input type="radio" name="val[16]" value="нет">&nbsp;нет</td></tr>
<tr><td>
&nbsp;&nbsp;Размещение<input type="hidden" name="name[18]" value="Размещение"></td><td>&nbsp;<input checked type="radio" name="val[18]" value="объект на открытом воздухе">&nbsp;объект на открытом воздухе</td></tr><tr><td>
&nbsp;</td><td>&nbsp;<input type="radio" name="val[18]" value="объект в помещении">&nbsp;объект в помещении</td></tr>
<input type="hidden" name="name[19]" value="&nbsp;">
<tr><td>&nbsp;</td><td>&nbsp;<input checked type="radio" name="val[19]" value="наружный монтаж кабеля">&nbsp;наружный монтаж кабеля</td></tr><tr><td>
&nbsp;</td><td>&nbsp;<input type="radio" name="val[19]" value="внутренний монтаж кабеля">&nbsp;внутренний монтаж кабеля</td></tr>
<tr><td>
&nbsp;&nbsp;Теплоизоляция<input type="hidden" name="name[20]" value="Теплоизоляция"></td><td>&nbsp;<input checked type="radio" name="val[20]" value="минеральная вата(маты)">&nbsp;минеральная вата(маты)</td></tr>
<?
if ($trub==1){
	$hr="opr_list_truba.doc";
?>
<input type="hidden" name="trub" value="1">
<tr><td>
&nbsp;</td><td>&nbsp;<input type="radio" name="val[20]" value="минеральная вата(трубы)">&nbsp;минеральная вата(трубы)</td></tr>
<?
}
?>
<tr><td>
&nbsp;</td><td>&nbsp;<input type="radio" name="val[20]" value="иное">&nbsp;иное (коэф.теплопров. при 10<sup>o</sup>C)</td><td>&nbsp;<input type="hidden" name="name[21]" value="-коэф.теплопроводности"><input type="text" size="10" name="val[21]"></td></tr>
<tr><td>
&nbsp;&nbsp;Классификация зоны<input type="hidden" name="name[22]" value="Классификация"><input type="hidden" name="val[22]" value="&nbsp;"></td><td>&nbsp;<input type="hidden" name="name[23]" value="&nbsp;"><input type="checkbox" name="val[23]" value="взрывоопасная">&nbsp;взрывоопасная</td></tr><tr><td>
&nbsp;<input type="hidden" name="name[24]" value="&nbsp;"></td><td>&nbsp;<input type="checkbox" name="val[24]" value="агрессивная">&nbsp;агрессивная</td></tr>
<tr><td>
&nbsp;&nbsp;Материал стенок<input type="hidden" name="name[25]" value="Материал стенок"></td><td>&nbsp;<input checked type="radio" name="val[25]" value="углеродистая сталь">&nbsp;углеродистая сталь</td></tr>
<tr><td>
&nbsp;</td><td>&nbsp;<input type="radio" name="val[25]" value="нержавеющая сталь">&nbsp;нержавеющая сталь</td></tr>
<tr><td>
&nbsp;</td><td>&nbsp;<input type="radio" name="val[25]" value="пластмасса">&nbsp;пластмасса</td></tr>
<tr><td>
&nbsp;</td><td>&nbsp;<input type="radio" name="val[25]" value="иное">&nbsp;иное</td><td>&nbsp;<input type="hidden" name="name[26]" value="&nbsp;"><input type="text" size="10" name="val[26]"></td></tr>
<?
if ($trub==0){
	$hr="opr_list_emk.doc";

?>
<tr><td><input type="hidden" name="trub" value="0">
&nbsp;&nbsp;Габариты</td><td>&nbsp;&nbsp;размеры и форма (куб, цилиндр)<input type="hidden" name="name[27]" value="Габариты"></td></td><td>&nbsp;<input type="text" size="20" name="val[27]"></td></tr>
<?
}
?>
</table>
</fieldset>
* - температура продукта при нормальных эксплуатационных условиях<br>
** - наивысшая температура, которую иногда может приобретать <?if ($trub==1){?>трубопровод<br><?};if ($trub==0){?>ёмкость<br><?}?>
*** - самая низкая температура, при которой может быть включена система обогрева

<br>&nbsp;<br>

<center>
<input class="red" name="send" type="submit" value="Переслать запрос"><br>
<?
	echo ("<a href='".$hr."'>");
?>
Получить форму в виде файла</a>
</center>
</form>
<?
include("end.php");
?>