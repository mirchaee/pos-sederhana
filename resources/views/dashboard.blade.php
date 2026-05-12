@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<section class="mb-8 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-orange-100">
    <p class="text-sm font-semibold uppercase tracking-wide text-orange-600">
        Dashboard
    </p>

    <h2 class="mt-2 text-3xl font-bold text-slate-900">
        Ringkasan POS Hari Ini
    </h2>

    <p class="mt-2 text-slate-600">
        Pantau data utama aplikasi POS sederhana sebelum masuk ke fitur transaksi.
    </p>
</section>

<section class="grid gap-4 md:grid-cols-4">

    <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-orange-100">
        <p class="text-sm text-slate-500">Produk</p>

        <p class="mt-2 text-3xl font-bold text-orange-600">
            {{ $ringkasan['jumlahProduk'] }}
        </p>
    </div>

    <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-orange-100">
        <p class="text-sm text-slate-500">Pelanggan</p>

        <p class="mt-2 text-3xl font-bold text-orange-600">
            {{ $ringkasan['jumlahPelanggan'] }}
        </p>
    </div>

    <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-orange-100">
        <p class="text-sm text-slate-500">Transaksi Hari Ini</p>

        <p class="mt-2 text-3xl font-bold text-orange-600">
            {{ $ringkasan['transaksiHariIni'] }}
        </p>
    </div>

    <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-orange-100">
        <p class="text-sm text-slate-500">Omzet Hari Ini</p>

        <p class="mt-2 text-2xl font-bold text-orange-600">
            Rp {{ number_format($ringkasan['omzetHariIni'], 0, ',', '.') }}
        </p>
    </div>

</section>
@endsection