<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/paket-wisata', function () {
    return view('pages.paketwisata');
})->name('paket-wisata');

Route::get('/paket-outbound', function () {
    return view('pages.paketoutbound');
})->name('paket-outbound');

Route::get('/sewa-kendaraan', function () {
    return view('pages.sewakendaraan');
})->name('sewa-kendaraan');

Route::get('/custom-trip', function () {
    return view('pages.customtrip');
})->name('custom-trip');

Route::get('/wisata-details', function () {
    return view('layouts.details-wisata.wisata-details');
})->name('wisata-details');

Route::get('/outbound-details', function () {
    return view('layouts.details-outbound.outbound-details');
})->name('outbound-details');