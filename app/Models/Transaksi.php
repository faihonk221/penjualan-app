<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal', 'total_harga', 'produk_id', 'jumlah'];

    public function produk()
    {
        return $this->belongsTo(\App\Models\Produk::class);
    }
}

