<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = [
        ['kode' => 'TRX-001', 'pelanggan' => 'Ayu Lestari', 'tanggal' => '2026-05-05', 'total' =>
        54500, 'status' => 'Lunas'],
        ['kode' => 'TRX-002', 'pelanggan' => 'Bima Pratama', 'tanggal' => '2026-05-05', 'total'
        => 23000, 'status' => 'Lunas'],
        ['kode' => 'TRX-003', 'pelanggan' => 'Umum', 'tanggal' => '2026-05-05', 'total' => 12000,
        'status' => 'Draft'],
        ];

        return view('transaksi.index', compact('transaksi'));
    }
}
