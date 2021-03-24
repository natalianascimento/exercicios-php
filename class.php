<?php 
//EXERCICIO CLASS
// class Loja{
//     function adiciona($codigo,$quantidade){
//         if(isset($this->itens[$codigo])) //Isset - função nativa - serve para saber se uma variável está definida - ela verifica aexistência de uma variável, e retorna um valor boleano true/false - caso uma variável não esteja definida, ela possui o valor nulo (null). então através da função  isset retornará falso
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
// echo "A loja já possui ".$estoque->itens["bermuda"]." bermudas.<br>";
// echo "Aloja já possui ".$estoque->itens["camiseta"]." camisetas.<br>";

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