<?php

namespace App\Filament\Resources\BlogPostResource\Pages;

use App\Filament\Resources\BlogPostResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions;
use App\Models\BlogPost;
use Illuminate\Support\Str;

class EditBlogPost extends EditRecord
{
    protected static string $resource = BlogPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('translateToGerman')
                ->label('Translate to German')
                ->requiresConfirmation()
                ->action(function () {
                    /** @var BlogPost $post */
                    $post = $this->record;
                    // ensure a unique German slug
                    $baseSlug = $post->slug;
                    if (!Str::endsWith($baseSlug, '-de')) {
                        $baseSlug .= '-de';
                    }
                    $slug = $baseSlug;
                    $counter = 2;
                    while (BlogPost::where('locale', 'de')->where('slug', $slug)->exists()) {
                        $slug = $baseSlug . '-' . $counter++;
                    }

                    $new = BlogPost::create([
                        'title' => $post->title,
                        'slug' => $slug,
                        'locale' => 'de',
                        'thumbnail_path' => $post->thumbnail_path,
                        'detail_images' => $post->detail_images,
                        'description' => $post->description,
                    ]);
                    $new->categories()->sync($post->categories()->pluck('blog_categories.id')->all());
                    return redirect(BlogPostResource::getUrl('edit', ['record' => $new->getKey()]));
                }),
        ];
    }
}


