<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;
    public function tampil($nama = 'roda') {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} ini hasilnya adalah {$rumus} ";
    }

    public static function testing() {
        echo "Ini testing static";
    }
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 10;
$lingkaran->tampil("roda");

LuasLingkaran::testing();