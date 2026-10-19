<?php

class Produto {
    public $codigo;
    public $nome;
    public $marca;
    public $categoria;
    public $descricao;
    public $preco;
    public $quantidade;
    public $fornecedor;
    public $estoque;
    public $garantia;

    public function calcularSubtotal() {
        return $this->preco * $this->quantidade;
    }
}
?>