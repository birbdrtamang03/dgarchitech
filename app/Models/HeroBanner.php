<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroBanner extends Model {
    use HasFactory;

    protected $fillable = [
        'image_path',
        'main_text',
        'sub_text',
        'social_media'
    ];

    // Ensure social_media is cast as an array
    protected $casts = [
        'social_media' => 'array',
    ];
}
