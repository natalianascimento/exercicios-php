<?php 
/* EXERCÍCIO 1
$mes = 1;
$pagamento = 0.0;
$saldo = 0.0;
while ($mes <= 12) {
    $pagamento += 500;
    while ($mes <= 12 && $saldo 3 == 0){
        $pagamento += $pagamento *0.1;
    }
    $saldo += $pagamento;
    $pagamento = 0;
    $mes++;
}
echo $saldo; */


//EXERCÍCIO 2
/* $aprovado = aprovacao(7.5, 8);

if ($aprovado == true){
    echo "Aprovado";
}else {echo "Reprovado";}

function aprovacao ($nota, $media){
    $nota >= $media;
    return;
} */


//EXERCÍCIO 3
/* $carros = ["325i", "Skyline", "Lancer"];
foreach ($carros as $carro){
    echo $carro."<br>";
}
 */

//EXERCÍCIO 4
/* $preco_item = 1.5;
function total (){
    global $preco_item;
    $item = 10;
    
    $valor_total = $item * $preco_item;
    
    return $valor_total;
}
echo total(); */


//EXERCICIO 5
function torreDeHanoi ($discos, $pino1, $pino2, $pino3){
    if ($discos == 1){
        echo "Movendo o disco $discos do pino $pino1 para o pino $pino2";
        return;
    }
    torreDeHanoi ($discos - 1, $pino1,$pino3,$pino2);
    echo "Movendo o disco $discos do pino $pino1 para o pino 2";
    torreDeHanoi ($discos - 1, $pino3, $pino2, $pino1);
}
$discos = 4;
torreDeHanoi ($discos, 'A','C','B');












?>