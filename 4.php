<?php

// class: blueprint untuk menghasilkan sebuah project
//property : {nama: reza}
// variable di dalam class
// method/fuction
//object/instance : menghasilkan sebuah object
class Siswa {
    public $nama;
    public $nik;
    public $jurusan;
    public $nilai;

    public function __construct($nama, $nik, $jurusan, $nilai){
        $this->nama = $nama;
        $this->nik = $nik;
        $this->jurusan = $jurusan;
        $this->nilai = $nilai;

        echo "Selamat Datang {$this->nama} ({$this->nik})<br>";


    }

    public function callName()
    {
        return $this->nama;
    }

    public function getNik()
    {
        return $this->nik;
    }
}

$siswa = new Siswa("Rudi Hartanto", "20113300566", "Web Programming", 100);
$siswa2= new Siswa("Budi Hartanto", "20117787906", "Web Programming", 52);
$siswa->nik = "20113300566";

// $siswa2->nama = "Rudi Hartanto";
// $siswa2->nik = "20113300566";
// echo $siswa->callName();
// echo "<br>";
echo "Nama : " .$siswa->nama . "<br>";
echo "Nik : " .$siswa->nik . "<br>";
echo "Jurusan : " .$siswa->jurusan . "<br>";
echo "Nilai : " .$siswa->nilai . "<br>";