<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
        ['kode' => 'BRG-001', 'nama' => 'Kopi Sachet', 'harga' => 2500, 'stok' => 35],
        ['kode' => 'BRG-002', 'nama' => 'Roti Coklat', 'harga' => 4500, 'stok' => 20],
        ['kode' => 'BRG-003', 'nama' => 'Air Mineral', 'harga' => 3000, 'stok' => 50],
        ['kode' => 'BRG-004', 'nama' => 'Teh Kotak', 'harga' => 5000, 'stok' => 16],
        ];

        return view('produk.index', compact('produk'));
    }
}
