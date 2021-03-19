<?php 
$prova1 = 10;
$prova2 = 9;

$nota = ($prova1+$prova2)/2;
if ($nota<3)
    $desempenho = "PÉSSIMO";
    elseif ($nota<5)
    $desempenho = "RUIM";
    elseif ($nota<7)
    $desempenho = "MÉDIO";
    elseif ($nota<9)
    $desempenho = "BOM";
    else $desempenho = "EXCELENTE";
    echo "O seu desempenho foi $desempenho, pois sua nota foi $nota.<br>";

if ($nota==10)
{
    echo "Parabéns! <br>";
    echo "Você tirou a nota máxima!";
} 

if ($nota<7)
{
    $pontosFaltantes = 10-$nota;
    echo "Você precisava de $pontosFaltantes pontos para passar.<br>";
} 
else {
    echo "Bom trabalho!<br>";
}


if ($nota<7)
{ echo "Você precisa aprimorar seu conhecimento no(s) seguinte(s) tema(s): <br>"; 
   
    If ($prova1<7):
        echo "Manipulação de dados.<br>";
    endif;
    
    If ($prova2<7):
    echo "Estruturas de controle.<br>";
    endif;
}
?>