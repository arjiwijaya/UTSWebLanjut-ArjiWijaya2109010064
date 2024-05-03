<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function tambahProduk()
    {
        return view('form');
    }
    public function daftarProduk()
    {
        // $arr = [
        //     ['nama_produk' => 'Beras', 'jumlah' => 10, 'expired' => '2024-12-31', 'satuan' => 'pcs'],
        //     ['nama_produk' => 'Sabun', 'jumlah' => 20, 'expired' => '2025-06-30', 'satuan' => 'kg'],
        //     ['nama_produk' => 'Kerang', 'jumlah' => 15, 'expired' => '2024-09-15', 'satuan' => 'm'],
        //     ['nama_produk' => 'Sunlight', 'jumlah' => 30, 'expired' => '2024-11-30', 'satuan' => 'box'],
        //     ['nama_produk' => 'Anjay', 'jumlah' => 25, 'expired' => '2025-03-20', 'satuan' => 'liter'],
        // ];
        $arr = [
            ['nama_produk' => 'Gula', 'jumlah' => 5, 'expired' => '2024-12-31', 'satuan' => 'pcs'],
            ['nama_produk' => 'Sikat Gigi', 'jumlah' => 15, 'expired' => '2025-06-30', 'satuan' => 'kg'],
            ['nama_produk' => 'Sampo', 'jumlah' => 25, 'expired' => '2024-09-15', 'satuan' => 'm'],
            ['nama_produk' => 'Deterjen', 'jumlah' => 30, 'expired' => '2024-11-30', 'satuan' => 'box'],
            ['nama_produk' => 'Minyak Goreng', 'jumlah' => 10, 'expired' => '2025-03-20', 'satuan' => 'liter'],
        ];
        return view('produk', compact('arr'));
    }
}
