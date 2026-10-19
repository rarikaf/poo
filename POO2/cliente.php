<?php

class Cliente {
    public $nome;
    public $cpf;
    public $telefone;
    public $email;
    public $endereco;
    public $numero;
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;

    public function confirmarRecebimento() {
        echo "Pagamento recebido!";
    }

    public function pagarConta($valor, $juros) {
        if ($juros > 0) {
            $valor = $valor + ($valor * ($juros / 100));
        }

        return $valor;
    }
}
?>