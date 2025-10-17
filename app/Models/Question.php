<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
	protected $fillable = [
		'key',
		'locale',
		'text',
		'position',
	];

	public function responses(): HasMany
	{
		return $this->hasMany(QuestionResponse::class);
	}
}


