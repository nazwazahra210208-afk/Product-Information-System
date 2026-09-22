# Mini Project 1: Product Information System

Proyek ini merupakan perancangan dan implementasi sederhana **Product Information System** berbasis PHP dengan menerapkan konsep arsitektur 3-tier.

## Struktur Arsitektur
* **Data Layer (`products.php`)**: Menampung data komoditas produk (ID, Nama, Kategori, Harga, Stok, Deskripsi) dalam bentuk array multidimensi.
* **Processing Layer (`functions.php`)**: Berisi fungsi `hitungTotalNilaiStok()` untuk mengalkulasi nilai total aset gudang serta fungsi `getStatusStokClass()` untuk menandai stok kritis (< 3).
* **Presentation Layer (`index.php`)**: Merajut komponen data dan fungsi menggunakan `require_once`, lalu merender tampilan data ke dalam layout tabel HTML menggunakan perulangan `foreach`.

## Fitur Utama
* Kalkulasi otomatis total nilai aset gudang.
* Penandaan baris tabel secara otomatis untuk produk dengan kondisi stok kritis (`stok < 3`).
* Tampilan antarmuka yang responsif berbasis Bootstrap 5.