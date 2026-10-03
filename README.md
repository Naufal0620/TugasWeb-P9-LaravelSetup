# Panduan Instalasi dan Struktur Folder Laravel

Project ini adalah aplikasi web sederhana yang dibuat menggunakan framework PHP Laravel.

---

## Cara Install Laravel

### 1. Prasyarat
Pastikan di komputer kamu sudah terpasang:
- **PHP** (versi >= 8.2 direkomendasikan)
- **Composer** (Package manager PHP)
- **Node.js & NPM** (opsional, untuk build frontend seperti Vite/Tailwind)
- **Database** (MySQL / PostgreSQL / SQLite)

---

### 2. Cara Install Project Baru (Dari Awal)
Jika ingin membuat project Laravel baru dari nol:

```bash
composer create-project laravel/laravel nama-project
cd nama-project
php artisan serve
```

---

### 3. Cara Menjalankan Project yang Sudah Ada (Repository Ini)
Jika kamu baru saja clone/download repository ini:

1. **Install dependensi PHP & JS:**
   ```bash
   composer install
   npm install
   ```

2. **Salin file environment:**
   ```bash
   cp .env.example .env
   ```

3. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

4. **Konfigurasi Database:**
   Buka file `.env`, lalu sesuaikan settingan database kamu:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database_kamu
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Jalankan Migrasi Database:**
   ```bash
   php artisan migrate
   ```

6. **Jalankan Server:**
   ```bash
   php artisan serve
   ```
   Akses website di browser: `http://localhost:8000`

---

## Penjelasan Singkat Struktur Folder

Berikut ringkasan fungsi folder-folder utama di Laravel:

- **`app/`** : Tempat kode inti aplikasi, seperti Controller, Model Eloquent, Middleware, dan Service.
- **`bootstrap/`** : Berisi file inisialisasi dan konfigurasi dasar untuk memuat framework.
- **`config/`** : Berisi semua file konfigurasi aplikasi (database, mail, auth, app, dll).
- **`database/`** : Tempat file database migrations, seeders, dan model factories.
- **`public/`** : Titik masuk utama aplikasi (`index.php`) serta tempat menyimpan aset publik seperti CSS, JS, dan gambar.
- **`resources/`** : Berisi tampilan Blade (`views/`), CSS, JS mentah, serta file translasi/bahasa.
- **`routes/`** : Tempat mendefinisikan rute/URL aplikasi (misal `web.php` untuk web biasa, `api.php` untuk REST API).
- **`storage/`** : Tempat penyimpanan file sementara seperti cache, session, log sistem, dan file upload.
- **`tests/`** : Berisi file testing otomatis (Unit test & Feature test).
- **`vendor/`** : Berisi semua package dependensi pihak ketiga yang diinstall lewat Composer.
- **`.env`** : File konfigurasi environment variabel lokal (seperti database, mail server, secret key).
