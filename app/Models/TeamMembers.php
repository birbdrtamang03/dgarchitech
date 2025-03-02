<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMembers extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_path',
        'name',
        'designation',
        'social_media'
    ];

    // Ensure social_media is cast as an array
    protected $casts = [
        'social_media' => 'array',
    ];
}
