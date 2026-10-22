# LaporBanjir - Modul 6 Authentication

Aplikasi LaporBanjir dari Modul 4 yang dilengkapi authentication manual Laravel tanpa Laravel Breeze.

## Fitur

- Form pelaporan banjir yang tetap dapat diakses warga tanpa login.
- Register, login, dan logout manual menggunakan `RegisterController` dan `LoginController`.
- Password disimpan sebagai hash (`Hash::make`) dan diverifikasi dengan `Auth::attempt`.
- Halaman daftar laporan dan profil petugas dilindungi middleware `auth`.
- Navigasi berbeda untuk tamu dan petugas menggunakan `@auth` / `@endauth`.
- Halaman profil petugas yang menampilkan nama, email, dan waktu pembuatan akun.
- `PetugasSeeder` dengan Faker locale `id_ID`: 5 akun dummy + 1 admin BPBD.

## Kebutuhan

- PHP 8.2 atau lebih baru
- Composer
- MySQL / MariaDB (XAMPP)
- Node.js dan npm (opsional, untuk tooling frontend)

## Instalasi

1. Jalankan `composer install`.
2. Salin `.env.example` menjadi `.env` bila belum ada, lalu sesuaikan konfigurasi database:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_laporbanjir_modul6
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. Buat database `db_laporbanjir_modul6` melalui phpMyAdmin.
4. Jalankan `php artisan key:generate` bila `APP_KEY` belum terisi.
5. Jalankan `php artisan migrate:fresh --seed`.
6. Jalankan `php artisan serve`, lalu buka `http://127.0.0.1:8000`.

## Akun Pengujian

| Email | Password | Peran |
| --- | --- | --- |
| admin@example.com | admin123 | Admin BPBD |
| 5 akun dummy hasil Faker | password | Petugas |

Email akun dummy dapat dilihat pada tabel `users` di phpMyAdmin.

## Struktur Penting

- `routes/web.php` - route publik, auth, dan halaman terproteksi.
- `app/Http/Controllers/Auth/RegisterController.php` - proses register.
- `app/Http/Controllers/Auth/LoginController.php` - proses login dan logout.
- `app/Http/Controllers/PetugasController.php` - halaman profil petugas.
- `resources/views/layouts/app.blade.php` - layout dan navigasi `@auth`.
- `database/seeders/PetugasSeeder.php` - seeder akun petugas.
