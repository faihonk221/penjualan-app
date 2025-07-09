<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Transaksi;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('transaksi.index', compact('produks'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $produk = Produk::findOrFail($request->produk_id);

        // Cek stok cukup
        if ($produk->stok < $request->jumlah) {
            return back()->with('error', 'Stok tidak mencukupi.');
        }

        // Hitung total harga
        $total = $produk->harga * $request->jumlah;

        // Kurangi stok
        $produk->stok -= $request->jumlah;
        $produk->save();

        // Simpan transaksi
        Transaksi::create([
            'produk_id' => $produk->id,
            'jumlah' => $request->jumlah,
            'tanggal' => Carbon::now()->toDateString(),
            'total_harga' => $total,
        ]);

        return redirect('/transaksi')->with('success', 'Transaksi berhasil disimpan.');
    }
}

