@extends('layouts.app')

@section('title', 'Transaksi')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <div>
        <p class="text-sm font-semibold uppercase tracking-wide text-orange-600">
            Transaksi
        </p>
        <h2 class="text-2xl font-bold text-slate-900">
            Riwayat Transaksi
        </h2>
    </div>
    <button class="rounded-xl bg-orange-600 px-4 py-2 text-sm font-semibold text-white hover:bg-orange-700">
        Transaksi Baru
    </button>
</div>

<div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-orange-100">
    <table class="w-full text-left text-sm">
        <thead class="bg-orange-100 text-orange-800">
            <tr>
                <th class="px-4 py-3">Kode</th>
                <th class="px-4 py-3">Pelanggan</th>
                <th class="px-4 py-3">Tanggal</th>
                <th class="px-4 py-3">Total</th>
                <th class="px-4 py-3">Status</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-orange-100">
            @foreach ($transaksi as $item)
                <tr class="hover:bg-orange-50">
                    <td class="px-4 py-3 font-medium">
                        {{ $item['kode'] }}
                    </td>
                    <td class="px-4 py-3">
                        {{ $item['pelanggan'] }}
                    </td>
                    <td class="px-4 py-3">
                        {{ $item['tanggal'] }}
                    </td>
                    <td class="px-4 py-3">
                        Rp {{ number_format($item['total'], 0, ',', '.') }}
                    </td>
                    <td class="px-4 py-3">
                        <span class="rounded-full bg-orange-100 px-3 py-1 text-xs font-semibold text-orange-700">
                            {{ $item['status'] }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection