<!DOCTYPE html>
<html>
<head>
    <title>Toko Dwi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="/">Toko Dwi</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/produk">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="/transaksi">Transaksi</a></li>
                <li class="nav-item"><a class="nav-link" href="/laporan">Laporan</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>

