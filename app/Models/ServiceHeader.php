<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceHeader extends Model
{
    use HasFactory;
    protected $table = 'service_header'; // Ensure this matches your actual table name

    protected $fillable = [
        'header',
        'sub_content',
    ];
}
