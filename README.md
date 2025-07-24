# Laravel 11 Fullstack Ecommerce App

Project e-commerce sederhana menggunakan Laravel 11. Memiliki fitur multi-role (admin dan customer) dengan dashboard yang berbeda, CRUD produk, keranjang belanja, checkout, bukti pembayaran, mutasi, dan fitur pembelian produk dari vendor.

## 🚀 Fitur Utama
- ✅ Autentikasi multi-role (admin & user)
- 🛒 CRUD Produk (khusus admin)
- 🛍️ Keranjang belanja & Checkout
- 📷 Upload bukti transfer
- 📊 Dashboard admin & user
- 🔐 Middleware & Hak akses terpisah

## 🧰 Teknologi yang Digunakan
- Laravel 11
- Blade (template engine)
- Bootstrap + AdminLTE
- MySQL / MariaDB
- Auth Laravel bawaan

## 📦 Cara Menjalankan Project (Local)
```bash
git clone https://github.com/fitriaanattawin/fullstack-ecommerce-laravel11.git
cd fullstack-ecommerce-laravel11
composer install
cp .env.example .env
php artisan key:generate
# Edit koneksi database di file .env
php artisan migrate --seed
php artisan serve

