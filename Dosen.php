<?php
    require_once("Pegawai.php");

    class Dosen extends Pegawai
    {
       protected $nidn;
       protected $jabatan_akademis;

        function __construct($nip, $nama, $hp, $gaji, $nidn, $jabatan){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->no_hp = $hp;
            $this->gaji_pokok = $gaji;
            $this->nidn = $nidn;
            $this->jabatan_akademis = $jabatan;
        }

       protected function mengajar(){

        }
       protected function meneliti(){

        }
    }
    
?>