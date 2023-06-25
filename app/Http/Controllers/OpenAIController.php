<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Todo;

class OpenAIController extends Controller
{
    public function viewTask($taskId)
    {
        $task = Todo::findOrFail($taskId);
        
        $prompt = "How can I do this task the most efficient way? This is the description of my task: " . $task->description;
    
        $response = Http::post('https://api.openai.com/v1/engines/davinci-codex/completions', [
            'prompt' => $prompt,
            'max_tokens' => 100,
        ])->throw();
    
        $chatGptResponse = $response['choices'][0]['text'];
    
        return view('viewTasks', compact('task', 'chatGptResponse'));
    }
    
}
