@extends('layout')

@section('content')
    <h2>Edit Produk</h2>
    <form method="POST" action="{{ route('produk.update', $produk->id) }}">
        @csrf
        @method('PUT')
        Nama: <input type="text" name="nama" value="{{ $produk->nama }}"><br>
        Harga: <input type="number" name="harga" value="{{ $produk->harga }}"><br>
        Stok: <input type="number" name="stok" value="{{ $produk->stok }}"><br>
        <button type="submit">Update</button>
    </form>
@endsection
