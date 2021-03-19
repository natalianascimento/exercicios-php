<?php
//Parametros da função por referência
// function referencia (&$num_1){
//     $num_1 *= 5;
//     return $num_1;
// }
// $num_2 = 2;
// referencia ($num_2);
// echo $num_2;


//Parâmetros da função por valor

// function soma ($num_1, $num_2){
//     $total = $num_1 + $num_2;
//     return $total;
// }
// echo soma (5,2);


//Parâmetros da função por valor padrão
// function passagem_padrao($num_1 = 30){
//     return $num_1;
// }
// echo passagem_padrao();

//Exemplo
// function soma_valores ($valor1, $valor2, $valor3){
//     $soma = $valor1 + $valor2 + $valor3;
//     echo "A soma dos valores $valor1, $valor2 e $valor3 é $soma"; 
// }
// $n1 = 10;
// $n2 = 5;
// $n3 = 2;
// soma_valores ($n1,$n2,$n3);


//strtoupper transforma string para letras maiúsculas
// function maiusculo($string){
//     $string = strtoupper($string);
//     $string = str_replace ("é","É",$string);
//     $string = str_replace ("ô","Ô",$string);
//     return $string;
// }
// $nome = "José Antônio";
// $nome_m = maiusculo($nome);
// echo "O nome do rapaz é $nome_m";


// Função colocada diretamente na saída em um camando de impressão
// function triplo ($numero){
//     $x = $numero * 3;
//     return $x;
// }
// $valor = 5;
// echo "O triplo de $valor é " . triplo($valor);


function dividir ($num_1, $num_2){
    $operacao = $num_1/$num_2;
    return $operacao;
}
echo dividir(8,4);

//return é uma palavra reservada do PHP que nesse contexto tem como finalidade retornar um valor encerrando a função.  Caso return for omitido então o valor NULL será retornado.