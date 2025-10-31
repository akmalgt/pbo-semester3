<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function __construct($iniJari = 1) {
        $this->jari = $iniJari;
    }

    public function tampil($nama = 'roda') {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} ini hasilnya adalah {$rumus} ";
    }

    public static function testing() {
        echo "Ini testing static ";
    }

    public function __destruct() {
        echo "Malas Kali ";
    }
}

$lingkaran = new LuasLingkaran(10);
// $lingkaran->jari = 10;
$lingkaran->tampil("roda");

LuasLingkaran::testing();