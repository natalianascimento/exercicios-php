<?php 
//EXERCICIO CLASS
// class Loja{
//     function adiciona($codigo,$quantidade){
//         if(isset($this->itens[$codigo])) //Isset - fun��o nativa - serve para saber se uma vari�vel est� definida - ela verifica aexist�ncia de uma vari�vel, e retorna um valor boleano true/false - caso uma vari�vel n�o esteja definida, ela possui o valor nulo (null). ent�o atrav�s da fun��o  isset retornar� falso
//             $this->itens[$cosigo] += $quantidade;
//         else 
//             $this->itens[$codigo] = $quantidade;
//     }
//     function remove ($codigo, $quantidade){
//         if ($this->itens[$codigo] > $quantidade){
//             $this->itens[$codigo] -= $quantidade;
//             return true;
//         }
//         else{
//             return false;
//         }
//     }
// }
// $estoque = new Loja;

// $estoque->adiciona("bermuda",2);
// $estoque->adiciona("camiseta",3);
// echo "A loja j� possui ".$estoque->itens["bermuda"]." bermudas.<br>";
// echo "Aloja j� possui ".$estoque->itens["camiseta"]." camisetas.<br>";

//EXERCICIO MODIFICADORES DE ACESSO
class Funcionario{
    public $nome = 'Alex';
    protected $salario =200;
    private $rg = '00.000.000-0';
}

$funcionario = new Funcionario;
echo $funcionario->nome;
echo $funcionario->salario;//ERRO
echo $funcionario->rg;//ERRO







?>