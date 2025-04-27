<?php
class Hewan {
    public function suara() {
        echo "hewan ini mengeluarkan suara<br>";
    }
}

class Kucing extends Hewan {
    public function suara() {
        echo "meow<br>";
    }
}

class Anjing extends Hewan {
    public function suara() {
        echo "guk guk<br>";
    }
}

$kucing = new Kucing();
$anjing = new Anjing();
$kucing->suara();
$anjing->suara(); 