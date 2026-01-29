<?php

use Illuminate\Support\Facades\Route;

// Ubah 'welcome' menjadi 'landing'
Route::get('/', function () {
    return view('landing');
});