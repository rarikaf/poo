<?php

class Servico {
    public $codigo;
    public $nome;
    public $descricao;
    public $valor;
    public $tempo;

    public function mostrarServico() {
        return $this->nome;
    }
}
?>