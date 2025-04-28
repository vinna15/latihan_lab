<?php
class Mobil{
    private $roda_depan, $roda_belakang;

    function __construct(){
        echo "ini constructor";
    }
    function setRodaDepan($rodaDepan){
        $this->roda_depan = $rodaDepan;
    }

    function setRodaBelakang($rodaBelakang){
        $this->roda_belakang = $rodaBelakang;
    }

    function getRodaDepan(){
        return $this->roda_depan;
    }

    function getRodaBelakang(){
        return $this->roda_belakang;
    }

    function jumlahRoda(){
        return $this->roda_depan + $this->roda_belakang;
    }
    
    function __destruct(){
        echo"ini destruktor";
    }
}


?>