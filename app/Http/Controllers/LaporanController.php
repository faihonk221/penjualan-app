<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;

class LaporanController extends Controller
{
    public function index()
    {
        $detailTransaksis = DetailTransaksi::with('produk', 'transaksi')->orderByDesc('id')->get();
        return view('laporan.index', compact('detailTransaksis'));
    }
}

