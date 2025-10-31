<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function posts(Request $request)
    {
        $locale = $request->query('locale', 'en');
        $category = $request->query('category');
        $query = BlogPost::with(['categories', 'author:id,name,last_name,email,avatar_path'])
            ->where('locale', $locale)
            ->orderByDesc('updated_at');
        if ($category) {
            $query->whereHas('categories', fn ($q) => $q->where('slug', $category));
        }
        return response()->json($query->paginate(10));
    }

    public function show(Request $request, string $slug)
    {
        $locale = $request->query('locale', 'en');
        $post = BlogPost::with(['categories', 'author:id,name,last_name,email,avatar_path'])
            ->where('locale', $locale)
            ->where('slug', $slug)
            ->firstOrFail();
        return response()->json($post);
    }

    public function categories(Request $request)
    {
        $locale = $request->query('locale', 'en');
        return response()->json(BlogCategory::where('locale', $locale)->orderBy('name')->get());
    }
}


