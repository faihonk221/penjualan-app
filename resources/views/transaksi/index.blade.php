@extends('layout')

@section('content')
<h2>Form Transaksi</h2>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<form action="/transaksi" method="POST">
    @csrf
    <label for="produk_id">Pilih Produk:</label>
    <select name="produk_id" required>
        @foreach($produks as $produk)
            <option value="{{ $produk->id }}">{{ $produk->nama }} - Rp{{ number_format($produk->harga) }}</option>
        @endforeach
    </select><br><br>

    <label for="qty">Jumlah:</label>
    <input type="number" name="qty" min="1" required><br><br>

    <button type="submit">Simpan Transaksi</button>
</form>
@endsection

