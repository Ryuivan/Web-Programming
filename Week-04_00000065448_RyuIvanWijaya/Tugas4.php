<?php 

abstract class Mahasiswa {
    abstract protected function getTugasAkhir();
    abstract protected function getProgram($postfix);
    const KAMPUS = "Universitas Multimedia Nusantara";

    public function tugasAkhir() {
        echo $this->getTugasAkhir() . "<br>";
    }
}

class Sarjana extends Mahasiswa {
    protected function getTugasAkhir() {
        return " Skripsi";
    }

    public function getProgram($postfix) {
        echo "{$postfix} S1";
    }
}

class Magister extends Mahasiswa {
    protected function getTugasAkhir() {
        return " Tesis";
    }

    public function getProgram($postfix) {
        echo "{$postfix} S2";
    }
}

echo Mahasiswa::KAMPUS . "<br>";
$s = new Sarjana();
$s->getProgram("Mahasiswa") . "<br>";
$s->tugasAkhir();

$m = new Magister();
$m->getProgram("Mahasiswa") . "<br>";
$m->tugasAkhir();

?>