<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BetaRegistration extends Model
{
    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'meta',
        'ip',
        'user_agent',
    ];

    protected $casts = [
        'meta' => 'array',
    ];
}
