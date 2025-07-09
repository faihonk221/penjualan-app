<!DOCTYPE html>
<html>
<head>
    <title>Form Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Form Transaksi</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="/transaksi">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Pilih Produk</label>
                    <select name="produk_id" class="form-select" required>
                        @foreach ($produks as $produk)
                            <option value="{{ $produk->id }}">
                                {{ $produk->nama }} (Stok: {{ $produk->stok }}, Harga: Rp{{ number_format($produk->harga) }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan Transaksi</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

