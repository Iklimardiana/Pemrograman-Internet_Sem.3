<?php
    class Burung{

        //property
        public $warna;
        public $ukuran;
        public $bentukparuh;

        //mrthod
        public function berubahJahat(){
            $this->warna = "hitam";
            return $this->warna;
        }

        public function __construct($Warna="Transparant",$Ukuran="Tidak ada",$Bentukparuh="Tidak ada"){
        $this->warna=$Warna;
        $this->ukuran=$Ukuran;
        $this->bentukparuh=$Bentukparuh;
        }
    }

    $Brg1=new Burung("Merah","Besar","Lancip");

    $Brg2= new Burung("Hijau");
    $Brg3= new Burung("Biru");

    var_dump($Brg1);
    echo "<br>";
    var_dump($Brg2);
    echo "<br>";
    var_dump($Brg3);
    echo "<br>";
    echo $Brg1->warna;
    echo "<br>";
    echo $Brg1->berubahJahat();

?>