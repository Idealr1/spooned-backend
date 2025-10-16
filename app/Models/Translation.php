<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
	protected $fillable = [
		'namespace',
		'key',
		'locale',
		'value',
	];

    // value is stored as raw text; no casting
}


