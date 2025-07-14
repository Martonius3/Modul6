<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Daftar Produk</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Produk Baru</a>
    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th><th>Nama Produk</th><th>Harga</th><th>Stok</th><th>Aksi</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM produk");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id_produk'] ?></td>
            <td><?= $row['nama_produk'] ?></td>
            <td><?= number_format($row['harga']) ?></td>
            <td><?= $row['stok'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id_produk'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="hapus.php?id=<?= $row['id_produk'] ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
