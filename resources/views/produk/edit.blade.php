@extends('layout')

@section('content')
    <h2>✏️ Edit Produk</h2>

    <form method="POST" action="{{ route('produk.update', $produk->id) }}">
        @csrf
        @method('PUT')
        <p>
            <label>Nama Produk</label><br>
            <input type="text" name="nama" value="{{ $produk->nama }}" required>
        </p>
        <p>
            <label>Harga</label><br>
            <input type="number" name="harga" value="{{ $produk->harga }}" required>
        </p>
        <p>
            <label>Stok</label><br>
            <input type="number" name="stok" value="{{ $produk->stok }}" required>
        </p>
        <p>
            <button type="submit">Simpan Perubahan</button>
            <a href="{{ route('produk.index') }}">Kembali</a>
        </p>
    </form>
@endsection

