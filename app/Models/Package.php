<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name', 'speed', 'price', 'features', 'is_featured',
    ];

    protected $casts = [
    'features' => 'array',    // Wajib ada ini agar daftar fitur terbaca sebagai daftar, bukan teks
    'is_featured' => 'boolean',
];
}