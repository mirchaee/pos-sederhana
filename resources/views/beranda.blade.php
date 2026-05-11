<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $namaAplikasi }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-orange-50 text-slate-800">
    <main class="mx-auto max-w-5xl px-6 py-10">
        <section class="rounded-3xl bg-white p-8 shadow-lg ring-1 ring-orange-100">
            <span class="inline-flex rounded-full bg-orange-100 px-4 py-1 text-sm font-semibold text-orange-700">
                Modul 1 Laravel POS
            </span>
            <div class="mt-6 grid gap-8 md:grid-cols-2 md:items-center">
                <div>
                    <h1 class="text-4xl font-bold tracking-tight text-orange-600">
                        {{ $namaAplikasi }}
                    </h1>
                    <p class="mt-4 text-lg leading-8 text-slate-600">
                        {{ $deskripsi }}
                    </p>
                    <a href="#fitur" class="mt-6 inline-block rounded-xl bg-orange-500 px-5 py-3 font-semibold text-white shadow hover:bg-orange-600">
                        Lihat Fitur Awal
                    </a>
                </div>
                <div class="rounded-2xl bg-orange-500 p-6 text-white shadow-md">
                    <p class="text-sm uppercase tracking-widest text-orange-100">Status Project</p>
                    <p class="mt-3 text-3xl font-bold">Berhasil dibuat</p>
                    <p class="mt-3 text-orange-100">Project siap dikembangkan menjadi aplikasi transaksi jual beli.</p>
                </div>
            </div>
        </section>

        <section id="fitur" class="mt-8 grid gap-4 md:grid-cols-4">
            @foreach ($fiturAwal as $fitur)
            <div class="rounded-2xl border border-orange-100 bg-white p-5 shadow-sm">
                <p class="font-semibold text-orange-700">{{ $fitur }}</p>
                <p class="mt-2 text-sm text-slate-500">Akan dikembangkan pada modul berikutnya.</p>
            </div>
            @endforeach
        </section>
    </main>
</body>
</html>