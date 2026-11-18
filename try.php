<?php

// Class induk
class Segitiga {
    protected $alas;
    protected $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function luas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function keliling() {
        return 0;
    }

    public function nama() {
        return "Segitiga";
    }

    public function tampilkan() {
        echo "<br> " . $this->nama();
        echo "<br>Luas     : " . $this->luas();
        echo "<br>Keliling : " . $this->keliling();
    }
}


class SegitigaSikuSiku extends Segitiga {
    public function nama() {
        return "Segitiga Siku-Siku";
    }

    // sisi miring dihitung dengan Pythagoras
    public function sisiMiring() {
        return sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
    }

    public function keliling() {
        return $this->alas + $this->tinggi + $this->sisiMiring();
    }
}


class SegitigaSamaKaki extends Segitiga {
    private $kaki;

    public function __construct($alas, $tinggi, $kaki) {
        parent::__construct($alas, $tinggi);
        $this->kaki = $kaki;
    }

    public function nama() {
        return "Segitiga Sama Kaki";
    }

    public function keliling() {
        return $this->alas + (2 * $this->kaki);
    }
}


class SegitigaSamaSisi extends Segitiga {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
       
        $tinggi = ($sisi / 2) * sqrt(3);
        parent::__construct($sisi, $tinggi);
    }

    public function nama() {
        return "Segitiga Sama Sisi";
    }

    public function keliling() {
        return 3 * $this->sisi;
    }
}


$siku = new SegitigaSikuSiku(3, 4);
$siku->tampilkan();

$samaKaki = new SegitigaSamaKaki(6, 4, 5);
$samaKaki->tampilkan();

$samaSisi = new SegitigaSamaSisi(6);
$samaSisi->tampilkan();