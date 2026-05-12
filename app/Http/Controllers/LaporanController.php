<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $dataLaporan = [
            'total_transaksi' => 125,
            'total_omzet' => 15000000,
            'periode' => 'Mei 2026'
        ];

        return view('laporan.index', compact('dataLaporan'));
    }
}
