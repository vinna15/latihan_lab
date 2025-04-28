<?php

class Anomali{
    private $nama;

    function setNama($nama){
        $this->nama=$nama;
    }

    function getNama(){
        return $this->nama;
    }

    function suara(){
        echo"anomali bersuara";
    }
}

class Crocodilo extends Anomali{
    function terbang(){
        echo "crocodilo terbang";
    }

    function suara(){
        echo "<h1>dit tolongin dit....</h1>";
    }
}

class Ballerina extends Anomali{
    function menari(){
        echo "tari balet mematikan";
    }

    function suara(){
        echo "<h1>awokawokawok...</h1>";
    }
}

?>