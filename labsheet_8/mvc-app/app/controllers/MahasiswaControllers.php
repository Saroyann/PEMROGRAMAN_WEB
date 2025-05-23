<?php
require_once __DIR__ . '/../models/Mahasiswa.php';
require_once __DIR__ . '/../repositories/MahasiswaRepository.php';
require_once __DIR__ . '/../../config/Database.php';
class MahasiswaController
{
    private $repo;
    public function __construct()
    {
        $db = (new Database())->getConnection();
        $this->repo = new MahasiswaRepository($db);
    }
    public function index()
    {
        $data = $this->repo->getAll();
        require __DIR__ . '/../views/mahasiswa/index.php';
    }
    public function create()
    {
        require __DIR__ . '/../views/mahasiswa/create.php';
    }
    
    public function edit($id)
    {
        $mhs = $this->repo->findById($id);
        require __DIR__ . '/../views/mahasiswa/edit.php';
    }

public function store()
{
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $this->repo->insert($nim, $nama, $prodi);

    header("Location: /?action=index");
}

public function update($id)
{
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $this->repo->update($id, $nim, $nama, $prodi);

    header("Location: /?action=index");
}
    public function delete($id)
    {
        $this->repo->delete($id);
        header("Location: /?action=index");
    }
}
