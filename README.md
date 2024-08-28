<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sistem Manajemen Karyawan Laravel

Ini adalah aplikasi web yang dibangun dengan Laravel untuk mengelola data karyawan dan lokasi. Aplikasi ini memungkinkan pengguna untuk menambah, memperbarui, mencari, dan memfilter data karyawan.

## Fitur

    Operasi CRUD untuk Karyawan dan Lokasi
    Fungsi pencarian dengan filter
    Opsi pengurutan data karyawan dan lokasi
    Filter khusus untuk karyawan berusia lebih dari 28 tahun yang berlokasi di Jakarta

## Prasyarat

Sebelum memulai, pastikan Anda telah memenuhi persyaratan berikut:

    PHP 8.0+ terinstal di mesin lokal Anda
    Composer terinstal secara global
    MySQL atau sistem manajemen basis data lainnya terinstal
    Node.js dan NPM terinstal untuk ketergantungan frontend

## Instalasi

Ikuti langkah-langkah berikut untuk mengatur aplikasi secara lokal:
1. Clone repositori:
```
    git clone https://github.com/usernameanda/nama-repository.git
    cd nama-repository
```
2. Instal dependensi:
```
    composer install
   npm install
```
5. Buat file .env:

Salin file .env.example menjadi .env dan sesuaikan variabel lingkungan berikut:

    cp .env.example .env

Atur konfigurasi basis data:

    DB_DATABASE=nama_database_anda
    DB_USERNAME=username_database_anda
    DB_PASSWORD=password_database_anda

4. Generate application key:
```
    php artisan key:generate
``` 
6. Jalankan migrasi:

Siapkan basis data dengan menjalankan migrasi:
    
    php artisan migrate

6. Seed basis data (opsional):

Jika Anda memiliki seeder, Anda dapat mengisi basis data dengan data dummy:

    php artisan db:seed

7. Kompilasi aset frontend:

Kompilasi aset frontend dengan:

    npm run dev

8. Mulai server pengembangan:

Jalankan server pengembangan Laravel:
    
    php artisan serve

Kunjungi http://localhost:8000 di browser Anda untuk melihat aplikasi.

# Deployment

Untuk melakukan deployment aplikasi ke lingkungan produksi, ikuti langkah-langkah berikut:

1. Unggah file proyek:

Transfer semua file proyek ke server web Anda menggunakan FTP, SFTP, atau metode serupa.

2. Instal dependensi di server:

SSH ke server Anda dan navigasikan ke direktori proyek Anda. Kemudian, jalankan:

    composer install --optimize-autoloader --no-dev
    npm install
    npm run prod

3. Atur variabel lingkungan:

Konfigurasikan file .env di server Anda dengan pengaturan yang benar untuk lingkungan produksi.

4. Jalankan migrasi:

Di server, jalankan:

    php artisan migrate --force

5. Setel izin file:

Pastikan direktori storage dan bootstrap/cache dapat ditulis oleh server web:

    chown -R www-data:www-data storage bootstrap/cache
    chmod -R 775 storage bootstrap/cache

6. Optimalkan aplikasi:

Optimalkan aplikasi untuk produksi:

    php artisan config:cache
    php artisan route:cache
    php artisan view:cache

7. Konfigurasi server web:

Konfigurasikan server web Anda (Apache, Nginx, dll.) untuk melayani aplikasi Laravel. Pastikan root dokumen server Anda diset ke direktori public dari aplikasi Laravel.

8. Setel manajer proses (opsional):

Gunakan manajer proses seperti Supervisor untuk memastikan php artisan serve berjalan terus-menerus di latar belakang.
