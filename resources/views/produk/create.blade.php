@extends('layout')

@section('content')
    <h2>➕ Tambah Produk</h2>

    <form method="POST" action="{{ route('produk.store') }}">
        @csrf
        <p>
            <label>Nama Produk</label><br>
            <input type="text" name="nama" required>
        </p>
        <p>
            <label>Harga</label><br>
            <input type="number" name="harga" required>
        </p>
        <p>
            <label>Stok</label><br>
            <input type="number" name="stok" required>
        </p>
        <p>
            <button type="submit">Simpan</button>
            <a href="{{ route('produk.index') }}">Kembali</a>
        </p>
    </form>
@endsection
