<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuestionResponse extends Model
{
	protected $fillable = [
		'question_id',
		'email',
		'response',
		'ip',
		'user_agent',
	];

	public function question(): BelongsTo
	{
		return $this->belongsTo(Question::class);
	}
}


