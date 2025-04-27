<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama,$nim,$jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }

    }

    $mahasiswa1 = new Mahasiswa("John Doe", "123456789", "Teknik Informatika");
    echo "<h2>Data Mahasiswa 1</h2>";
    $mahasiswa1->tampilkanInfo();

?>