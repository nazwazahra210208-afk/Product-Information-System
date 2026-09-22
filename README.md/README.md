# Mini Project 1 — Product Information System

Repositori/dokumen ini berisi rancangan (blueprint) desain konseptual untuk **Sistem Manajemen Data Informasi Produk**, sebagai bagian dari Mini Project 1 mata kuliah **Pemrograman Web**.

## Isi

| Berkas                          | Deskripsi                                                            |
|----------------------------------|-----------------------------------------------------------------------|
| `ProductInformationSystem.md`   | Blueprint arsitektur desain konseptual sistem (3 lapisan)             |

## Ringkasan Proyek

Sistem dirancang dengan pendekatan **3-layer architecture** sederhana berbasis PHP prosedural:

1. **Data Layer** (`products.php`) — penyimpanan data produk dalam multidimensional array.
2. **Processing Layer** (`functions.php`) — logika bisnis, termasuk perhitungan total nilai stok dan penandaan stok kritis.
3. **Presentation Layer** (`index.php`) — menampilkan data ke tabel HTML menggunakan `require_once` dan `foreach`.

## Catatan

Tahap ini merupakan sesi **desain tanpa coding** — fokus pada pematangan konsep arsitektur sebelum masuk ke tahap implementasi kode.

## Tahap Selanjutnya

- Implementasi `products.php`
- Implementasi `functions.php`
- Implementasi `index.php`
- Pengujian tampilan tabel & validasi logika stok kritis
