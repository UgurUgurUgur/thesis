<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Todo;

class OpenAIController extends Controller
{
    public function handleFormSubmission(Request $request, $taskId)
    {
        // Get the input from the form
        $userInput = $request->input('user_input');
    
        // Get the description from the database based on the task ID
        $task = Todo::findOrFail($taskId);
        $description = $task->description;
    
        // Combine the user input and description as the prompt
        $prompt = "How can I do this task the most efficient way? This is the description of my task: " . $description;
    
        // Send the prompt to the ChatGPT API
        $response = Http::post('https://api.openai.com/v1/engines/davinci-codex/completions', [
            'prompt' => $prompt,
            'max_tokens' => 100,
        ])->throw();
    
        // Get the generated response from the API
        $chatGptResponse = $response['choices'][0]['text'];
    
        return view('viewTasks', compact('chatGptResponse', 'task'));
    }

}
