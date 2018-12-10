<?
$message = "<html><head><meta http-equiv='Content-Type' content='charset=windows-1251'>
<style type='text/css'>
table {
	border: solid 1px cccccc;
}
td {
	border: solid 1px cccccc;
	text-align: left;
	padding-left: 5px;
	padding-right: 5px;
}
	</style></head><body>";
if ($trub==0){
	$message.= "Расчет ёмкости";
}
else if($trub==1){
	$message.= "Расчет трубопровода";
}

$message.= "<table cellspacing='0' cellpadding='0'>";

for ($i=0; $i<=count($val); $i++){
	if (isset($val[$i])){
		if ($val[$i]!=""){
			$message.= "<tr><td>".$name[$i]."</td><td>".$val[$i]."</td></tr>"; 
		}
	}
}

$message.= "</table></body></html>";
$headers = "";
$headers.= "Content-Type: text/html; charset=windows-1251\n";

//echo $message;
 if (mail("info@nexans.com.ua", "Данные для расчета", $message, $headers)){
	echo "Передача прошла успешно!";
}
else {
	"Передача не состоялась!";
}
?>