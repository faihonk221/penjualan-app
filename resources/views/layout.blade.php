<!DOCTYPE html>
<html>
<head>
    <title>TOKO DWI App</title>
     <!-- Bootstrap CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { font-family: sans-serif; padding: 20px; background: #f9f9f9; }
        nav { margin-bottom: 20px; background: #fff; padding: 10px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        nav a { margin-right: 15px; text-decoration: none; font-weight: bold; color: #333; }
        nav a:hover { color: #007bff; }
        .card { background: white; padding: 15px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
    <h1>🛒 TOKO DWI App</h1>
    
    <nav>
        <a href="/produk">📦 Produk</a>
        <a href="/transaksi">💳 Transaksi</a>
        <a href="/laporan">📊 Laporan</a>
    </nav>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    @yield('content')
</body>
</html>

