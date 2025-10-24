<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BlogPost extends Model
{
	protected $fillable = [
		'title',
		'slug',
		'locale',
		'thumbnail_path',
		'detail_images',
		'description',
	];

	protected $casts = [
		'detail_images' => 'array',
	];

	public function categories(): BelongsToMany
	{
		return $this->belongsToMany(BlogCategory::class, 'blog_category_post');
	}
}


