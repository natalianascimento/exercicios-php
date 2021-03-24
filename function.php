<?php 

/* function soma ($num_1, $num_2) {
    $total = $num_1 + $num_2;
    return $total;
}
echo soma (5,10); */

/* $num_1 = 15;

function exemplo ($num_2){
    global $num_1;
    $operacao = $num_1 + $num_2;
    return $operacao;
}
echo exemplo (5); */

//EXEMPLO DE ERRO - VARI�VEL DECLARADA DENTRO DO ESCOPO DA FUN��O NUMA OPERA��O EXTERNA A FUN��O
/* function exemplo($num_1, $num_2) {
    $operacao = $num_1 + $num_2;
    return $operacao;
}
exemplo (4,6);
$num_3 = 10;
$operacao_2 = $num_1 + $num_3; //Se aqui retirarmos a vari�vel $num_1 o c�digo roda. O PHP n�o ir� reconhecer como a vari�vel $num_1 como declarada, j� que ela � um par�metro da fun��o.
echo $operacao_2; */


/* function mensagem (){
    echo "Bem-vindo ao meu site!";
}

mensagem(); //invoca a fun��o */

/* function cubo($n){
    echo "Calculo do cubo de um numero <br>";
    echo "O cubo de ".$n." e ".$n*$n*$n;
}
//invocando a fun��o:
$num=5;
cubo($num); */



/* function referencia (&$num_1){
    $num_1 *= 5;
    return $num_1;
}
$num_2 = 3;
referencia ($num_2);
echo $num_2; */


/* function passagem_padrao($num_1=15){
    //$num_1 += 2;
    return $num_1;
}
echo passagem_padrao(); */


/* function dividirA ($num_1, $num_2){
    $operacao = $num_1 / $num_2;
    echo $operacao."<br>";
} 
dividirA (20,2);

function dividirB ($num_1, $num_2){
    $operacao = $num_1 / $num_2;
    return $operacao."<br>";}
    dividirB (30,2);} */
 //neste caso nada � impresso
 


/* function quadrado (&$valor){
    $valor *= $valor;
}
$numero = 7;
quadrado ($numero);
echo $numero; */
//O RESULTADO DEVE DAR 49


/* echo 1 + "10" * 2; //RESULTADO IGUAL A 21 */

//EXERC�CIO
/* $entrada = 14.99;
$meia = $entrada/2;
$valor = 0;

if ($meia){
    $valor=$meia;
}
echo $valor; */


//EXERC�CIO
/* $x = 20;
$y = 5;

//4
echo $x/$y; */


//EXERCICIO
/* $nome = "Juliano";
$futuro_identificador = "autor";
$$futuro_identificador = $nome;

echo "O nome do autor e ";
echo $autor; */


//EXERC�CIO VARI�VEIS DIN�MICAS
/* $variavel = "carro";
$$variavel = "Gol";
echo $carro; */

//EXERCICIO CPF
/* function cpf_errado($cpf){
    $erro =  false;
    $aux_cpf = "";
    for ($j=0;$j<strlen($cpf);$j++)
        if(substr($cpf,$j,1)>="0" AND substr($cpf,$j,1)<="9")
            $aux_cpf.=substr($cpf,$j,1);
        if(strlen($aux_cpf)!=11)
            $erro=true;
            else{
                $cpf1 = $aux_cpf;
                $cpf2 = substr($cpf,-2);
                $controle = "";
                $start = 2;
                $end = 10;
                for ($i=1;$i<=2;$i++){
                    $soma = 0;
                    for($j=$start;$j<=$end;$j++)
                        $soma += substr($cpf1,($j-$i-1),1)*($end+1+$i-$j);
                    if($i==2)
                        $soma += $digito*2;
                    $digito = ($soma*10)%11;
                    if($digito==10)
                        $digito =0;
                    $controle.=$digito;
                    $start=3;
                    $end=11;
                }
                if($controle!=$cpf2)
                    $erro=true;
            }
            return $erro;
} */
                
                
//EXERCICIO
/* function dobro ($valor){
    $valor = 2*$valor;
}
function duplica(&$valor){
    $valor = 2*$valor;
}
$valor=5;
dobro($valor);
echo $valor."<br>";
duplica($valor);
echo $valor; */

//EXERCICIO FUNÇÕES RECURSIVAS
/* function teste($valor){
    if ($valor!=0){
        echo "Foi chamada a fun��o teste passando o valor $valor <br>";
        teste($valor-1);
    }
}
teste(7); */


//EXERCICIO FUNÇÕES RECURSIVAS - FATORIAL
function fatorial ($numero){
    if($numero<0) {return -1;}
    if($numero<=1){return 1;}
    return $numero*fatorial($numero-1);
}
echo "O fatorial de 3 é ".fatorial(3);
echo "<br> O fatorial de 4 é ".fatorial(4);
echo "<br>O fatorial de 5 é ".fatorial(5);



    
?>