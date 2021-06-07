<?php

require_once __DIR__ . '/Veicolo.php';

class AutoCarro extends Veicolo {

    public $numero_di_ruote = 10;

    public $max_kg_pieno_carico;

    public function puoCaricareKg($kg) {
        if( $kg > $this->max_kg_pieno_carico ) {
            return false;
        } else {
            return true;
        }
    }

    public function getInfoData() {   
        $data_array = parent::getInfoData();
        $data_array['max_kg_pieno_carico'] = $this->max_kg_pieno_carico;        

        return $data_array;
    }
}
?> 