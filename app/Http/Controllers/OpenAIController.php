<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;

class OpenAIController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $taskTitle = $request->input('task_title');
        $description = $request->input('description');

        $q_search = "How can I do this task efficiently? My task is ${taskTitle} and this is its description: ${description}. If you need more clarity, ask me the question: Could you describe your task please?";

        $data = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post("https://api.openai.com/v1/chat/completions", [
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "user",
                    "content" => $q_search
                ]
            ],
            "temperature" => 0.5,
            "max_tokens" => 200,
            "top_p" => 1.0,
            "frequency_penalty" => 0.52,
            "presence_penalty" => 0.5,
            "stop" => ["11."]
        ])->json();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }
}
