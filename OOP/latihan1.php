<?php
    class Mahasiswa{

        //property
        public $nama;
        public $ID;
        public $JenisKelamin;

        //method
        public function ganti(){
            $this->nama = "Andi";
            return $this->nama;
        }
        public function __construct($Nama="sas",$ID="sas",$JenisKelamin="sas"){
            $this->nama=$Nama;
            $this->ID=$ID;
            $this->jenisKelamin=$JenisKelamin;
            }

    }

    class Matkul{
        public $Kode;
        public $namamatkul;

        //method
        public function gantimatkul(){
            $this->nama = "Promnet";
            return $this->nama;
        }
    }
    $Mhs1= new Mahasiswa("Iklima", "2008765", "Perempuan");
    $Mhs2= new Mahasiswa("Andi","","");
    var_dump($Mhs1);


?>