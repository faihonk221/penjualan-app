# 🛒 Toko Dwi - Aplikasi Penjualan Laravel

Aplikasi **Toko Dwi** adalah sistem penjualan berbasis Laravel 10.  
Dirancang untuk mencatat produk, transaksi, dan menghasilkan laporan penjualan secara otomatis.

## 🚀 Fitur

- ✅ Manajemen Produk (CRUD)
- ✅ Input Transaksi dengan Detail Produk
- ✅ Laporan Penjualan per Produk
- ✅ Login & Autentikasi Admin (Laravel Breeze)
- ✅ Tampilan modern pakai Bootstrap 5

## 🧪 Cara Menjalankan

```bash
git clone https://github.com/faihonk221/penjualan-app.git
cd penjualan-app
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install && npm run dev
php artisan serve
## 📄 Lisensi
Aplikasi ini menggunakan lisensi **MIT**.  
Lihat file [LICENSE](LICENSE) untuk detail lengkapnya.
