<?php

class Animal
{
    public $jumlah_kaki, $bisa_terbang, $tidak_bisa_terbang, $suara;

    public function jumlahKaki()
    {
        return $this->jumlah_kaki;
    }

    public function bisaTerbang()
    {
        return "Bisa Terbang " . $this->bisa_terbang;
    }

    public function tidakTerbang()
    {
        return $this->tidak_bisa_terbang;
    }

    public function suara()
    {
        return "hemmm";
    }
}

class Kucing extends Animal
{
    function keteranganAmey()
    {
        echo "Tidak Bisa Terbang";
    }
    function suara()
    {
        return "Meong";
    }
}

class Anjing extends Animal
{
    function keterangantabi()
    {
        echo "Tidak Bisa Terbang";
    }
    function suara()
    {
        return "Guk Guk";
    }
}

class Ikan extends Animal
{
    function keteranganUnyuy()
    {
        echo "Tidak Bisa Terbang ";
    }
    function suara()
    {
        return "Ngab";
    }
}

class Musang extends Animal
{
    function keteranganJojoi()
    {
        echo " Tidak Bisa Terbang";
    }
    function suara()
    {
        return "krek";
    }
}


// kucing
$Amey = new Kucing;
$Amey->jumlah_kaki = 4;
echo "Amey Adalah Kucing <br>";
echo "Punya Kaki Sebanyak : " . $Amey->jumlah_kaki . "<br>";
echo $Amey->keteranganAmey() . "<br>";
echo "Suaranya :" . $Amey->suara() . "<br>";

echo "<hr>";
// anjing
$Tabi = new Anjing;
$Tabi->jumlah_kaki = 4;
echo "Tabi Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : " . $Tabi->jumlah_kaki . "<br>";
echo $Tabi->keteranganTabi() . "<br>";
echo "Suaranya :" . $Tabi->suara() . "<br>";

echo "<hr>";
// Ikan
$Unyuy = new Ikan;
$Unyuy->jumlah_kaki = 0;
echo "Unyuy Adalah Ikan<br>";
echo "Punya Kaki Sebanyak : " . $Unyuy->jumlah_kaki . "<br>";
echo $Unyuy->keteranganUnyuy() . "<br>";
echo "Suaranya :" . $Unyuy->suara() . "<br>";

echo "<hr>";
// Musang
$Jojoi = new Musang;
$Jojoi->jumlah_kaki = 4;
echo "Jojoi Adalah Musang <br>";
echo "Punya Kaki Sebanyak : " . $Jojoi->jumlah_kaki . "<br>";
echo $Jojoi->keteranganJojoi() . "<br>";
echo "Suaranya :" . $Jojoi->suara() . "<br>";
