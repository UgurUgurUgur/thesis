<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Todo::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'task_title' => 'required',
            'priority' => 'required',
            'description' => 'required',
        ]);

        // Create a new Task instance with the validated form data
        $task = new Todo([
            'task_title' => $validatedData['task_title'],
            'priority' => $validatedData['priority'],
            'description' => $validatedData['description'],
        ]);

        // Save the task to the database
        $task->save();
    }
}
