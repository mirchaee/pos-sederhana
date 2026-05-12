@extends('layouts.app')

@section('title', 'Pelanggan')

@section('content')
<div class="mb-6">
    <p class="text-sm font-semibold uppercase tracking-wide text-orange-600">
        Pelanggan
    </p>

    <h2 class="text-2xl font-bold text-slate-900">
        Daftar Pelanggan
    </h2>
</div>

<div class="grid gap-4 md:grid-cols-3">
    @foreach ($pelanggan as $item)

        <article class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-orange-100">

            <h3 class="text-lg font-bold text-slate-900">
                {{ $item['nama'] }}
            </h3>

            <p class="mt-1 text-sm text-slate-500">
                {{ $item['no_hp'] }}
            </p>

            <span class="mt-4 inline-flex rounded-full bg-orange-100 px-3 py-1 text-xs font-semibold text-orange-700">
                {{ $item['level'] }}
            </span>

        </article>

    @endforeach
</div>
@endsection