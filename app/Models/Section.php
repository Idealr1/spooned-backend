<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'key',
        'title',
        'content',
        'image_path',
        'locale',
    ];

    protected $casts = [
        'content' => 'array',
    ];
}
