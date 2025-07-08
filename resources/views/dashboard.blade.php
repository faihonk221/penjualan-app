@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="alert alert-success">
        🎉 Selamat datang di <strong>Toko Dwi</strong>, {{ Auth::user()->name }}!
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">📦 Produk</div>
                <div class="card-body">
                    <h5 class="card-title">Kelola produk toko</h5>
                    <a href="{{ route('produk.index') }}" class="btn btn-light">Lihat Produk</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">💳 Transaksi</div>
                <div class="card-body">
                    <h5 class="card-title">Input transaksi penjualan</h5>
                    <a href="{{ url('/transaksi') }}" class="btn btn-light">Transaksi</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">📊 Laporan</div>
                <div class="card-body">
                    <h5 class="card-title">Lihat laporan penjualan</h5>
                    <a href="{{ url('/laporan') }}" class="btn btn-light">Lihat Laporan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

