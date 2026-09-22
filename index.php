<?php

require_once 'products.php';
require_once 'functions.php';


$totalNilaiAset = hitungTotalNilaiStok($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information System</title>
    <!-- Menggunakan Bootstrap 5 untuk styling tabel sederhana -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-danger {
            background-color: #f8d7da !important;
            color: #842029;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container my-5">
        <h2 class="mb-4 text-primary">System Informasi Produk & Manajemen Panen</h2>

        <!-- Ringkasan Total Aset -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-secondary">Total Nilai Aset Gudang</h5>
                <h3 class="card-text text-success fw-bold">
                    Rp <?= number_format($totalNilaiAset, 0, ',', '.'); ?>
                </h3>
            </div>
        </div>

        <!-- Tabel Produk -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-3">Daftar Stok Produk</h5>
                <p class="text-muted small">* Baris berwarna merah menandakan <strong>Stok Kritis (&lt; 3)</strong>.</p>
                
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $item): ?>
                            <?php 
                                
                                $rowClass = getStatusStokClass($item['stok']); 
                            ?>
                            <tr class="<?= $rowClass; ?>">
                                <td><?= $item['id']; ?></td>
                                <td><strong><?= $item['nama']; ?></strong></td>
                                <td><span class="badge bg-secondary"><?= $item['kategori']; ?></span></td>
                                <td>Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
                                <td>
                                    <?= $item['stok']; ?>
                                    <?php if ($item['stok'] < 3): ?>
                                        <span class="badge bg-danger ms-1">Kritis!</span>
                                    <?php endif; ?>
                                </td>
                                <td><?= $item['deskripsi']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>