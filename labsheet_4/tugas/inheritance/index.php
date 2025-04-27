<?php 
class Karyawan {
    public $nama;
    public $gaji;

    public function __construct($nama, $gaji) {
        $this->nama = $nama;
        $this->gaji = $gaji;
    }

    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Gaji: Rp." . $this->gaji . "<br>";
    }
}

class Manager extends Karyawan {
    public $tunjangan;

    public function __construct($nama, $gaji, $tunjangan) {
        parent::__construct($nama, $gaji);
        $this->tunjangan = $tunjangan;
    }

    public function totalGaji() {
        return $this->gaji + $this->tunjangan;  
    }

    public function tampilkanInfo() {
        parent::tampilkanInfo();
        echo "<br><br>Nama: " . $this->nama . "<br>";
        echo "Gaji: Rp." . $this->gaji . "<br>";
        echo "Tunjangan: Rp." . $this->tunjangan . "<br>";
        echo "Total: Rp." . $this->totalGaji() . "<br>";
    }
}

$pegawai1 = new Karyawan("John Doe", 5000000);
$pegawai1->tampilkanInfo();

$manager = new Manager("Jane Smith", 7000000, 2000000);
$manager->tampilkanInfo();