@extends('layout')

@section('content')
<h2>📊 Laporan Penjualan</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Produk</th>
            <th>Qty</th>
            <th>Harga Satuan</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @forelse($detailTransaksis as $i => $detail)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $detail->transaksi->tanggal ?? '-' }}</td>
                <td>{{ $detail->produk->nama ?? '-' }}</td>
                <td>{{ $detail->qty }}</td>
                <td>Rp{{ number_format($detail->harga_satuan) }}</td>
                <td>Rp{{ number_format($detail->subtotal) }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada transaksi</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection

