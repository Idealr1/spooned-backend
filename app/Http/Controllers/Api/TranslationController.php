<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Translation;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
	public function index(Request $request)
	{
		$locale = $request->query('locale', 'en');
		$namespace = $request->query('namespace');

		$query = Translation::query()->where('locale', $locale);
		if ($namespace) {
			$query->where('namespace', $namespace);
		}

		$items = $query->get();

		$flat = [];
		foreach ($items as $item) {
			$decoded = json_decode($item->value, true);
			$flat[$item->key] = $decoded === null ? $item->value : $decoded;
		}

		return response()->json($flat);
	}
}


