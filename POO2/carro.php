
<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $placa;

    public function mostrarCarro() {
        return $this->marca . " " .
               $this->modelo;
    }
}
?>