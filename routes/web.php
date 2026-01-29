<?php

use App\Models\Package;
use App\Models\Partner;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing', [
        'packages' => Package::all(),
        'partners' => Partner::all(),
    ]);
});