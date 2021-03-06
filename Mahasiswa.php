<?php
    require_once("User.php");

    class Mahasiswa extends User{
       protected $nim;
       protected $nama;
       protected $tanggal_lahir;
       protected $jenis_kelamin;

        function __construct($nama, $nim, $tgl, $jk){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
        }

       protected function tampilkanAngkatan()
        { 
            echo "Merupakan angkatan tahun 20".substr($this->nim , 5,-4)."<br>";
        }

       protected function tampilkanUmur(){
            $tgl_lahir = date_create($this->tanggal_lahir);
            $umur = date_diff($tgl_lahir, date_create("today"))->y;
            // y = year / tahun
            // m = month / bulan
            // d = day / hari
            echo $umur;
        }

       protected function tampilkanNama(){
            echo $this->nama;
        }
    }
?>