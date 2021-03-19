<?php

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

/* $var = true;
$var_2 = false;

//O valor de $var é convertido para string
$var_3 = strval($var);

//O valor de $var_2 é convertido para string
$var_3 = strval($var_2);

echo $var."<br>";
echo $var_2."<br>";
echo $var_3."<br>"; */

/* $var = 1.5;

//O valor de $var é convertido para string
$var_2 = (string)$var;
echo $var."<br>"; */

/* $gamertag = "eduscxbox";

if($gamertag == 'eduscxbox') {
    echo "Gamertag correta";
} else {
    echo "Gamertag incorreta";
} */


/* $nome = "ana";
if (strlen($nome)>=5){
    echo strtoupper($nome);
} else {
    echo ucfirst($nome);
} */


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

$sigla = "awe";
if ($sigla == "awe"){
    echo strtoupper($sigla);
} else {
    echo $sigla;
}


?>