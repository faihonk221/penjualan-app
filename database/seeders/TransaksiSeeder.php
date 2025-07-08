<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;

class TransaksiSeeder extends Seeder
{
    public function run(): void
    {
        // Buat produk dummy jika belum ada
        $produk1 = Produk::firstOrCreate(
            ['nama' => 'Pulpen'],
            ['harga' => 3000, 'stok' => 100]
        );

        $produk2 = Produk::firstOrCreate(
            ['nama' => 'Buku'],
            ['harga' => 10000, 'stok' => 50]
        );

        // Buat transaksi
        $transaksi = Transaksi::create([
            'tanggal' => now(),
            'total_harga' => (2 * $produk1->harga) + (1 * $produk2->harga),
        ]);

        // Tambahkan detail transaksi
        DetailTransaksi::create([
            'transaksi_id' => $transaksi->id,
            'produk_id' => $produk1->id,
            'qty' => 2,
            'harga_satuan' => $produk1->harga,
            'subtotal' => 2 * $produk1->harga,
        ]);

        DetailTransaksi::create([
            'transaksi_id' => $transaksi->id,
            'produk_id' => $produk2->id,
            'qty' => 1,
            'harga_satuan' => $produk2->harga,
            'subtotal' => 1 * $produk2->harga,
        ]);
    }
}

