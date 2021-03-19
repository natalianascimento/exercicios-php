<?php 
//EXERCICIO
echo date ("d/m/y");//IMPRIME A DATA ATUAL
echo "<br>";
echo "<br>";

//EXERCICIO
$nextWeek = time() + (7*24*60*60);
echo 'Now      :'.date('d-m-y')."<br>";
echo 'Next Week:'.date('d-m-y',$nextWeek)."<br>";
echo 'Next Week:'.date('d-m-y', strtotime('+1 week'))."<br>";
echo time();
echo "<br>";
echo "<br>";

//EXERCICIO
echo 'Next Month: '.date('d-m-y', strtotime('+1 month'))."<br>";
echo "<br>";
echo "<br>";

//EXERCICIO
$data = mktime(03,45,00,02,02,1995);
echo date("d-m-y",$data)."<br>";
echo date("d-m-y h:i", $data)."<br>";
echo date("y", $data)."<br>";
echo "<br>";
echo "<br>";

//EXERCICIO
$atual = new DateTime();
$especifica = new DateTime('1990-01-22');
$texto = new DateTime('+1 month');

print_r($atual)."<br>";
print_r($especifica)."<br>";
print_r($texto)."<br>";
echo "<br>";
echo "<br>";

//EXERCICIO
$data = new datetime();
echo $data->format('d-m-y h:i:s')."<br>";
$data = new datetime('+1 month');
echo $data->format('d-m-y h:i:s');
echo "<br>";
echo "<br>";

//EXERCICIO
$fuso = new datetimezone('America/Sao_Paulo');
$data = new datetime ();
$data->settimezone($fuso);
echo $data->format('d-m-y H:i:s');
echo "<br>";
echo "<br>";

//EXERCICIO
$intervalo = new DateInterval('P3YT8M');
print_r($intervalo);
echo "<br>";
echo "<br>";

//EXERCICIO
$intervalo = new dateinterval('P10Y4D');
echo $intervalo->format('%y anos e %d dias');
echo "<br>";
echo "<br>";

//EXERCICIO
$data1 = new DateTime('2011-09-11');
$data2 = new DateTime('2011-10-13');
$intervalo = $data1->diff($data2);
echo $intervalo->format('%R%a dias');
echo "<br>";
echo "<br>";

//EXERCICIO
$data = new DateTime('2011-09-11');
print_r($data)."<br>";

$data->add(new DateInterval('P2M5D'));
print_r($data);
echo "<br>";
echo "<br>";

//EXERCICIO
$data1 = new DateTime('2011-09-11');
$data2 = new DateTime('2011-10-13');
var_dump ($data1 == $data2);
var_dump ($data1 > $data2);
var_dump ($data1 < $data2);
echo "<br>";
echo "<br>";

//EXERCICIO
$data = new datetime('2011-12-31');
print_r($data);
$data->sub(new dateinterval('P7D'));
print_r($data);


?>