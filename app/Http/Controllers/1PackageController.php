<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function show($id)
    {
        // Data statis paket wisata
        $packages = [
            1 => [
                'name' => 'Paket 1 Hari',
                'description' => 'Ini adalah deskripsi lengkap tentang Paket 1 Hari.',
                'image_url' => 'https://via.placeholder.com/300',
            ],
            2 => [
                'name' => 'Paket 2 Hari',
                'description' => 'Ini adalah deskripsi lengkap tentang Paket 2 Hari.',
                'image_url' => 'https://via.placeholder.com/300',
            ],
            3 => [
                'name' => 'Paket Picnic',
                'description' => 'Ini adalah deskripsi lengkap tentang Paket Picnic.',
                'image_url' => 'https://via.placeholder.com/300',
            ],
        ];

        // Pastikan ID paket valid
        if (!array_key_exists($id, $packages)) {
            abort(404); // Jika ID tidak ditemukan
        }

        // Ambil detail paket berdasarkan ID
        $package = $packages[$id];

        // Tampilkan halaman detail paket
        return view('package.detail', compact('package'));
    }
}
