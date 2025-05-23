<?php
require_once '../config/Database.php';

$database = new Database();
$pdo = $database->getConnection();

// Logika untuk menghapus data
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM mahasiswa WHERE id = ?");
    $stmt->execute([$id]);

    // Redirect kembali ke halaman index setelah penghapusan
    header('Location: index.php');
    exit;
}

$stmt = $pdo->query("SELECT * FROM mahasiswa");
$data = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<h2>Daftar Mahasiswa</h2>
<a href="create.php">Tambah</a>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $m): ?>
            <tr>
                <td><?= htmlspecialchars($m->nim) ?></td>
                <td><?= htmlspecialchars($m->nama) ?></td>
                <td><?= htmlspecialchars($m->prodi) ?></td>
                <td>
                    <a href="edit.php?id=<?= $m->id ?>">Edit</a> |
                    <a href="index.php?action=delete&id=<?= $m->id ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4" style="text-align: center;">Tidak ada data</td>
        </tr>
    <?php endif; ?>
</table>