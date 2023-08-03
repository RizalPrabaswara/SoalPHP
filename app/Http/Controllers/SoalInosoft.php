<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalInosoft extends Controller
{
    public function luas_lingkaran(int $angka)
    {
        $angka1 = $angka / 3;
        $hasil = 3.14 * ($angka1 * $angka1);
        return $hasil;
    }

    public function keliling_lingkaran(int $angka)
    {
        $angka1 = $angka / 5;
        $hasil = 2 * 3.14 * $angka1;
        return $hasil;
    }

    public function luas_persegi(int $angka)
    {
        $panjang = $angka / 3;
        $lebar = $angka / 5;
        $hasil = $panjang * $lebar;
        return $hasil;
    }

    public function soal()
    {
        echo "RIZAL PRABASWARA <br>";
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $hasil_persegi = $this->luas_persegi($i);
                echo sprintf("%.2f", $hasil_persegi) . " Ini Hasil Kelipatan 3 dan 5 <br> <br>";
            } else if ($i % 3 == 0) {
                $hasil_luas = $this->luas_lingkaran($i);
                echo $hasil_luas . "<br> <br>";
            } else if ($i % 5 == 0) {
                $hasil_keliling = $this->keliling_lingkaran($i);
                echo $hasil_keliling . "<br> <br>";
            } else {
                echo sprintf("%.2f", $i) . "<br> <br>";
            }
        }
    }
}
