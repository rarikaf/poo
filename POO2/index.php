<?php

require_once "Cliente.php";
require_once "Carro.php";
require_once "Produto.php";
require_once "Servico.php";

$cliente = new Cliente();
$cliente->nome = "João";
$cliente->cpf = "123.456.789-00";
$cliente->telefone = "99999-9999";

$carro = new Carro();
$carro->marca = "Volkswagen";
$carro->modelo = "Gol";
$carro->ano = 2020;
$carro->cor = "Prata";
$carro->placa = "ABC-1234";

$produto = new Produto();
$produto->nome = "Óleo";
$produto->preco = 50;
$produto->quantidade = 2;

$servico = new Servico();
$servico->nome = "Troca de óleo";
$servico->valor = 80;

function calcularTotal($produto, $servico) {
    return ($produto->preco * $produto->quantidade)
           + $servico->valor;
}

$total = calcularTotal($produto, $servico);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Oficina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Sistema de Oficina</h1>

<h2>Cliente</h2>
<?php
echo "Nome: " . $cliente->nome . "<br>";
echo "CPF: " . $cliente->cpf . "<br>";
echo "Telefone: " . $cliente->telefone . "<br>";
?>

<h2>Carro</h2>
<?php
echo "Marca: " . $carro->marca . "<br>";
echo "Modelo: " . $carro->modelo . "<br>";
echo "Ano: " . $carro->ano . "<br>";
echo "Cor: " . $carro->cor . "<br>";
echo "Placa: " . $carro->placa . "<br>";
?>

<h2>Peças utilizadas</h2>
<?php
echo "Peça: " . $produto->nome . "<br>";
echo "Quantidade: " . $produto->quantidade . "<br>";
echo "Preço: R$ " . $produto->preco . "<br>";
?>

<h2>Serviço</h2>
<?php
echo "Serviço: " . $servico->nome . "<br>";
echo "Valor: R$ " . $servico->valor . "<br>";
?>

<h2>Valor total</h2>
<?php
echo "Total: R$ " . $total;
?>

</body>
</html>