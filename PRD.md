# Mini Project 1: Product Information System (Desain)

**Tujuan:** Merancang struktur blueprint sistem manajemen data informasi produk siap pakai berbasis konsep teori yang telah dipelajari.



---

## Komponen Arsitektur Desain Konseptual

### 1. Data Layer — `products.php`

Berkas ini berperan sebagai penampung struktur data komoditas produk dalam bentuk **multidimensional array**.

Setiap produk menyimpan field berikut:

| Field      | Keterangan                        |
|------------|------------------------------------|
| ID         | Identitas unik produk              |
| Nama       | Nama produk                        |
| Kategori   | Kategori/klasifikasi produk        |
| Harga      | Harga jual per unit                |
| Stok       | Jumlah stok tersedia di gudang     |
| Deskripsi  | Keterangan tambahan produk         |

### 2. Processing Layer — `functions.php`

Berisi kumpulan fungsi logika bisnis, di antaranya:

- **`hitungTotalNilaiStok()`**
  Mengkalkulasi total nilai aset gudang (hasil perkalian harga × stok, dijumlahkan ke seluruh produk).

- **Logika conditional peringatan stok kritis**
  Menyaring dan menandai (misalnya memberi warna berbeda pada baris tabel) produk dengan stok **< 3** sebagai *stok kritis*.

### 3. Presentation Layer — `index.php`

Merajut seluruh komponen (Data Layer + Processing Layer) menjadi satu halaman tampilan:

- Menggunakan `require_once` untuk memuat `products.php` dan `functions.php`.
- Merender data ke dalam layout tabel HTML.
- Menggunakan perulangan `foreach` untuk menampilkan setiap baris data produk secara dinamis.

---

## Alur Arsitektur (Ringkasan)

```
products.php  ──(data array)──▶  functions.php  ──(hasil olahan)──▶  index.php
 (Data Layer)                  (Processing Layer)                 (Presentation Layer)
                                                                    └─ require_once
                                                                    └─ foreach → tabel HTML
```

---

## Status Pengerjaan

- [x] Blueprint arsitektur konseptual (Data, Processing, Presentation Layer)
- [ ] Implementasi kode `products.php`
- [ ] Implementasi kode `functions.php`
- [ ] Implementasi kode `index.php`
