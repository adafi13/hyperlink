<?php

use Illuminate\Support\Facades\Route;
use App\Models\Package; // PENTING: Jangan lupa baris ini!

Route::get('/', function () {
    // Ambil semua paket dari database
    $packages = Package::all();
    
    // Kirim data $packages ke view 'landing'
    return view('landing', compact('packages'));
});