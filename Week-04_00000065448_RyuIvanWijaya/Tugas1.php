<?php 

class Mobil {
    public $nama;
    public $merk;

    public function __construct($nama, $merk) {
        $this->nama = $nama;
        $this->merk = $merk;
    }

    public function __destruct() {
        $this->getInfo();
    }

    function getInfo() {
        echo "Nama Mobil: " . $this->nama . "<br>";
        echo "Merk Mobil: " . $this->merk;
    }
}

$avanza = new Mobil("Avanza Veloz", "Toyota");
// $avanza->nama = "Avanza Veloz";
// $avanza->merk = "Toyota";
// $avanza->getInfo();

?>