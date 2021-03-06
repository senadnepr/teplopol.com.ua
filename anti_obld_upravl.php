<?
$title="Системы снеготаяния и&nbsp;антиобледенения";
$title2="Управление системой антиобледенения";
include("begin.php");
?>

<p>
Существуют три способа управления системой антиобледенения как водостоков, так и открытых поверхностей:
<ul>
<li>полностью автоматическое управление по температуре воздуха и его влажности
<li>полуавтоматическое управление по температуре воздуха
<li>ручное управление
</ul>
</p>
<p><img src="Image/upr_anti.jpg" align="Right" border="0" vspace="10" hspace="10">
  <strong>АВТОМАТИЧЕСКОЕ УПРАВЛЕНИЕ.</strong> Проблема замерзания водостоков и открытых поверхностей возникает 
  при определенных погодных условиях. Как правило, это температура ниже +3<sup>о</sup>С и осадки в виде снега или 
  дождя. При установке системы автоматического управления учитываются эти два условия. 
  Контроллер системы (<a href="ktlg_prod_termoreg.php#term_krovl">ETO-1550</a>) получает показания от датчика 
  температуры воздуха (<a href="ktlg_prod_termoreg.php#term_krovl">ETF-744/99</a>) и датчика 
  осадков (<a href="ktlg_prod_termoreg.php#term_krovl">ETOR-55</a>). В системе антиобледенения поверхностей может 
  быть использован комбинированный датчик наружного или "паркингового" 
  исполнения (<a href="ktlg_prod_termoreg.php#term_krovl">ETOG-55</a>).</p>
<p>Большую часть времени система находится в режиме "ожидания". При уменьшении температуры 
ниже установленной и появлении осадков, контроллер включает систему. Когда осадки прекращаются 
и объект освобождается от воды, льда и снега, контроллер переводит систему в режим "ожидания". 
Если произошли перебои электроэнергии и система не включилась вовремя, существует возможность 
ручного включения на определенный таймером отрезок времени.</p>

<p><strong>ПОЛУАВТОМАТИЧЕСКОЕ УПРАВЛЕНИЕ.</strong> Возможен вариант упрощенного управления 
системой только по температуре воздуха. Термостат системы (<a href="ktlg_prod_termoreg.php#term_krovl">ETR/F-1447</a>)
получает показания от датчика температуры воздуха (<a href="ktlg_prod_termoreg.php#term_krovl">ETF-744/99</a>) и включает 
систему только при достижении температурой критического интервала между -10<sup>о</sup>С и +10<sup>о</sup>С. 
Значение верхней и нижней температуры можно изменить для достижения наибольшего эффекта работы системы при 
наименьшем потреблении электроэнергии.
</p>

<p><strong>РУЧНОЕ УПРАВЛЕНИЕ.</strong> При небольших размерах и мощности системы возможно использование 
ручного управления. В этом случае система включается по необходимости. Не исключен перегрев кабеля при 
случайном включении в летний период. Также возможно замерзание объекта при  несвоевременном включении 
системы, но в некоторых случаях такое управление является оптимальным.</p>

<?include("end.php");?>