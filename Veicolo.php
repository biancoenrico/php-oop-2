<?php
require_once __DIR__ . '/Prodotto.php';

class Veicolo {
    use Prodotto;

    public $marca;

    public $modello;

    public $numero_di_ruote = 4;

    
    public function __construct($_marca, $_modello) {
        $this->marca = $_marca;
        $this->modello = $_modello;
    }
    public function getInfoData() {
        return [
            'marca' => $this->marca,
            'modello' => $this->modello,
            'numero_di_ruote' => $this->numero_di_ruote
        ];
    }
}
?>