@extends('layouts.app')

@section('title', 'Laporan Mingguan')

@section('content')
<div class="mb-6">
    <h2 class="text-2xl font-bold text-slate-900">Ringkasan Laporan Mingguan</h2>
</div>

<div class="grid gap-4 md:grid-cols-2">
    <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-orange-100">
        <p class="text-sm text-slate-500">Total Transaksi</p>
        <p class="mt-2 text-3xl font-bold text-orange-600">{{ $dataLaporan['total_transaksi'] }}</p>
    </div>

    <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-orange-100">
        <p class="text-sm text-slate-500">Total Omzet</p>
        <p class="mt-2 text-3xl font-bold text-orange-600">Rp {{ number_format($dataLaporan['total_omzet'], 0, ',', '.') }}</p>
    </div>
</div>
@endsection