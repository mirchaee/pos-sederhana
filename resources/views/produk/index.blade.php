@extends('layouts.app')

@section('title', 'Produk')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <div>
        <p class="text-sm font-semibold uppercase tracking-wide text-orange-600">
            Produk
        </p>

        <h2 class="text-2xl font-bold text-slate-900">
            Daftar Produk
        </h2>
    </div>

    <button class="rounded-xl bg-orange-600 px-4 py-2 text-sm font-semibold text-white hover:bg-orange-700">
        Tambah Produk
    </button>
</div>

<div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-orange-100">
    <table class="w-full text-left text-sm">

        <thead class="bg-orange-100 text-orange-800">
            <tr>
                <th class="px-4 py-3">Kode</th>
                <th class="px-4 py-3">Nama Produk</th>
                <th class="px-4 py-3">Harga</th>
                <th class="px-4 py-3">Stok</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-orange-100">
            @foreach ($produk as $item)
                <tr class="hover:bg-orange-50">
                    <td class="px-4 py-3 font-medium">
                        {{ $item['kode'] }}
                    </td>

                    <td class="px-4 py-3">
                        {{ $item['nama'] }}
                    </td>

                    <td class="px-4 py-3">
                        Rp {{ number_format($item['harga'], 0, ',', '.') }}
                    </td>

                    <td class="px-4 py-3">
                        {{ $item['stok'] }}
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection