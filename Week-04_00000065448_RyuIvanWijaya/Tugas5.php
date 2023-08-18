<?php 

interface Buah {
    public function setJumlahBiji();
}

interface Sayur {
    public function setWarna();
}

interface SayurBuah extends Sayur, Buah {
    public function setCaraMakan();
}

class KacangPolong implements SayurBuah {
    function __destruct() {
        echo "Kacang Polong";
    }

    public function setWarna() {

    }

    public function setCaraMakan() {

    }

    public function setJumlahBiji() {

    }
}

new KacangPolong();

?>