<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            // Cek apakah kolom sudah ada sebelum menambahkan
            if (!Schema::hasColumn('transaksis', 'produk_id')) {
                $table->unsignedBigInteger('produk_id')->after('id');
            }

            if (!Schema::hasColumn('transaksis', 'jumlah')) {
                $table->integer('jumlah')->after('produk_id')->default(1);
            }

            // Tambahkan foreign key hanya jika belum ada
            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->dropForeign(['produk_id']);
            $table->dropColumn(['produk_id', 'jumlah']);
        });
    }
};

