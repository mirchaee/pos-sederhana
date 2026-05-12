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
                    <a href="{{ route('dashboard') }}" class="rounded-lg px-3 py-2 hover:bg-orange700">Dashboard</a>
                    <a href="{{ route('produk.index') }}" class="rounded-lg px-3 py-2 hover:bgorange-700">Produk</a>
                    <a href="{{ route('pelanggan.index') }}" class="rounded-lg px-3 py-2 hover:bgorange-700">Pelanggan</a>
                    <a href="{{ route('transaksi.index') }}" class="rounded-lg px-3 py-2 hover:bgorange-700">Transaksi</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-6xl px-6 py-8">
            @yield('content')
        </main>
    </div>
</body>
</html>
