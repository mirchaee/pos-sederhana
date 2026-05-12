<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - POS Sederhana</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-orange-50 text-slate-800">
    <div class="min-h-screen">
        <header class="bg-orange-600 text-white shadow">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
                <div>
                    <h1 class="text-xl font-bold">POS Sederhana</h1>
                    <p class="text-sm text-orange-100">Praktikum Laravel + Tailwind CSS</p>
                </div>

                
                <nav class="flex gap-2 text-sm font-medium">
                    
                    <a href="{{ route('dashboard') }}" class="px-3 py-2 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-orange-800' : 'hover:bg-orange-700' }}">🏠 Dashboard</a>
                    <a href="{{ route('produk.index') }}" class="px-3 py-2 rounded-lg {{ request()->routeIs('produk.index') ? 'bg-orange-800' : 'hover:bg-orange-700' }}">📦 Produk</a>
                    <a href="{{ route('pelanggan.index') }}" class="px-3 py-2 rounded-lg {{ request()->routeIs('pelanggan.index') ? 'bg-orange-800' : 'hover:bg-orange-700' }}">👥 Pelanggan</a>
                    <a href="{{ route('transaksi.index') }}" class="px-3 py-2 rounded-lg {{ request()->routeIs('transaksi.index') ? 'bg-orange-800' : 'hover:bg-orange-700' }}">💰 Transaksi</a>
                    <a href="{{ route('laporan.index') }}" class="px-3 py-2 rounded-lg {{ request()->routeIs('laporan.index') ? 'bg-orange-800' : 'hover:bg-orange-700' }}">📊 Laporan</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-6xl px-6 py-8">
            @yield('content')
        </main>
    </div>
</body>
</html>
