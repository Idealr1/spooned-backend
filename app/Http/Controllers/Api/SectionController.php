<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(Request $request)
    {
        $locale = $request->query('locale');
        $keysParam = $request->query('keys');

        $query = Section::query();
        if ($locale) {
            $query->where('locale', $locale);
        }

        // Support fetching by multiple keys: ?keys=hero,launch or ?keys[]=hero&keys[]=launch
        if ($keysParam) {
            $keys = is_array($keysParam)
                ? $keysParam
                : array_filter(array_map('trim', explode(',', (string) $keysParam)));

            if (! empty($keys)) {
                $query->whereIn('key', $keys);
                $sections = $query->get()->keyBy('key');
                return response()->json($sections);
            }
        }

        return response()->json($query->get());
    }

    public function show(Request $request, string $key)
    {
        $locale = $request->query('locale');
        $section = Section::where('key', $key)
            ->when($locale, fn($q) => $q->where('locale', $locale))
            ->firstOrFail();
        return response()->json($section);
    }
}
