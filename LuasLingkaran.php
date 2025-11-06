<?php

class LuasLingkaran {

    public const phi = 3.14;

    public int $jari;

}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 10; //input nilai jari-jari

$rumus = LuasLingkaran::phi * ($lingkaran->jari * $lingkaran->jari);

echo "Hasil nya adalah: " . $rumus;
