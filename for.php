<?php 
/* for($cont=0; $cont<10; $cont++)
{
 echo "A variável \$cont vale $cont";
 echo "<br>";
}


//Contagem regressiva
echo "<br> Agora estou fazendo uma contagem regressiva: <br>";
for ($i=15; $i>=0; $i--)
{
    if($i==10)
    continue;
    echo $i.", ";
}
echo "...FIM!<br>";
echo "<br>";



$vetor [0][0]= "elemento00";
$vetor [0][1]= "elemento01";
$vetor [1][0]= "elemento10";
$vetor [1][1]= "elemento11";

for ($a=0; $a<2; $a++)
{
    for ($b=0; $b<2; $b++)
    {
        echo "O elemento da posição $a,$b é ";
        echo $vetor [$a][$b]."<br>";
    }
}
echo "<br>";


//Mais de uma variável no parâmetro de inicialização.
for ($c=0, $d=10; $c<10; $c++, $d--)
{
    echo "\$c vale $c e \$d vale $d";
    if ($c==$d)
    {
        echo " (os valores são iguais!)";
    } echo "<br>";
} */
   
 /*    for ($i=0; $i <= 10; $i++){
        echo $i."<br>";
    } */
    
/*  $pararLoop = 9;
 for ($numero = 0; ; $numero++){
     if ($numero == $pararLoop){
         break;
     }
     echo $numero."<br>";
 } */

/* for ($i = 0; $i < 10; $i++){
        if ($i % 2 == 0){
            continue;
        }
        echo $i."<br>";
    }  */

/* Suponha que voc� precisa apresentar ao usu�rio o total da soma dos valores de uma cole��o de n�meros. Para programar esse c�digo, podemos utilizar a estrutura de repeti��o for. */
    $colecao = [1,3,6,9,13];
    $soma = 0;
    for ($i = 0, $j = count ($colecao); $i < $j; $i++){
        echo "<br>".$soma;
        $soma += $colecao[$i]; 
    }
    echo "<br>".$soma;
    
    ?>