<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ringkasan = [
        'jumlahProduk' => 24,
        'jumlahPelanggan' => 18,
        'transaksiHariIni' => 7,
        'omzetHariIni' => 850000,
        ];

        return view('dashboard', compact('ringkasan'));
    }
}
