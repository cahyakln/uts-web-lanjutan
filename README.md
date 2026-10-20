# Sistem Informasi Kepegawaian

Aplikasi web Sistem Informasi Kepegawaian yang dikembangkan menggunakan Laravel dan MySQL untuk mengelola data departemen dan pegawai.

## Fitur

- Login dan logout pengguna.
- Dashboard berisi ringkasan jumlah departemen dan pegawai.
- CRUD departemen (tambah, lihat, edit, dan hapus).
- CRUD pegawai (tambah, lihat, edit, dan hapus).
- Relasi departemen dengan pegawai menggunakan Eloquent ORM.
- Validasi input dan perlindungan halaman menggunakan middleware autentikasi.
- Seeder untuk data awal departemen, pegawai, dan akun administrator.

## Teknologi

- Laravel
- PHP
- MySQL
- Blade
- Tailwind CSS
- Vite

## Persyaratan

Pastikan perangkat telah memiliki:

- PHP beserta ekstensi yang dibutuhkan Laravel.
- Composer.
- Node.js dan npm.
- MySQL atau MariaDB.

## Instalasi

1. Clone repositori:

   ```bash
   git clone https://github.com/cahyakln/uts-web-lanjutan.git
   cd uts-web-lanjutan
   ```

2. Instal dependensi PHP:

   ```bash
   composer install
   ```

3. Buat file konfigurasi lingkungan:

   ```bash
   copy .env.example .env
   ```

4. Buat database MySQL bernama `uts_kepegawaian`, kemudian sesuaikan konfigurasi database di file `.env`:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=uts_kepegawaian
   DB_USERNAME=root
   DB_PASSWORD=
   ```

   Sesuaikan username dan password dengan konfigurasi MySQL lokal.

5. Buat application key:

   ```bash
   php artisan key:generate
   ```

6. Jalankan migrasi dan seeder:

   ```bash
   php artisan migrate --seed
   ```

7. Instal dependensi frontend dan buat aset:

   ```bash
   npm install
   npm run build
   ```

8. Jalankan aplikasi:

   ```bash
   php artisan serve
   ```

9. Buka `http://127.0.0.1:8000` di browser.

## Akun Demo

Gunakan akun administrator berikut setelah seeder berhasil dijalankan:

- **Email:** `admin@kepegawaian.test`
- **Password:** `password123`

Gunakan akun ini untuk pengujian lokal. Ganti kredensial demo sebelum aplikasi digunakan di lingkungan produksi.

## Pengujian

Jalankan pengujian otomatis dengan:

```bash
php artisan test
```

## Struktur Data

- **departments:** menyimpan data departemen.
- **employees:** menyimpan data pegawai dan relasi ke departemen.

Setiap pegawai terhubung dengan satu departemen. Departemen yang masih memiliki pegawai tidak dapat dihapus.

## Keamanan Repositori

Jangan mengunggah file `.env`, password pribadi, atau kredensial rahasia ke repositori publik. Gunakan `.env.example` sebagai template konfigurasi.

## Tujuan Proyek

Proyek ini dibuat untuk memenuhi tugas UTS mata kuliah Pemrograman Web Lanjutan dengan topik Pengembangan Sistem Informasi Kepegawaian Menggunakan Laravel.
