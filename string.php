<?php



//EXERC�CIO
/* $nome = 'PHP';
echo <<<ABC
Minha lignuagem favorita é $nome. 
ABC;
echo "<br> ${nome} é uma boa linguagem para se aprender";
//echo "<br>{$nome} é a minha linguagem favorita";
//echo "<br><br>";
//$primeiro_caractere = $nome[0];
//$nome[1]='P';
//echo $nome;
echo "<br>";
//echo strlen($nome)."<br>";
echo substr_replace ($nome, ' Natália',3,0)
//echo substr($nome, 1,5)
 */



//EXERC�CIO
/* $var = true;
$var_2 = false;
//O valor de $var é convertido para string
$var_3 = strval($var);
//O valor de $var_2 é convertido para string
$var_3 = strval($var_2);
echo $var."<br>";
echo $var_2."<br>";
echo $var_3."<br>"; */



//EXERC�CIO
/* $var = 1.5;
//O valor de $var é convertido para string
$var_2 = (string)$var;
echo $var."<br>"; */



//EXERC�CIO
/* $gamertag = "eduscxbox";

if($gamertag == 'eduscxbox') {
    echo "Gamertag correta";
} else {
    echo "Gamertag incorreta";
} */




//EXERC�CIO
/* $nome = "ana";
if (strlen($nome)>=5){
    echo strtoupper($nome);
} else {
    echo ucfirst($nome);
} */



//EXERC�CIO
/* $rg_cpf = "112345667";
switch (strlen($rg_cpf))
{
    case 9:
        echo "Você informou o seu RG";
        break;
    case 11:
        echo "Você informou o seu CPF";
        break;
    Default:
        echo "Documento inválido";
} */



//EXERC�CIO
/* $sigla = "awe";
if ($sigla == "awe"){
    echo strtoupper($sigla);
} else {
    echo $sigla;
} */



//EXERC�CIO
/* $mensagem = "Venha ver o seu novo ve�culo";
echo substr_replace($mensagem,'carro', -7); */



//EXERC�CIO
/* $texto = "Faltam tr�s dias para o lan�amento";
echo str_replace("tr�s", 3, $texto) */



//EXERC�CIO
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