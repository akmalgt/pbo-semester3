<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 10;
$lingkaran->tampil("roda");

LuasLingkaran::testing();