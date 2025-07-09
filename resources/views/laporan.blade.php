<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan</title>
</head>
<body>
    <h2>Laporan Penjualan</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Tanggal & Waktu</th>
                <th>Hari</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->produk->nama }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('dddd') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
