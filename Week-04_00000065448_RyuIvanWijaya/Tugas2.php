<?php 

class Mahasiswa {
    private $nim;
    private $nama;

    function setNim($nim) {
        $this->nim = $nim;
    }

    function setNama($nama) {
        $this->nama = $nama;
    }

    function getNim() {
        return $this->nim;
    }

    function getNama() {
        return $this->nama;
    }

}

$john = new Mahasiswa();
$john->setNim("001");
$john->setNama("John Thor");

echo $john->getNim() . " " . $john->getNama();

?>