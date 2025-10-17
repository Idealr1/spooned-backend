<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionResponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
	public function index(Request $request)
	{
		$locale = $request->query('locale', 'en');
		$questions = Question::where('locale', $locale)->orderBy('position')->get();
		return response()->json($questions);
	}

	public function storeResponse(Request $request, Question $question)
	{
		$data = $request->validate([
			'response' => 'required|string',
			'email' => 'nullable|email',
		]);
		$response = QuestionResponse::create([
			'question_id' => $question->id,
			'email' => $data['email'] ?? null,
			'response' => $data['response'],
			'ip' => $request->ip(),
			'user_agent' => (string) $request->userAgent(),
		]);
		return response()->json(['success' => true, 'id' => $response->id]);
	}
}


