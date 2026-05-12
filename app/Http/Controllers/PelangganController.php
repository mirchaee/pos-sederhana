<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {

        $pelanggan = [
        ['nama' => 'Ayu Lestari', 'no_hp' => '081234567890', 'level' => 'Member'],
        ['nama' => 'Bima Pratama', 'no_hp' => '082233445566', 'level' => 'Umum'],
        ['nama' => 'Citra Amelia', 'no_hp' => '083344556677', 'level' => 'Member'],
        ];
        return view('pelanggan.index', compact('pelanggan'));

    }
}
