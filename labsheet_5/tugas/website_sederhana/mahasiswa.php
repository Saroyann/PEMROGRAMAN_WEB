<?php

class Mahasiswa
{
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public static function getAllMahasiswa($filePath)
    {
        $data_mahasiswa = file($filePath, FILE_IGNORE_NEW_LINES);
        $mahasiswaList = [];

        foreach ($data_mahasiswa as $data) {
            list($nama, $nim, $jurusan) = explode("|", $data);
            $mahasiswaList[] = new Mahasiswa($nama, $nim, $jurusan);
        }

        return $mahasiswaList;
    }

    public static function searchByNIM($mahasiswaList, $cari)
    {
        return array_filter($mahasiswaList, function ($mahasiswa) use ($cari) {
            return strpos($mahasiswa->nim, $cari) !== false;
        });
    }
}
?>