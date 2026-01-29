<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'speed',
        'price',
        'features',
        'is_featured',
    ];

    // Menggunakan 's' (casts) agar fitur otomatis menjadi array
    protected $casts = [
        'features' => 'array',
        'is_featured' => 'boolean',
    ];
}