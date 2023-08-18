<?php 

class Mahasiswa {
    public $nama, $nim, $prodi;

    public function __construct($nama, $nim, $prodi) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
    }
}

?>