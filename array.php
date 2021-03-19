<?php 
$array = array(
    "lua" => 123,
    "chave2" => "PHP",
    "chave3" => false
);
$array["lua"] = "Ana Lua";//SOBRESCREVER
echo $array["lua"];
echo "<br>";
echo "<br>";


//EXERCICIO
$arrayum = array("Ana", "Lua","Bia");
echo $arrayum[1];
echo "<br>";
    foreach ($array as $chave => $valor){
        echo "{$chave}: {$valor}\n";
    }
    echo "<br>";

    
//EXERCICIO
$linguagens = array(
    array("PHP","PHP: Hypertext Preprocessor"),
    array("SQL","Structured Query Language")
);
echo "<br>";
echo $linguagens[0][0];

echo "<br>";
echo "<br>";


//EXERCICIO
$funcionarios = array(
    array("nome" => "Alex", "idade" => 21, "salario" => 1285.27,"ativo" => true),
    array ("nome" => "Emerson", "idade" => 35, "salario" => 3885.27,"ativo" => false),
    array("nome" => "Osvaldo", "idade" => 54, "salario" => 5285.27,"ativo" => true)
);
$bonificacao = 10;

foreach ($funcionarios as $funcionario){
    if ($funcionario["ativo"]){
        $funcionario["salario"] += $funcionario["salario"] * ($bonificacao/100);
        echo "Funcionario: {$funcionario['nome']} - {$funcionario['salario']}<br>";
    } else {
        echo "Funcionario: {$funcionario['nome']} - INATIVO <br>";
    }
}
echo "<br>";
echo "<br>";








?>