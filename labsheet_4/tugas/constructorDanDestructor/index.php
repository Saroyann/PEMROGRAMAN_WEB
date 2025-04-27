<?php
class Pegawai {
    public $nama;
    public $jabatan;

    public function __construct($nama, $jabatan) {
        $this->nama = $nama;
        $this->jabatan = $jabatan;

        echo "
        <h1>Data Karyawan Telah Di buat</h1>
        nama : $this->nama <br>
        jabatan : $this->jabatan <br>
        ";
    }

    public function __destruct() {
        echo "<br><br><h3 style='color: red'>Objek Pegawai dengan nama $this->nama dan jabatan $this->jabatan telah dihapus.</h3><br>";
    }
}

$pegawai = new Pegawai("John Doe", "Manager");