<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'job_title',
        'content',
        'rating',
        'avatar_color',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'rating' => 'integer',
    ];

    public function getInitialAttribute(): string
    {
        return strtoupper(substr($this->name, 0, 1));
    }
}
