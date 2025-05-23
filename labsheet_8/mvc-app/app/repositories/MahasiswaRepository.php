<?php
require_once __DIR__ . '/../models/Mahasiswa.php';

class MahasiswaRepository
{
    private $conn;
    private $table_name = "mahasiswa";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, "Mahasiswa");
    }

    public function findById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table_name} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject("Mahasiswa");
    }

    public function insert($nim, $nama, $prodi)
    {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table_name} (nim, nama, prodi) VALUES (?, ?, ?)");
        return $stmt->execute([$nim, $nama, $prodi]);
    }

    public function update($id, $nim, $nama, $prodi)
    {
        $stmt = $this->conn->prepare("UPDATE {$this->table_name} SET nim = ?, nama = ?, prodi = ? WHERE id = ?");
        return $stmt->execute([$nim, $nama, $prodi, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table_name} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
