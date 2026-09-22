<?php

function hitungTotalNilaiStok(array $products) { // Menambahkan type hint 'array'
    $totalNilai = 0;
    foreach ($products as $product) {
        $totalNilai += $product['harga'] * $product['stok'];
    }
    return $totalNilai;
}

function getStatusStokClass(int $stok) { // Menambahkan type hint 'int'
    if ($stok < 3) {
        return 'table-danger';
    }
    return '';
}