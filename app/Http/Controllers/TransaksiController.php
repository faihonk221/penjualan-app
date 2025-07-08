<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('transaksi.index', compact('produks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required',
            'qty' => 'required|integer|min:1'
        ]);

        $produk = Produk::findOrFail($request->produk_id);
        $subtotal = $produk->harga * $request->qty;

        $transaksi = Transaksi::create([
            'tanggal' => now(),
            'total_harga' => $subtotal
        ]);

        DetailTransaksi::create([
            'transaksi_id' => $transaksi->id,
            'produk_id' => $produk->id,
            'qty' => $request->qty,
            'harga_satuan' => $produk->harga,
            'subtotal' => $subtotal
        ]);

        return redirect('/transaksi')->with('success', 'Transaksi berhasil disimpan.');
    }
}

