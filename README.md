# Toko Online CodeIgniter 4

Proyek ini adalah platform toko online yang dibangun menggunakan [CodeIgniter 4](https://codeigniter.com/). Sistem ini menyediakan beberapa fungsionalitas untuk toko online, termasuk manajemen produk, keranjang belanja, dan sistem transaksi.

## Daftar Isi

- [Fitur](#fitur)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi](#instalasi)
- [Struktur Proyek](#struktur-proyek)

## Fitur

- Katalog Produk
  - Tampilan produk dengan gambar
  - Pencarian produk
- Keranjang Belanja
  - Tambah/hapus produk
  - Update jumlah produk per item
  - Perhitungan otomatis diskon harian jika ada
- Sistem Diskon 
  - Admin bisa menambahkan diskon berdasarkan tanggal (hanya satu per hari)
  - Validasi: tidak boleh menambahkan diskon dengan tanggal yang sama
  - Saat login, diskon hari ini disimpan di session dan otomatis dipakai di keranjang
  - Tanggal diskon tidak bisa diubah saat edit (readonly)
- Sistem Transaksi
  - Proses checkout dengan form alamat dan metode pengiriman
  - Perhitungan subtotal, diskon, dan total belanja
  - Simpan transaksi dan detail item ke database
  - Riwayat transaksi
- Panel Admin
  - Manajemen produk (CRUD)
  - Manajemen kategori produk
  - Manajemen data diskon
  - Laporan transaksi
  - Export data ke PDF
- Sistem Autentikasi
  - Login/Register pengguna
  - Proteksi halaman berdasarkan role (admin / user)
  - Redirect otomatis sesuai role
  - Manajemen akun
- UI Responsif dengan NiceAdmin template
  - Navigasi sidebar dinamis sesuai role
  - Tampilan bersih dan profesional
  - Pemberitahuan diskon hari ini ditampilkan di header

## Persyaratan Sistem

- PHP >= 7.4
- Composer
- Web server (XAMPP)

## Instalasi

1. **Clone repository ini**
   ```bash
   git clone [URL repository]
   cd belajar-ci-tugas
   ```
2. **Install dependensi**
   ```bash
   composer install
   ```
3. **Konfigurasi database**

   - Start module Apache dan MySQL pada XAMPP
   - Buat database **db_ci4** di phpmyadmin.
   - copy file .env dari tutorial https://www.notion.so/april-ns/Codeigniter4-Migration-dan-Seeding-045ffe5f44904e5c88633b2deae724d2

4. **Jalankan migrasi database**
   ```bash
   php spark migrate
   ```
5. **Seeder data**
   ```bash
   php spark db:seed ProductSeeder
   php spark db:seed ProductSeeder
   php spark db:seed DiskonSeeder
   ```
   ```bash
   php spark db:seed UserSeeder
   ```
6. **Jalankan server**
   ```bash
   php spark serve
   ```
7. **Akses aplikasi**
   Buka browser dan akses `http://localhost:8080` untuk melihat aplikasi.

## Struktur Proyek

Proyek menggunakan struktur MVC CodeIgniter 4:

- app/Controllers - Logika aplikasi dan penanganan request
    - AuthController.php – Login & logout pengguna
    - ProdukController.php – Manajemen data produk
    - TransaksiController.php – Keranjang belanja & checkout
    - DiskonController.php – Manajemen diskon
    - Home.php – Halaman umum (FAQ, Contact, Profile)
- app/Models - Model untuk interaksi database
  - ProductModel.php - Model produk
  - UserModel.php - Model pengguna
  - DiskonModel.php – Data diskon
  - TransaksiModel.php – Data transaksi
- app/Views - Template dan komponen UI
  - v_produk.php - Tampilan produk
  - v_keranjang.php - Halaman keranjang
  - v_login.php – Form login
  - v_produk.php – Halaman produk
  - v_keranjang.php – Halaman keranjang
  - v_diskon.php – Manajemen diskon
  - v_profile.php – Halaman profil pengguna
  - template/header.php, template/sidebar.php – Template utama
- public/img - Gambar produk dan aset
- public/NiceAdmin - Template admin
- database/ – File migrasi dan seeder database
- .env – Konfigurasi environment dan koneksi database
- composer.json – File dependensi PHP
