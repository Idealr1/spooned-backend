<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterSignup extends Model
{
    protected $fillable = [
        'email',
        'source',
        'ip',
        'user_agent',
    ];
}
