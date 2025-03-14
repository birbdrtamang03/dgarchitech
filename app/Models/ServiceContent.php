<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'images'
    ];

    protected $casts = [
        'images' => 'array'
    ];
}
