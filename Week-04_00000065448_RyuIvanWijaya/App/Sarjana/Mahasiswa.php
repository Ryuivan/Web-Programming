<?php 

class Mahasiswa {
    public $nama, $nim, $prodi, $gelar;

    public function __construct($nama, $nim, $prodi, $gelar) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->gelar = $gelar;
    }
}

?>