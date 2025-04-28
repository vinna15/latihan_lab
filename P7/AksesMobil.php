<?php

require_once "Anomali.php";

// $mobil = new Mobil();

// $mobil->setRodaDepan(2);
// $mobil->setRodaBelakang(4);
// echo "Roda Depan Ada ".$mobil->getRodaDepan()."<br>";
// echo "Roda Belakang Ada ".$mobil->getRodaBelakang()."<br>";
// echo "jumlah roda = ".$mobil->jumlahRoda();

// OOP di php

$crocodilo = new Crocodilo();
$crocodilo->setNama("Crocodilo Bombardio Junior");
echo "Nama Anomali : ".$crocodilo->getNama();
echo "<br>Suara Anomali : ";
$crocodilo->suara();
echo "<br>Skill Anomali : ";
$crocodilo->terbang();
?>