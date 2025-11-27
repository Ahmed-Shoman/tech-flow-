<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'image',
        'website_link',
        'frontend_tech',
        'backend_tech',
        'gallery',
    ];

    protected $casts = [
        'frontend_tech' => 'array',
        'backend_tech' => 'array',
        'gallery' => 'array',
    ];
}