<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', [
        'namaAplikasi' => 'POS Sederhana',
        'deskripsi' => 'Aplikasi latihan transaksi jual beli berbasis Laravel.',
        'fiturAwal' => [
            'Manajemen Produk',
            'Manajemen Pelanggan',
            'Transaksi Penjualan',
            'Laporan Sederhana',
        ],
    ]);
});