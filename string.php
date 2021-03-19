<?php



//EXERCÍCIO
/* $nome = 'PHP';
echo <<<ABC
Minha lignuagem favorita Ã© $nome. 
ABC;
echo "<br> ${nome} Ã© uma boa linguagem para se aprender";
//echo "<br>{$nome} Ã© a minha linguagem favorita";
//echo "<br><br>";
//$primeiro_caractere = $nome[0];
//$nome[1]='P';
//echo $nome;
echo "<br>";
//echo strlen($nome)."<br>";
echo substr_replace ($nome, ' NatÃ¡lia',3,0)
//echo substr($nome, 1,5)
 */



//EXERCÍCIO
/* $var = true;
$var_2 = false;
//O valor de $var Ã© convertido para string
$var_3 = strval($var);
//O valor de $var_2 Ã© convertido para string
$var_3 = strval($var_2);
echo $var."<br>";
echo $var_2."<br>";
echo $var_3."<br>"; */



//EXERCÍCIO
/* $var = 1.5;
//O valor de $var Ã© convertido para string
$var_2 = (string)$var;
echo $var."<br>"; */



//EXERCÍCIO
/* $gamertag = "eduscxbox";

if($gamertag == 'eduscxbox') {
    echo "Gamertag correta";
} else {
    echo "Gamertag incorreta";
} */




//EXERCÍCIO
/* $nome = "ana";
if (strlen($nome)>=5){
    echo strtoupper($nome);
} else {
    echo ucfirst($nome);
} */



//EXERCÍCIO
/* $rg_cpf = "112345667";
switch (strlen($rg_cpf))
{
    case 9:
        echo "VocÃª informou o seu RG";
        break;
    case 11:
        echo "VocÃª informou o seu CPF";
        break;
    Default:
        echo "Documento invÃ¡lido";
} */



//EXERCÍCIO
/* $sigla = "awe";
if ($sigla == "awe"){
    echo strtoupper($sigla);
} else {
    echo $sigla;
} */



//EXERCÍCIO
/* $mensagem = "Venha ver o seu novo veículo";
echo substr_replace($mensagem,'carro', -7); */



//EXERCÍCIO
/* $texto = "Faltam três dias para o lançamento";
echo str_replace("três", 3, $texto) */



//EXERCÍCIO
/* $titulo = "DEVMEDIA";
$destaque = false;
if ($destaque){
    echo strtolower ($titulo);
}else {
    echo $titulo;
}
echo "<br>"; */

$titulo = "DEVMEDIA";
$destaque = false;

if(!$destaque){
    echo $titulo;
}else{
    echo strtolower($titulo);
}





?>