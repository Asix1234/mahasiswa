<?php

class Induk
{
    public $nilaiRandom;
    public function __construct($jml)
    {
        $this->nilaiRandom = $jml;
    }
    public function total()
    {
        $total = 0;
        foreach ($this->nilaiRandom as $angka) {
            $total += $angka;
        }
        return $total;
    }
    public function rata_rata()
    {
        $jumlahNilai = count($this->nilaiRandom);
        $total = $this->total();
        return $total / $jumlahNilai;
    }
    public function NilaiTerendah()
    {
        $nilaiTerendah = $this->nilaiRandom[0];
        foreach ($this->nilaiRandom as $nilai) {
            if ($nilai < $nilaiTerendah) {
                $nilaiTerendah = $nilai;
            }
        }
        return $nilaiTerendah;
    }
    public function NilaiTertinggi()
    {
        $nilaiTertinggi = $this->nilaiRandom[0];
        foreach ($this->nilaiRandom as $nilai) {
            if ($nilai > $nilaiTertinggi) {
                $nilaiTertinggi = $nilai;
            }
        }
        return $nilaiTertinggi;
    }
}
class Anak extends Induk
{
    public function __construct()
    {
        $nilaiRandom = [];
        for ($feb = 0; $feb < 50; $feb++) {
            $nilaiRandom[] = rand(1, 300);
        }
        parent::__construct($nilaiRandom);
    }
}
$anm = new Anak(50);
echo "Nilai Random: " . implode(", ", $anm->nilaiRandom);
echo "</br>";
echo "Total: " . $anm->total();
echo "</br>";
echo "Rata - rata: " . $anm->rata_rata();
echo "</br>";
echo "Nilai tertinggi: " . $anm->NilaiTertinggi();
echo "</br>";
echo "Nilai terendah: " . $anm->NilaiTerendah();