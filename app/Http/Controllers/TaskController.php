<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $todos = DB::table('todos')->get();
        return view('todo', ['todos' => $todos]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'task_title' => 'required|string|max:255',
            'priority' => 'required',
            'description' => 'required|string|max:500',
        ]);

        // Create a new Task instance with the validated form data
        $task = Todo::create([
            'task_title' => $validatedData['task_title'],
            'priority' => $validatedData['priority'],
            'description' => $validatedData['description'],
        ]);      

        // Save the task to the database
        $task->save();
         // redirection
    return redirect('/todo')->with('status', 'todo added');
    }
   
}
