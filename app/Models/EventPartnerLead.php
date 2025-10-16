<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventPartnerLead extends Model
{
    protected $fillable = [
        'company_name',
        'contact_name',
        'email',
        'phone',
        'message',
        'meta',
        'ip',
        'user_agent',
    ];

    protected $casts = [
        'meta' => 'array',
    ];
}
