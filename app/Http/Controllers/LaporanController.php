<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function index()
    {
        Carbon::setLocale('id'); // agar nama hari pakai Bahasa Indonesia
        $transaksi = Transaksi::with('produk')->orderBy('created_at', 'desc')->get();

        return view('laporan', compact('transaksi'));
    }
}

