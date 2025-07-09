<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tambahkan kolom harga dan stok ke tabel produks jika belum ada
     */
    public function up(): void
    {
        Schema::table('produks', function (Blueprint $table) {
            if (!Schema::hasColumn('produks', 'harga')) {
                $table->integer('harga')->after('nama');
            }

            if (!Schema::hasColumn('produks', 'stok')) {
                $table->integer('stok')->after('harga');
            }
        });
    }

    /**
     * Hapus kolom harga dan stok jika di-rollback
     */
    public function down(): void
    {
        Schema::table('produks', function (Blueprint $table) {
            if (Schema::hasColumn('produks', 'harga')) {
                $table->dropColumn('harga');
            }

            if (Schema::hasColumn('produks', 'stok')) {
                $table->dropColumn('stok');
            }
        });
    }
};

