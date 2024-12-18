# Streaming Film - Proyek Laravel

## Deskripsi
Proyek ini adalah platform streaming film sederhana yang dibangun dengan Laravel. Fitur yang tersedia:
- Melihat daftar kategori film.
- Mencari film berdasarkan judul.
- Memfilter film berdasarkan kategori.
- Melihat informasi detail film dan memutar video terkait.

## Fitur
1. **Daftar Data Master Kategori Film**
2. **Daftar Data Film** dengan kemampuan pencarian dan filter kategori.
3. **Informasi Detail Film** termasuk pemutaran video.

## Prasyarat
Untuk menjalankan proyek ini, pastikan Anda telah menginstal:
- PHP >= 8.1
- Composer
- MySQL
- Node.js dan npm (untuk aset frontend)

## Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/rezafahlevi08/streamingfilm.git
   cd streamingfilm
   ```

2. **Install Dependencies**
   Instal dependensi PHP dan JavaScript:
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Konfigurasi Lingkungan**
   Salin file `.env` dan konfigurasikan kredensial database Anda:
   ```bash
   cp .env.example .env
   ```
   Perbarui baris berikut dalam file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=streamingfilm
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Jalankan Migrasi dan Seeder**
   Buat tabel database dan masukkan data dummy:
   ```bash
   php artisan migrate --seed
   ```

6. **Jalankan Aplikasi**
   Mulai server pengembangan:
   ```bash
   php artisan serve
   ```
   Aplikasi akan tersedia di `http://localhost:8000`.

## Penggunaan

### Akses Aplikasi
1. Buka browser Anda dan navigasikan ke `http://localhost:8000`.
2. Gunakan fungsi filter dan pencarian untuk menemukan film.
3. Klik tautan "Watch" untuk memutar film.

### Struktur Direktori
- **public/videos/**: Direktori untuk menyimpan file video.
- **resources/views/**: Berisi template Blade untuk frontend.
- **routes/web.php**: Mendefinisikan rute untuk aplikasi.


## Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT. Lihat file LICENSE untuk detailnya.

---

Untuk masalah atau kontribusi, jangan ragu untuk membuka pull request atau menghubungi pemilik repository.
