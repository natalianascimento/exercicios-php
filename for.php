<?php 
/* for($cont=0; $cont<10; $cont++)
{
 echo "A variÃ¡vel \$cont vale $cont";
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
        echo "O elemento da posiÃ§Ã£o $a,$b Ã© ";
        echo $vetor [$a][$b]."<br>";
    }
}
echo "<br>";


//Mais de uma variÃ¡vel no parÃ¢metro de inicializaÃ§Ã£o.
for ($c=0, $d=10; $c<10; $c++, $d--)
{
    echo "\$c vale $c e \$d vale $d";
    if ($c==$d)
    {
        echo " (os valores sÃ£o iguais!)";
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

/* Suponha que você precisa apresentar ao usuário o total da soma dos valores de uma coleção de números. Para programar esse código, podemos utilizar a estrutura de repetição for. */
    $colecao = [1,3,6,9,13];
    $soma = 0;
    for ($i = 0, $j = count ($colecao); $i < $j; $i++){
        echo "<br>".$soma;
        $soma += $colecao[$i]; 
    }
    echo "<br>".$soma;
    
    ?>