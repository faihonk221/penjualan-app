<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Penjualan App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-blue-600">🛒 Penjualan App</h1>
            <ul class="flex space-x-6">
                <li><a href="{{ url('/produk') }}" class="text-gray-700 hover:text-blue-600 font-medium">📦 Produk</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-600 font-medium">💳 Transaksi</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-600 font-medium">📊 Laporan</a></li>
            </ul>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="flex justify-center items-center mt-20">
        <div class="bg-white p-10 rounded-2xl shadow-xl w-full max-w-lg text-center space-y-6">
            <h2 class="text-3xl font-bold text-blue-700">Selamat Datang</h2>
            <p class="text-gray-600">Aplikasi manajemen penjualan sederhana. Silakan pilih menu di atas untuk mulai menggunakan aplikasi.</p>
        </div>
    </div>

</body>
</html>

